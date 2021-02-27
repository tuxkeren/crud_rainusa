<?php
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];
$_SESSION['user'] = $user;

// Koneksi ke DB
include 'koneksi.php';

$sql = "SELECT * FROM users WHERE username='$user' AND password=MD5('$pass')";
$result = mysqli_query($koneksi, $sql);

echo $sql;

// Cek jika data yang nik yang dimaksud
if ($data = mysqli_fetch_assoc($result) == 0) {
    header('Location:error.php');
    mysqli_close($koneksi);
} else {
    $sql2 = "SELECT * FROM users WHERE username=$user";
    $result2 = mysqli_query($koneksi, $sql);
    while ($data2 = mysqli_fetch_assoc($result2)) {

        // Cek level untuk tampilan dashboard.
        if ($data2['level'] == 0) {
            header('Location:halaman_user.php');
        } else {
            header('Location:halaman_admin.php');
        } 
    }
    mysqli_close($koneksi);
}