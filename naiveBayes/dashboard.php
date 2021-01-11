<!DOCTYPE HTML>
<html>
<head>
    <?php include '../_partials/headNb.php';?>
    <title>Naïve Bayes</title>
</head>
<body>
<?php 
    session_start();
    if($_SESSION['status'] != "login"){
        header('location:../index.php?pesan=belumlogin');
    }
    $nama = $_SESSION['username'];
?>
<?php include '../_partials/navbarNb.php'?>
<div class="wrapper container-fluid">
    <?php include '../_partials/sidebarNb.php'?>
    <div class="content" style="margin:45px 0 0 260px;">
        <div class="jumbotron gradien">
            <div class="container text-center">
            <h2 style="line-height:45px;">Aplikasi Prediksi Kelulusan Mahasiswa Dalam Mata Kuliah Pemrograman Berorientasi Objek Dengan Menggunakan Algoritma Naïve Bayes</h2>
           <br> <a href="klasifikasi.php" class="btn btn-danger btn-lg">Klik untuk mulai &#187;</a>
            <p class="lead text-center">
                <br><span style="letter-spacing:2px;">Data Mining & Warehouse</span>
                <br><span style="letter-spacing:5px;">UNIVERSITAS KATOLIK DE LA SALLE</span>
            </p>
            </div>
        </div>
    </div>
    <div class="clear-both"></div>
</div>
</body>
</html>