<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include("connect.php");
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
    <title>4. Learning Option Strategy - Students</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/timeline.css">
    <meta class="foundation-mq">
    <style type="text/css">
    .page.heading a.button {
        float: left;
    }
    </style>
</head>

<!--<body>
<div class="large reveal" id="exampleModal1" data-reveal>
<div class="row"> 
<div class="large-4 small-12 columns">
          <img class="thumbnail" src="../../assets/img/teacher.png">
</div>
<div class="large-8 small-12 columns">
    <h2> Terimakasih Angga! </h2>
    <h3> Saatnya kamu memilih pilihan strategi belajar.</h3>
    <br/>
    <p> Berdasarkan hasil kuisioner MAI dan pemahaman awal kamu terhadap materi, sistem menyarankankan untuk kamu mengambil strategi: </p>
          <table class="projects table" id="content">
                    <thead>
                      <tr>
                        <th width="90%">Starategi</th>
                        <th width="5%">Rekomendasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <ul class="accordion" data-accordion data-allow-all-closed="true">
                            <li class="accordion-item" data-accordion-item>
                              <a href="#" class="accordion-title">1. Struktur Data dan Abstract Data Type (ADT)</a>
                              <div class="accordion-content" data-tab-content>
                                <span class="primary badge">
                                1.1. </span> Sturktur Data
                                <span class="secondary badge">
                                1.2. </span> Implementasi ADT
                              </div>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <span class="success label"> Lewati </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <ul class="accordion" data-accordion data-allow-all-closed="true">
                            <li class="accordion-item" data-accordion-item>
                              <a href="#" class="accordion-title">2. Tumpukan</a>
                              <div class="accordion-content" data-tab-content>
                                <span class="primary badge">
                                2.1. </span> Tumpukan Biasa
                                <span class="secondary badge">
                                2.2. </span> Operasi pada Tumpukan
                                <span class="success badge">2.3.</span> Aplikasi pada Tumpukan
                              </div>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <span class="warning label"> Ambil </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
</div>
</div>
</div>-->

<!-- navbar -->
<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="row">
  <div class="top-bar-left">
    <ul class="menu">
      <li><a data-toggle="offCanvasLeft"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
      <li> 00 : 00 </li>
    </ul>
  </div>
  <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
      <li> <button class="expanded button" type="button" data-toggle="timeline"><i class="fa fa-tasks" aria-hidden="true"></i> Progress SRL</button> </li>
      <li> <button class="expanded success button" type="button" data-toggle="status"><i class="fa fa-check-square-o" aria-hidden="true"></i> Status Pembelajaran </button></li>
      <li> <button class="expanded warning button" type="button" data-toggle="pedagogical-agent"><i class="fa fa-comments-o" aria-hidden="true"></i>
Bantuan <span class="primary badge">0</span> </button></li>
    </ul>
  </div>
      </div>
</div>

<!-- Learning Status -->
<div class="dropdown-pane" id="status" data-dropdown>
  <div class="row"> 
  <div class="large-3 small-12 columns">
      <img class="thumbnail circle" src="../../assets/img/profile-example.png">
        <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
        <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
        <h6> Total Waktu Belajar: <br> 1 Jam 56 Menit </h6>
  </div> <!-- kiri -->

    <div class="large-9 small-12 columns">
    <h5> Learning Progress </h5>
    <hr>
        <table>
  <thead>
    <tr>
      <th width="10%">Nomor </th>
      <th width="60%">Materi</th>
      <th width="20%">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Sorting 1</td>
      <td><span class="success label">Sudah</span></td>
    </tr>
      <tr>
      <td>2</td>
      <td>Sorting 2</td>
      <td><span class="warning label">in progress</span></td>
    </tr>
  </tbody>
</table>
    </div>
  </div> <!-- row -->
</div>

<!-- pedagogical chat -->
<div class="dropdown-pane" id="pedagogical-agent" data-dropdown>
  <div class="chat-body"> 
    <img class="thumbnail circle" src="../../assets/img/profile-example.png">
    <div class="callout primary ">
  <p>Halo Angga! Jika ada sesuatu yang ditanyakan, silahkan hubungi kami.</p>
</div>
  </div>
  <div class="input-chat"> 
    <form>
        <div class="input-group">
    <input class="input-group-field" type="text">
    <div class="input-group-button">
      <button type="submit" class="button"> <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
    </div>
  </div>
    </form>
  </div>
</div>

<!-- timeline status -->
<div class="dropdown-pane" id="timeline" data-dropdown>
<h2 align="center"> Self-Regulation Learning Progress </h2>
<hr>
                                <ol class="timeline">
                                    <li class="timeline">
                                        MAI Tes
                                        <span class="details"> Description of point 1 </span>
                                    </li>
                                    <li class="timeline done">
                                        Set Goals
                                        <span class="details">Description of point 2</span>
                                    </li>
                                    <li class="timeline done">
                                        Prior Knowledge Activation
                                        <span class="details">Description of point 3</span>
                                    </li>
                                    <li class="timeline done">
                                        Learning Strategy Option
                                        <span class="details">Description of point 4</span>
                                    </li>
                                    <li class="timeline">
                                        Adaptive-Learning Materials
                                        <span class="details">Description of point 5</span>
                                    </li>
                                    <li class="timeline">
                                        Learning Evaluation
                                        <span class="details">Description of point 6</span>
                                    </li>
                                    <li class="timeline">
                                        Self-Regulation Learning Evaluation
                                        <span class="details">Description of point 7</span>
                                    </li>
                                </ol>
                                </div>
