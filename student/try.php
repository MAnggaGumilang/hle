<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include("../connect.php");
?>

<!DOCTYPE html>
<html class="" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Student</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/asPieProgress.css">
    <meta class="foundation-mq">
</head>

<body onload="progress()">
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <div class="sidebar off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="l6sk4l-off-canvas" data-position="left" aria-hidden="true">
                <div class="profile">
                    <img class="thumbnail circle" src="../assets/img/profile-example.png">
                    <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
                    <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
                </div>
                <ul class="nav">
                    <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="../student/deskripsi.php"><i class="fa fa-info" aria-hidden="true"></i>Deskripsi</a></li>
                    <li><a href="panduan.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Panduan</a></li>
                    <li><a href="user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>SRL</a></li>
                    <li><a href="#"><i class="fa fa-unlock"></i> Logout</a></li>
                </ul>
            </div>
            <div class="main off-canvas-content" data-off-canvas-content="">
                <div class="title-bar hide-for-large">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="my-info" aria-expanded="false" aria-controls="my-info"></button>
                        <span class="title-bar-title"><?php echo $_SESSION['namalog'];?></span>
                    </div>
                </div>
                <div class="row main-wrapper rounded">
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="row top space">
                            <div class="columns">
                                <div class="top-bar">
                                    <div class="small-12 large-9 columns">
                                        <h4>Notifikasi</h4>



