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
    <div class="content">
    <div class="card">
        <div class="card-header">
            <h4>Dataset : Nilai Mahasiswa</h4>
        </div>
        <div class="card-body">
        
        <?php 
            if(isset($_GET['berhasil'])){
                echo "<p class='text-success'>".$_GET['berhasil']."Data berhasil ditemukan</p>";
            }
        ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th width="12%">NIM</th>
                            <th>Nama</th>
                            <th class="text-center" width="10%">UTS</th>
                            <th class="text-center" width="10%">UAS</th>
                            <th class="text-center" width="10%">TUGAS</th>
                            <th class="text-center" width="10%">GRADE</th>
                            <th>Keterangan</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include '../koneksi.php';
                            $sql = "SELECT * FROM dataset";
                            $query = mysqli_query($koneksi,$sql);
                            $i=1;
                            while($nilai = mysqli_fetch_array($query))
                            {?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $nilai['nim'];?></td>
                                <td><?php echo $nilai['nama'];?></td>
                                <td class="text-center"><?php echo $nilai['uts'];?></td>
                                <td class="text-center"><?php echo $nilai['uas'];?></td>
                                <td class="text-center"><?php echo $nilai['tugas'];?></td>
                                <td class="text-center"><?php echo $nilai['grade'];?></td>
                                <td class="text-center"><?php echo $nilai['keterangan'];?></td>
                            </tr>
                            <?php } ?>
                            <?php 
                                $cek = mysqli_num_rows($query);
                                if($cek<=0){
                            ?>
                            <tr><td colspan="8">Data Kosong</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div><!--./card-body-->
    </div><!--./card-->
    </div><!--./content-->
    <div class="clear-both"></div>
</div>
</body>
</html>