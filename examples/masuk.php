<?php
session_start(); 
include('db_connect.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Halaman buat masuk
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="register-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Daftar dulu bos." data-placement="bottom" target="_blank">
          <span>MASUK•</span>
        </a>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header">
      <div class="page-header-image"></div>
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 offset-lg-0 offset-md-3">
              <div id="square7" class="square square-7"></div>
              <div id="square8" class="square square-8"></div>
              <div class="card card-register">
                <div class="card-header">
                  <img class="card-img" src="../assets/img/square1.png" alt="Card image">
                  <h4 class="card-title">Masuk</h4>
                </div>
                <div class="card-body">
                  <form method='POST' action='masuk.php' class="form">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input name='username' type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input name='password' type="password" class="form-control" placeholder="Kata Sandi">
                    </div>
                    <button type="submit" name="masuk" class="btn btn-info btn-round btn-lg">Masuk </button>
                    <?php
<<<<<<< HEAD
                      if (isset ($_POST['daftar'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $pas=md5($password);
                        ($sql = "SELECT * FROM admint WHERE username = '$username' and passcode = '$pas'") or die(mysql_error());
                        $q = $connect->query($sql);
                          if ($q) {
                            echo "berhasil boss";
                            $_SESSION['username']=$username;
                            header("location:landing-page.php");
                          } else {
                            echo "Error: ".$sql."<br>".$connect->error;
                            }
                          $connect->close();
                          }
                            ?>
=======
                      if (isset ($_POST['masuk'])) {
                        echo "fuck you";
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $sql = "SELECT * FROM admint WHERE username = '$username' and passcode = '$password'";
                        $q = $connect->query($sql);
                        $cek=mysqli_fetch_array($q,MYSQLI_ASSOC);
                        printf ("%s %s\n $cek",$cek["username"],$cek["passcode"]);
                        if ($cek) {
                          $_SESSION['username']=$username;
                          header("location:landing-page.php");
                        } else {
                          echo "bangsat";
                        }
                      }
                    ?>
>>>>>>> ba3e6a85b327db6834a6e1073933e633751b9990
                  </form>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
          </div>
          <div class="register-bg"></div>
          <div id="square1" class="square square-1"></div>
          <div id="square2" class="square square-2"></div>
          <div id="square3" class="square square-3"></div>
          <div id="square4" class="square square-4"></div>
          <div id="square5" class="square square-5"></div>
          <div id="square6" class="square square-6"></div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
</body>
<<<<<<< HEAD
</html>


<?php 
session_start();
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
($sql = "select * from admin where uname='$uname' and pass='$pas'")or die(mysql_error());
$q = $connect->query($sql);
if($q ==1 ){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>
=======
</html>
>>>>>>> ba3e6a85b327db6834a6e1073933e633751b9990
