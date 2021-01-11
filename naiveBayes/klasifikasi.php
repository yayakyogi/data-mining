<?php
$kondisi = 0;
// Variabel mean
$mean_uts_lulus = 68.42622951;// mean uts lulus
$mean_uas_lulus = 85.15409836;// mean uas lulus
$mean_tgs_lulus = 79.65616803;// mean tugas lulus
$array_mean_lulus = array('LULUS',round($mean_uts_lulus,2),round($mean_uas_lulus,2),round($mean_tgs_lulus,2));

$mean_uts_tdklulus = 25;// mean uts tidak lulus
$mean_uas_tdklulus = 26.25;// mean uas tidak lulus
$mean_tgs_tdklulus = 27.5;// mean tugas tidak lulus
$array_mean_tdklulus = array('TIDAK LULUS',round($mean_uts_tdklulus,2),round($mean_uas_tdklulus,2),round($mean_tgs_tdklulus,2));

// Variabel standar deviasi
$sd_uts_lulus = 11.31147541;// standar deviasi uts lulus
$sd_uas_lulus = 3.301195698;// standar deviasi uas lulus
$sd_tgs_lulus = 7.049552588;// standar deviasi tugas lulus
$array_sd_lulus = array('LULUS',round($sd_uts_lulus,2),round($sd_uas_lulus,2),round($sd_tgs_lulus,2));

$sd_uts_tdklulus = 13.46291202;// standar deviasi uts tidak lulus
$sd_uas_tdklulus = 12.43734296;// standar deviasi uas tidak lulus
$sd_tgs_tdklulus = 12.24744871;// standar deviasi tugas tidak lulus
$array_sd_tdklulus = array('TIDAK LULUS',round($sd_uts_tdklulus,2),round($sd_uas_tdklulus,2),round($sd_tgs_tdklulus,2));

// Probrabilitas kelulusan
$probabilitas_lulus = 0.884057971;
$probabilitas_tdklulus = 0.115942029;
$total_probabilitas = $probabilitas_lulus+$probabilitas_tdklulus;

// kelas lulus
$tes_uts_lulus = 0;
$tes_uas_lulus = 0;
$tes_tgs_lulus = 0;
// kelas tidak lulus
$tes_uts_tdklulus = 0;
$tes_uas_tdklulus = 0;
$tes_tgs_tdklulus = 0;

$kelas_lulus = 0;
$kelas_tdklulus = 0;

