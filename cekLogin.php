<?php
include 'koneksi.php';
// aktifkan session
session_start();
// tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
// seleksi username dan password
$query = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
$login = mysqli_query($koneksi,$query);
// hitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// mengecek apakah ada data yang ditangkap atau tidak
if($cek>0){
    $data_user = mysqli_fetch_assoc($login);
    $_SESSION['id'] = $data_user['id'];
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:naiveBayes/dashboard.php");
}else{
    header("location:index.php?pesan=salah");
}