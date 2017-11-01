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
    <title>User-Profile - Student</title>
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
                    <li><a href="panduan.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Panduan</a></li>
                    <li class="active"><a href="user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
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
                            <h2>User Profile</h2>
                        </div>
                        <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
                            <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Profile</a></li>
                            <li class="tabs-title"><a href="#panel2c">Password</a></li>
                        </ul>
                        <div class="tabs-content" data-tabs-content="collapsing-tabs">
                            <div class="tabs-panel is-active" id="panel1c">
                                <div class="row">
                                    <div class="small-12 large-4 columns">
                                        <p> Profile Picture </p>
                                        <img  src="../assets/img/profile-example.png" width="75%" class="thumbnail circle">
                                        <a href="#" class="hollow button expanded success top space" id="falseinput">Select Images</a>
                                        <input id="fileinput" type="file" style="display:none;" />
                                    </div>
                                    <div class="small-12 large-8 columns">
                                        <h6> Profile </h6>
                                        <hr/>
                                        <label> Name
                                            <input type="text" placeholder="Sarah" />
                                        </label>
                                        <label> Email
                                            <input type="email" placeholder="Sara@mail.ugm.ac.id" />
                                        </label>
                                        <label> Whatsapp Number
                                            <input type="text" placeholder="+628123456" />
                                        </label>
                                    </div>
                                    <div class="small-12 large-8 columns"> </div>
                                    <div class="small-12 large-4 columns">
                                        <a href="#" class="button success expanded">Update Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-panel" id="panel2c">
                                <div class="row">
                                    <div class="small-12 large-6 columns">
                                        <label>Old Password
                                            <input type="password" placeholder="******" />
                                        </label>
                                        <label>New Password
                                            <input type="password" placeholder="******" />
                                        </label>
                                        <label>Confirm New Password
                                            <input type="password" placeholder="******" />
                                        </label>
                                        <div class="row">
                                            <div class="small-12 large-6 columns">
                                                <a href="#" class="button success"> CHANGE </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small-12 large-6 columns">
                                    </div>
                                </div>
                            </div>
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
    $(document).ready(function() {
        $('#falseinput').click(function() {
            $("#fileinput").click();
        });
    });

    </script>
</body>

</html>
<?php } 
else
{
header('location:../../login/login_mhs.php');
}
?>
