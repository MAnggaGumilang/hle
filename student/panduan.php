<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include("../connect.php");
if (isset($_SESSION['idlog']) && isset($_SESSION['namalog'])){
$idlog=$_SESSION['idlog'];
$namalog=$_SESSION['namalog'];
?>
<!DOCTYPE html>
<html class="" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panduan - Student</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/app.css">
    <meta class="foundation-mq">
</head>

<body>
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <div class="sidebar off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="l6sk4l-off-canvas" data-position="left" aria-hidden="true">
                <div class="profile">
                    <img class="thumbnail circle" src="../assets/img/profile-example.png">
                    <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
                    <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
                </div>
                <ul class="nav">
                    <li><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="../student/deskripsi.php"><i class="fa fa-info" aria-hidden="true"></i>Deskripsi</a></li>
                    <li class="active"><a href="panduan.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Panduan</a></li>
                    <li><a href="user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>SRL</a></li>
                    <li><a href="#"><i class="fa fa-unlock"></i> Logout</a></li>
                </ul>
            </div>
            <div class="main off-canvas-content" data-off-canvas-content="">
                <div class="title-bar hide-for-large">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="my-info" aria-expanded="false" aria-controls="my-info"></button>
                        <span class="title-bar-title">Sarah Ng</span>
                    </div>
                </div>
                <div class="row main-wrapper rounded">
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <h2>Panduan Penggunaan Sistem</h2>
                            <h5>Definisi Self-Regulation Learning</h5>
                            <p> SRL mengacu pada proses yang digunakan siswa untuk memfokuskan pikiran, perasaan, dan tindakan secara sistematis dalam pencapaian tujuan. </p>
                            <h5> Tahapan Proses Self-Regulation Learning</h5>
                            <ul class="accordion" data-accordion data-allow-all-closed="true">
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">1. Pengukuran MAI</a>
                                    <div class="accordion-content" data-tab-content>
                                        I would start in the open state, due to using the `is-active` state class.
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">2. Pemilihan Goals</a>
                                    <div class="accordion-content" data-tab-content>
                                        I would start in the open state, due to using the `is-active` state class.
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">3. Prior Knowledge Activation</a>
                                    <div class="accordion-content" data-tab-content>
                                        I would start in the open state, due to using the `is-active` state class.
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">4. Learning Strategy Option</a>
                                    <div class="accordion-content" data-tab-content>
                                        I would start in the open state, due to using the `is-active` state class.
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">5. Adaptive Learning Materials </a>
                                    <div class="accordion-content" data-tab-content>
                                        I would start in the open state, due to using the `is-active` state class.
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">6. Learning Evaluation </a>
                                    <div class="accordion-content" data-tab-content>
                                        I would start in the open state, due to using the `is-active` state class.
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">7. Self-Regulation Learning Evaluation </a>
                                    <div class="accordion-content" data-tab-content>
                                        I would start in the open state, due to using the `is-active` state class.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/foundation.js"></script>
    <script>
    $(document).foundation();
    </script>
</body>

</html>
<?php } 
else
{
header('location:../login/login_mhs.php');
}
?>