$hasil_klasifikasi = "Kosong";
// Hitung jika tombol submit sudah di klik
if(isset($_POST['submit'])){
    if($_POST['uts']!="" || $_POST['uas']!="" || $_POST['tgs']!=""){
        // Tangkap value dari form
        $tes_uts = $_POST['uts'];
        $tes_uas = $_POST['uas'];
        $tes_tgs = $_POST['tugas'];

        // perhitungan probabilitas tiap kelas dengan rumus distribusi gaus
        // kelas lulus
        $tes_uts_lulus = 1/sqrt(2*3.14*$sd_uts_lulus)*exp(-((pow($tes_uts-$mean_uts_lulus,2))/(2*pow($sd_uts_lulus,2))));
        $tes_uas_lulus = 1/sqrt(2*3.14*$sd_uas_lulus)*exp(-((pow($tes_uas-$mean_uas_lulus,2))/(2*pow($sd_uas_lulus,2))));
        $tes_tgs_lulus = 1/sqrt(2*3.14*$sd_tgs_lulus)*exp(-((pow($tes_tgs-$mean_tgs_lulus,2))/(2*pow($sd_tgs_lulus,2))));
        // kelas tidak lulus
        $tes_uts_tdklulus = 1/sqrt(2*3.14*$sd_uts_tdklulus)*exp(-((pow($tes_uts-$mean_uts_tdklulus,2))/(2*pow($sd_uts_tdklulus,2))));
        $tes_uas_tdklulus = 1/sqrt(2*3.14*$sd_uas_tdklulus)*exp(-((pow($tes_uas-$mean_uas_tdklulus,2))/(2*pow($sd_uas_tdklulus,2))));
        $tes_tgs_tdklulus = 1/sqrt(2*3.14*$sd_tgs_tdklulus)*exp(-((pow($tes_tgs-$mean_tgs_tdklulus,2))/(2*pow($sd_tgs_tdklulus,2))));

        // Kalikan semua kelas label yang lulus dan tidak
        $kelas_lulus = $tes_uts_lulus*$tes_uas_lulus*$tes_tgs_lulus*$probabilitas_lulus;
        $kelas_tdklulus = $tes_uts_tdklulus*$tes_uas_tdklulus*$tes_tgs_tdklulus*$probabilitas_tdklulus;

        // Cek nilai kelas label untuk mengetahui masuk klasifikasi lulus atau tidak
        if($kelas_lulus > $kelas_tdklulus){
            $hasil_klasifikasi = "LULUS";
        }else $hasil_klasifikasi = "TIDAK LULUS";
        $kondisi=1;
    }
    else{
        header("location:klasifikasi.php");
    }
}
?>
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
                <h4>Perhitungan Klasifikasi Naïve Bayes</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- MEAN-->
                    <div class="col-md-4">
                        <h6>Mean</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <thead>
                                        <tr>
                                            <th>KELAS</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            <th>TUGAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                                foreach($array_mean_lulus as $array){
                                                    echo "<td>".$array."</td>";
                                                } 
                                            ?>
                                        </tr>
                                        <tr>
                                            <?php 
                                                foreach($array_mean_tdklulus as $array){
                                                    echo "<td>".$array."</td>";
                                                }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->

                    <!-- STANDAR DEVIASI-->
                    <div class="col-md-4">
                        <h6>Standar Deviasi</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <thead>
                                        <tr>
                                            <th>KELAS</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            <th>TUGAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                                foreach($array_sd_lulus as $array){
                                                    echo "<td>".$array."</td>";
                                                } 
                                            ?>
                                        </tr>
                                        <tr>
                                            <?php
                                                foreach($array_sd_tdklulus as $array){
                                                    echo "<td>".$array."</td>";
                                                } 
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->

                    <!-- PROBABILITAS KELAS LABEL-->
                    <div class="col-md-4">
                        <h6>Probabilitas Kelas</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <thead>
                                        <tr>
                                            <th>KELAS</th>
                                            <th>NILAI</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>LULUS</td>
                                            <td><?php echo round($probabilitas_lulus,9);?></td>
                                            <td rowspan="2" class="rowspan"><?php echo $total_probabilitas;?></td>
                                        </tr>
                                        <tr>
                                            <td>TIDAK LULUS</td>
                                            <td><?php echo round($probabilitas_tdklulus,9);?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->
                </div><!--./row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="border-top:none;">
                        <div class="card-header">
                        <h6>Data Testing</h6>
                        </div>    
                        <div class="card-body">
                        <form action="" method="POST" onSubmit="validasi()">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">UTS</label>
                                <div class="col-sm-8">
                                    <input type="text" name="uts" id="uts" class="form-control">
                                </div>
                            </div><!--./form-row-->
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">UAS</label>
                                <div class="col-sm-8">
                                    <input type="text" name="uas" id="uas" class="form-control">
                                </div>
                            </div><!--./form-row-->
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">TUGAS</label>
                                <div class="col-sm-8">
                                    <input type="text" name="tugas" id="tugas" class="form-control">
                                </div>
                            </div><!--./form-row-->
                            <input type="submit" class="btn btn-info btn-sm btn-block" name="submit" value="Hitung &radic;">
                        </form><!--./form-->
                        </div><!--./card-->
                    </div><!--./card-->
                    </div><!--./col-md-4-->
                    <div class="col-md-9">
                    <h6>Hasil Klasifikasi</h6>
                        <div class="result">
                        <div class="row">
                            <div class="col-md-9">
                                <p class="lead">Hasil </p>
                                <div class="table-responsive">
                                <table class="table bg-light">
                                    <thead>
                                        <tr>
                                            <th>KELAS</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            <th>TUGAS</th>
                                            <th>HASIL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>LULUS</td>
                                            <td><?php echo round($tes_uts_lulus,9);?></td>
                                            <td><?php echo round($tes_uas_lulus,9);?></td>
                                            <td><?php echo round($tes_tgs_lulus,9);?></td>
                                            <td><?php echo round($kelas_lulus,9);?></td>
                                        </tr>
                                        <tr>
                                            <td>TIDAK LULUS</td>
                                            <td><?php echo round($tes_uts_tdklulus,9);?></td>
                                            <td><?php echo round($tes_uas_tdklulus,9);?></td>
                                            <td><?php echo round($tes_tgs_tdklulus,9);?></td>
                                            <td><?php echo round($kelas_tdklulus,9);?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--./table-responsive-->
                            </div>
                            <div class="col-md-3">
                                <p class="lead">Keterangan </p>
                                <?php
                                    if($kondisi==1){
                                        if($hasil_klasifikasi=='LULUS'){
                                            echo "<p class='hasil-klasifikasi alert alert-success'>".$hasil_klasifikasi."</p>";
                                        }
                                        else{
                                            echo "<p class='hasil-klasifikasi alert alert-danger'>".$hasil_klasifikasi."</p>";
                                        }
                                    }
                                    else{
                                        echo "<p class='hasil-klasifikasi alert alert-dark'>".$hasil_klasifikasi."</p>";
                                    }
                                ?>
                                <a href="klasifikasi.php" class="btn btn-danger btn-sm btn-block reset">reset</a>
                            </div>
                        </div><!--./row-->
                        </div><!--./jumbotron-->
                    </div><!--./col-md-8-->
                </div><!--./row-->
            </div><!--./card-body-->
        </div><!--./card-->
    </div><!--./content-->
    <div class="clear-both"></div>
</div>
</body>
<script type="text/javascript">
    function validasi(){
        var uts = document.getElementById("uts").value;
        var uas = document.getElementById("uas").value;
        var tgs = document.getElementById("uas").value;
        if(uts!="" && uas!="" && tgs!=""){
            return true;
        }else{
            alert("Form tidak boleh kosong");
            return false;
        }
    }
</script>
</html>