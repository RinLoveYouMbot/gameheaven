<?php
session_start();
require_once "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);
$status = 0;

$sqlSelect = mysqli_query($koneksi, "SELECT * FROM akun WHERE username_akun = '$username' AND password_akun = '$password' ");
$baris = mysqli_num_rows($sqlSelect);

if ($baris == 1) {
    while ($do = mysqli_fetch_assoc($sqlSelect)) {
        $status = $do['status_akun'];
    }
    if ($status == 1) {
        $_SESSION['user'] = $username;
        $_SESSION['status'] = "admin";
        header("location:beranda_admin.php");
    } else {
        echo "Ini untuk beranda user";
    }
} else {
}
