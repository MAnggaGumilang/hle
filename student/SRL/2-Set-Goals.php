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
    <title>2. Set Goals - Students</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/timeline.css">
    <meta class="foundation-mq">
  </head>
  <body>
  <!-- modal -->
<div class="large reveal" id="exampleModal1" data-reveal>
<div class="row"> 
<div class="large-4 small-12 columns">
          <img class="thumbnail" src="../../assets/img/teacher.png">
</div>
<div class="large-8 small-12 columns">
    <h2> Terimakasih <?php echo $_SESSION['namalog'];?>! </h2>
    <h3> Saatnya kamu memilih materi yang akan dipelajari.</h3>
    <br/>
    <p> Berdasarkan hasil kuisioner MAI dan pemahaman awal kamu terhadap materi, sistem menyarankankan untuk kamu mengambil materi: </p>
          <table class="projects table" id="content">
                    <thead>
                      <tr>
                        <th width="90%">Materi</th>
                        <th width="5%">Rekomendasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <ul class="accordion" data-accordion data-allow-all-closed="true">
                            <li class="accordion-item" data-accordion-item>
                              <a href="#" class="accordion-title">1. Sorting I</a>
                              <div class="accordion-content" data-tab-content>
                                <span class="primary badge">
                                1.1. </span> Bubble Sort <br>
                                <span class="primary badge">
                                1.2. </span> Selection Sort <br>
                                <span class="primary badge">
                                1.3. </span> Insertion Sort <br>
                                <span class="primary badge">
                                1.4. </span> Shell Sort <br>
                                <span class="primary badge">
                                1.5. </span> Merge Sort <br>
                              </div>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <a href="../SRL/3-Sorting1-Activating-Prior-Knowledge.php" class="success label"> Ambil </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
</div>
</div>
</div>

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
                                    <li class="timeline">
                                        Prior Knowledge Activation
                                        <span class="details">Description of point 3</span>
                                    </li>
                                    <li class="timeline">
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
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
                  <div class="sidebar off-canvas position-left" id="offCanvasLeft" data-off-canvas>
          <div class="profile">
            <img class="thumbnail circle" src="../../assets/img/profile-example.png">
            <h5 class="user name">Sarah</h5>
            <h6 class="matriculation id">S1 Teknologi Informasi</h6>
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
        <div class="main off-canvas-content" data-off-canvas-content>
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

                </div>
              </div>
            </div>
            <div class="columns main-wrapper rounded shadow">
              <div class="page heading">
                <h2 style="display: block;" align="center">Sets-Goals and Sub-Goals</h2>
                <hr width="75%"/>
             <div class="small-12 large-12 columns">
                                          <div class="row top bottom space">
                                              <div class="small-12 large-6 columns text-center">
                                               <img class="thumbnail" src="../../assets/img/data.png" alt="data icon" width="50%">
                                               <h5> Sorting I </h5>
                                               <hr width="50%">
                                               <p> Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</p>
<!--                                                <a class="expanded button" href="#0">Ambil Materi</a>
                                               <a class="expanded warning button" href="#0">Lewati Materi</a> -->
                                               <hr width="50%">
                                                
                                                
                                                <hr width="50%">
                                               
                                                <a href="../SRL/3-Sorting1-Activating-Prior-Knowledge.php" class="button success expanded">Ambil materi ini</a>
                                                 
                                            
                                              </div>
                                               <div class="small-12 large-6 columns text-center">
                                               <img class="thumbnail" src="../../assets/img/stack.png" alt="data icon" width="50%">
                                               <h5> Sorting II</h5>
                                               <hr width="50%">
                                               <p> Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</p>

<!--                                                <a class="expanded button" href="#0">Ambil Materi</a>
                                               <a class="expanded warning button" href="#0">Lewati Materi</a> -->
                                                <hr width="50%">
                                                
                                                <hr width="50%">
                                                <a href="../SRL/3-Sorting2-Activating-Prior-Knowledge.php" class="button success expanded">Ambil materi ini</a>
                                                      
                                            
<!--                                              <div class="small-12 large-4 columns text-center">
                                               <img class="thumbnail" src="../../assets/img/queue.png" alt="data icon">
                                               <h5> Antrian (Queue) </h5>
                                               <hr width="50%">
                                               <p> Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</p>
                                               <a class="expanded button" href="#0">Ambil Materi</a>
                                               <a class="expanded warning button" href="#0">Lewati Materi</a>
                                              </div> -->
                                             </div>
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
