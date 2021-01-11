<?php
// include koneksi ke database
include "../koneksi.php";
// include library excel reader
include "../excel_reader2.php";
?>
<?php
// upload file excel
$target = basename($_FILES['dataset']['name']);
move_uploaded_file($_FILES['dataset']['tmp_name'],$target);
// beri permisi agar file xls dapat di baca
chmod($_FILES['dataset']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['dataset']['name'],false);
// mennghitung jumlah baris yang ditemukan
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yg berhasil ditemukan
$berhasil = 0;
for($i=2; $i<$jumlah_baris; $i++){
    // menangkap data yang ditemukan
    $nim   = $data->val($i,2);
    $nama  = $data->val($i,3);
    $uts   = $data->val($i,4);
    $uas   = $data->val($i,5);
    $tugas = $data->val($i,6);
    $grade = $data->val($i,8);

    if($nim!="" && $nama!="" && $uts!="" && $uas!="" && $tugas!="" && $grade!=""){
        // input data ke database
        $query = "INSERT INTO dataset (nim,nama,uts,uas,tugas,grade) VALUE ('$nim','$nama','$uts','$uas','$tugas','$grade')";
        $sql = mysqli_query($koneksi,$query);
        $berhasil++;
    }
}

// hapus kembali file xls yang di upload
unlink($_FILES['dataset']['name']);

// arahkan ke halaman dashboard
header("location:dataset.php?berhasil=$berhasil");