<!-- content -->
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <div class="sidebar off-canvas position-left" id="offCanvasLeft" data-off-canvas>
                <div class="profile">
                    <img class="thumbnail circle" src="../../assets/img/profile-example.png">
                    <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
                    <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
                </div>
                <ul class="nav">
                    <li><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="../student/deskripsi.php"><i class="fa fa-info" aria-hidden="true"></i>Deskripsi</a></li>
                    <li><a href="panduan.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Panduan</a></li>
                    <li><a href="user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li class="active"><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>SRL</a></li>
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
                    <div class="row top space">
                        <div class="columns">
                            <div class="top-bar">
                                 <h2 style="display: block;" align="center">Learning Option Strategy : stack</h2>
                <hr width="75%"/>
                            </div>
                        </div>
                    </div>
                    <div class="columns main-wrapper rounded shadow">
                        <div class="small-12 large-12 columns">
                                        <div class="row top bottom space">
                                            <div class="small-12 large-4 columns text-center">
                                             <img class="thumbnail" src="../../assets/img/video.png" alt="data icon" width="200px">
                                             <h5> Control Video </h5>
                                             <hr width="50%">
                                             <p> Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</p>
                                             <hr width="50%">
                                               <h5> Ambil strategi? </h5>
                                                <div class="switch large">
                                               
                                               
                                                   <hr width="50%">

<?php

$sql1=mysqli_master_query($connect, "SELECT
tb_fuz_kategori.id_mhs as id_mhs,
tb_fuz_kategori.knowledge as knowledge,
tb_fuz_kategori.regulation as regulation,
tb_fuz_kategori.knowledge_kategori as knowledge_kategori,
tb_fuz_kategori.regulation_kategori as regulation_kategori
FROM
tb_fuz_kategori
WHERE id_mhs=");


$data1=mysqli_fetch_array($sql1);
$knowledge=$data1['knowledge'];
$regulation=$data1['regulation'];
$knowledge_kategori=$data1['knowledge_kategori'];
$regulation_kategori=$data1['regulation_kategori'];
$rekom=min($knowledge,$regulation);

if ($rekom==$knowledge && $knowledge_kategori==1) {
?>
  <!--<a href="../SRL/5-lowK-Learning-Materials-Control-Video.php" class="button success expanded">Ya</a>-->
<?php
}
elseif ($rekom==$knowledge && $knowledge_kategori==2) {
  ?>
  <a href="../SRL/5-medK-Learning-Materials-Control-Video.php" class="button success expanded">Ya</a>
<?php
}
elseif ($rekom==$knowledge && $knowledge_kategori==3) {
  ?>
  <a href="../SRL/5-highK-Learning-Materials-Control-Video.php" class="button success expanded">Ya</a>
<?php
}
elseif ($rekom==$regulation && $regulation_kategori==1) {
  ?>
  <a href="../SRL/5-lowR-Learning-Materials-Control-Video.php" class="button success expanded">Ya</a>
<?php
}
elseif ($rekom==$regulation && $regulation_kategori==2) {
  ?>
  <a href="../SRL/5-medR-Learning-Materials-Control-Video.php" class="button success expanded">Ya</a>
<?php
}
elseif ($rekom==$regulation && $regulation_kategori==3) {
  ?>
  <a href="../SRL/5-highR-Learning-Materials-Control-Video.php" class="button success expanded">Ya</a>
<?php
}

?>






                                                
                                            </div>
                                            </div>
                                             <div class="small-12 large-4 columns text-center">
                                             <img class="thumbnail" src="../../assets/img/draw.png" alt="data icon" width="200px">
                                             <h5> Draw </h5>
                                             <hr width="50%">
                                             <p> Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</p>
                                             <hr width="50%">
                                               <h5> Ambil strategi? </h5>
                                                <div class="switch large">
                                               
                                               
                                                   <hr width="50%">
                                                   <a href="../SRL/3-Sorting1-Activating-Prior-Knowledge.php" class="button success expanded">Ya</a>
                                                
                                            </div>
                                            </div>
                                           <div class="small-12 large-4 columns text-center">
                                             <img class="thumbnail" src="../../assets/img/summary.png" alt="data icon" width="200px">
                                             <h5> Summarization </h5>
                                             <hr width="50%">
                                             <p> Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</p>
                                             <hr width="50%">
                                               <h5> Ambil strategi? </h5>
                                                <div class="switch large">
                                               
                                               
                                                   <hr width="50%">
                                                   <a href="../SRL/3-Sorting1-Activating-Prior-Knowledge.php" class="button success expanded">Ya</a>
                                                
                                            </div>
                                            </div>
                                        </div>






                                       








                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/foundation.js"></script>
    <script>
    $(document).foundation();
                    $(window).load(function() {
            $('#exampleModal1').foundation('open');
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