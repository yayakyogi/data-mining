<?php
$koneksi = mysqli_connect('localhost','root','','datamining');
if(!$koneksi){
    echo "Gagal terhubung".mysqli_error()."-".mysqli_errno();
}