<?php $a=mysqli_num_rows(mysqli_query("
SELECT
tb_mai_page1.id_mhs,
tb_mai_page1.nama_lengkap,
tb_mai_page1.MAI1,
tb_mai_page1.MAI2,
tb_mai_page1.MAI3,
tb_mai_page1.MAI4,
tb_mai_page1.MAI5,
tb_mai_page1.MAI6,
tb_mai_page1.MAI7,
tb_mai_page2.MAI8,
tb_mai_page2.MAI9,
tb_mai_page2.MAI10,
tb_mai_page2.MAI11,
tb_mai_page2.MAI12,
tb_mai_page2.MAI13,
tb_mai_page2.MAI14,
tb_mai_page3.MAI15,
tb_mai_page3.MAI16,
tb_mai_page3.MAI17,
tb_mai_page3.MAI18,
tb_mai_page3.MAI19,
tb_mai_page3.MAI20,
tb_mai_page3.MAI21,
tb_mai_page4.MAI22,
tb_mai_page4.MAI23,
tb_mai_page4.MAI24,
tb_mai_page4.MAI25,
tb_mai_page4.MAI26,
tb_mai_page4.MAI27,
tb_mai_page4.MAI28,
tb_mai_page5.MAI29,
tb_mai_page5.MAI30,
tb_mai_page5.MAI31,
tb_mai_page5.MAI32,
tb_mai_page5.MAI33,
tb_mai_page5.MAI34,
tb_mai_page5.MAI35,
tb_mai_page6.MAI36,
tb_mai_page6.MAI37,
tb_mai_page6.MAI38,
tb_mai_page6.MAI39,
tb_mai_page6.MAI40,
tb_mai_page6.MAI41,
tb_mai_page6.MAI42,
tb_mai_page7.MAI43,
tb_mai_page7.MAI44,
tb_mai_page7.MAI45,
tb_mai_page7.MAI46,
tb_mai_page7.MAI47,
tb_mai_page7.MAI48,
tb_mai_page7.MAI49,
tb_mai_page7.MAI50,
tb_mai_page7.MAI51,
tb_mai_page7.MAI52
FROM
tb_mai_page1
INNER JOIN tb_mai_page2 ON tb_mai_page1.id_mhs = tb_mai_page2.id_mhs AND tb_mai_page1.nama_lengkap = tb_mai_page2.nama_lengkap
INNER JOIN tb_mai_page3 ON tb_mai_page3.nama_lengkap = tb_mai_page2.nama_lengkap AND tb_mai_page3.id_mhs = tb_mai_page2.id_mhs
INNER JOIN tb_mai_page4 ON tb_mai_page4.nama_lengkap = tb_mai_page3.nama_lengkap AND tb_mai_page4.id_mhs = tb_mai_page3.id_mhs
INNER JOIN tb_mai_page5 ON tb_mai_page5.nama_lengkap = tb_mai_page4.nama_lengkap AND tb_mai_page5.id_mhs = tb_mai_page4.id_mhs
INNER JOIN tb_mai_page6 ON tb_mai_page6.nama_lengkap = tb_mai_page5.nama_lengkap AND tb_mai_page6.id_mhs = tb_mai_page5.id_mhs
INNER JOIN tb_mai_page7 ON tb_mai_page7.nama_lengkap = tb_mai_page6.nama_lengkap AND tb_mai_page7.id_mhs = tb_mai_page6.id_mhs
WHERE tb_mai_page1.id_mhs = '$_SESSION[idlog]' AND tb_mai_page2.id_mhs = '$_SESSION[idlog]' AND tb_mai_page3.id_mhs = '$_SESSION[idlog]' AND tb_mai_page4.id_mhs = '$_SESSION[idlog]'
AND tb_mai_page5.id_mhs = '$_SESSION[idlog]' AND tb_mai_page6.id_mhs = '$_SESSION[idlog]' AND tb_mai_page7.id_mhs = '$_SESSION[idlog]'

                      "));
            if ($a==1){ ?>


  <h6 class="balance"> Skor MAI Anda adalah:</h6>
  <h8>
    Knowledge:

                  
                  <?php 
                      $sql = "SELECT
tb_mai_page1.id_mhs as id_mhs,
tb_mai_page1.nama_lengkap as nama_lengkap,
tb_mai_page1.MAI1 as MAI1,
tb_mai_page1.MAI2,
tb_mai_page1.MAI3,
tb_mai_page1.MAI4,
tb_mai_page1.MAI5,
tb_mai_page1.MAI6,
tb_mai_page1.MAI7,
tb_mai_page2.MAI8,
tb_mai_page2.MAI9,
tb_mai_page2.MAI10,
tb_mai_page2.MAI11,
tb_mai_page2.MAI12,
tb_mai_page2.MAI13,
tb_mai_page2.MAI14,
tb_mai_page3.MAI15,
tb_mai_page3.MAI16,
tb_mai_page3.MAI17,
tb_mai_page3.MAI18,
tb_mai_page3.MAI19,
tb_mai_page3.MAI20,
tb_mai_page3.MAI21,
tb_mai_page4.MAI22,
tb_mai_page4.MAI23,
tb_mai_page4.MAI24,
tb_mai_page4.MAI25,
tb_mai_page4.MAI26,
tb_mai_page4.MAI27,
tb_mai_page4.MAI28,
tb_mai_page5.MAI29,
tb_mai_page5.MAI30,
tb_mai_page5.MAI31,
tb_mai_page5.MAI32,
tb_mai_page5.MAI33,
tb_mai_page5.MAI34,
tb_mai_page5.MAI35,
tb_mai_page6.MAI36,
tb_mai_page6.MAI37,
tb_mai_page6.MAI38,
tb_mai_page6.MAI39,
tb_mai_page6.MAI40,
tb_mai_page6.MAI41,
tb_mai_page6.MAI42,
tb_mai_page7.MAI43,
tb_mai_page7.MAI44,
tb_mai_page7.MAI45,
tb_mai_page7.MAI46,
tb_mai_page7.MAI47,
tb_mai_page7.MAI48,
tb_mai_page7.MAI49,
tb_mai_page7.MAI50,
tb_mai_page7.MAI51,
tb_mai_page7.MAI52
FROM
tb_mai_page1
INNER JOIN tb_mai_page2 ON tb_mai_page1.id_mhs = tb_mai_page2.id_mhs AND tb_mai_page1.nama_lengkap = tb_mai_page2.nama_lengkap
INNER JOIN tb_mai_page3 ON tb_mai_page3.nama_lengkap = tb_mai_page2.nama_lengkap AND tb_mai_page3.id_mhs = tb_mai_page2.id_mhs
INNER JOIN tb_mai_page4 ON tb_mai_page4.nama_lengkap = tb_mai_page3.nama_lengkap AND tb_mai_page4.id_mhs = tb_mai_page3.id_mhs
INNER JOIN tb_mai_page5 ON tb_mai_page5.nama_lengkap = tb_mai_page4.nama_lengkap AND tb_mai_page5.id_mhs = tb_mai_page4.id_mhs
INNER JOIN tb_mai_page6 ON tb_mai_page6.nama_lengkap = tb_mai_page5.nama_lengkap AND tb_mai_page6.id_mhs = tb_mai_page5.id_mhs
INNER JOIN tb_mai_page7 ON tb_mai_page7.nama_lengkap = tb_mai_page6.nama_lengkap AND tb_mai_page7.id_mhs = tb_mai_page6.id_mhs
WHERE tb_mai_page1.id_mhs = '$_SESSION[idlog]' AND tb_mai_page2.id_mhs = '$_SESSION[idlog]' AND tb_mai_page3.id_mhs = '$_SESSION[idlog]' AND tb_mai_page4.id_mhs = '$_SESSION[idlog]'
AND tb_mai_page5.id_mhs = '$_SESSION[idlog]' AND tb_mai_page6.id_mhs = '$_SESSION[idlog]' AND tb_mai_page7.id_mhs = '$_SESSION[idlog]'

";
                      $no = 1;        
                      $hasil = mysqli_query($sql);
                      while($row=mysqli_fetch_assoc($hasil)){
                        echo $row[id_mhs];

                      }
                  ?>                
                




    <br>
    Regulation:
  </h8>
                                    </div>
                                    <div class="small-12 large-3 columns top space">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

            <?php
            }
            else{
                ?>


 <h6 class="balance">
                                        <span class="warning badge"> 1. </span> Anda belum mengikuti MAI tes</h6>
                                    </div>
                                    <div class="small-12 large-3 columns top space">
                                        <a href="../student/SRL/1-MAI-1.php" class="button expanded success"> MAI tes sekarang </a>
                                    </div>
                                </div>
                            </div>
                        </div>




                <?php
            } ?>




                                       
                        <div class="row top space">
                            <div class="columns">
                                <div class="top-bar">
                                    <div class="small-12 large-4 columns">
                                        <div class="tachometer">
                                            <div class="container">
    <div id="tachometer">
        <div id="gauge" class="200x160px"></div>
    </div>
</div>
                                        </div>
                                        </div>
                                                                            <div class="small-12 large-8 columns">

                                        <div class="status">
                                    <h4>Total Materi Yang Sudah Dipelajari</h4>
<div class="warning progress" role="progressbar" tabindex="0" aria-valuenow="25" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
  <div class="progress-meter" style="width: 25%">
    <p class="progress-meter-text">25%</p>
  </div>
</div>
                                    <h4>    Self-Regulated Learning Process</h4>
<div class="primary progress">
  <div class="progress-meter" style="width: 50%">
    <p class="progress-meter-text">50%</p>
  </div>
</div>
</div>
</div>

                            </div>
                            <div class="column">
                                <div class="top space">
                                    <table class="projects table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Activity</th>
                                                <th>Duration</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code>#T-1082</code></td>
                                                <td>
                                                    <a href="#">Log in</a>
                                                </td>
                                                <td> 1 min</td>
                                                <td><span class="status-ongoing"><i class="fa fa-circle"></i> ongoing</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
        <script src="../assets/js/raphael-2.1.4.min.js"></script>
            <script src="../assets/js/justgage.js"></script>
    <script>
    $(document).foundation();
     var g = new JustGage({
    id: "gauge",
    value: 20,
    min: 0,
    max: 100,
     pointer: true,
        pointerOptions: {
          toplength: -15,
          bottomlength: 10,
          bottomwidth: 12,
          color: '#8e8e93',
          stroke: '#ffffff',
          stroke_width: 3,
          stroke_linecap: 'round'
        },
    title: "Kemampuan SRL",
    textRenderer: customValue,
    hideMinMax: true,
    levelColors: [
             "#f44242",
          "#f4f141",
                    "#41f461"
        ]
  });
      function customValue(val) {
            if (val < 50) {
                return 'bad';
            } else if (val > 50 & val < 80) {
                return 'good';
            } else if (val > 81) {
                return 'excellent';
            }
        }
    </script>
    </script>
</body>
</html>
