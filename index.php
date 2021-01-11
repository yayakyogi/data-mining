<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Kelompok 4 Data Mining</title>
</head>
<body>
    <div class="containers">
        <div class="wrap">
        <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=='logout'){
                    echo "<div class='alert alert-success' style='text-align:left;'>";
                    echo "<a href='index.php' class='close'> &times;</a>";
                    echo "Anda berhasil logout";
                    echo "</div>";
                }
                else if($_GET['pesan']=='salah'){
                    echo "<div class='alert alert-danger' style='text-align:left;'>";
                    echo "<a href='index.php' class='close'> &times;</a>";
                    echo "Username dan password anda salah";
                    echo "</div>";
                }
                else if($_GET['pesan']=='belumlogin'){
                    echo "<div class='alert alert-danger' style='text-align:left;'>";
                    echo "<a href='index.php' class='close'> &times;</a>";
                    echo "Harap login terlebih dahulu";
                    echo "</div>";
                }
            }
        ?>
        <div class="card">
            <div class="card-header">
                <h5>Näive Bayes Classifier</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <center><img src="assets/img/logo.png" class="img-fluid gambar"></center>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form action="cekLogin.php" method="POST">
                            <h5 class="judul-form">Login</h5>
                            <div class="form-group">    
                                <label for="email">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Email">
                            </div>
                            <div class="form-group">    
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <input type="submit" class="btn btn-success btn-block" value="LOGIN">
                        </form>
                    </div><!-- col md-->
                </div><!-- row -->
            </div><!-- card body-->
        </div><!-- card -->
        <bockquote class="blockquote text-center">
            <p class="lead" style="font-size:13pt;">Made by <span class="heart" style="font-size:13pt;">&hearts;</span> kelompok 4 - Data Mining & Warehouse</p>
        </blockqoute>
        </div>
    </div>
</body>
</html>