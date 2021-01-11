<!DOCTYPE HTML>
<html>
<head>
    <?php include '../_partials/headNb.php'?>
    <title>Impor Data Excel</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['status'] != 'login'){
            header('location:../index.php?pesan=belumlogin');
        }
    ?>
    <?php include '../_partials/navbarNb.php'?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Upload File Excel</h3>
            </div>
            <div class="card-body">
                <form action="prosesImpor.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group col-5">
                        <label>Pilih File</label>
                        <input type="file" name="dataset" class="form-control"><br>
                        <input type="submit" class="btn btn-success btn-sm" value="Upload">
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>