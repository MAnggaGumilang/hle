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
    <title>2. MAI - Students</title>
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
    <h2> Hi Angga! </h2>
    <h3> Pertama kali anda harus mengisi kuisioner</h3>
    <br/>
    <p> Kusioner Metacognitive Awareness Inventory (MAI) adalah berguna untuk mengukur ... </p>
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
                                    <li class="timeline">
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
                                        Practical Strategy
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
    <!-- Content -->
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <div class="sidebar off-canvas position-left" id="offCanvasLeft" data-off-canvas>
                <div class="profile">
                    <img class="thumbnail circle" src="../../assets/img/profile-example.png">
                    <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
                    <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
                </div>
                <ul class="nav">
                    <li><a href="../dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
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
                             <h2 style="display: block;" align="center">Monitoring of Metacognitive Awareness Test</h2>
                            <hr width="75%" />
                            </div>
                        </div>
                    </div>
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <table class="projects" id="content">
                                <thead>
                                    <tr>
                                        <th width="10%">Nomor</th>
                                        <th width="90%">Pertanyaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>8</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri ketika mempertimbangkan seluruh pilihan untuk memecahkan suatu masalah.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI8" value="1" id="MAI81" required><label for="MAI81">1. Sangat Setuju</label>
      <input type="radio" name="MAI8" value="2" id="MAI82"><label for="MAI82">2. Setuju</label>
      <input type="radio" name="MAI8" value="3" id="MAI83"><label for="MAI83">3. Netral</label>
      <input type="radio" name="MAI8" value="4" id="MAI84"><label for="MAI84">4. Tidak Setuju</label>
      <input type="radio" name="MAI8" value="5" id="MAI85"><label for="MAI85">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>9</code></td>
                                        <td>
                                            Saya secara sadar memusatkan perhatian kepada informasi yang penting.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI9" value="1" id="MAI91" required><label for="MAI91">1. Sangat Setuju</label>
      <input type="radio" name="MAI9" value="2" id="MAI92"><label for="MAI92">2. Setuju</label>
      <input type="radio" name="MAI9" value="3" id="MAI93"><label for="MAI93">3. Netral</label>
      <input type="radio" name="MAI9" value="4" id="MAI94"><label for="MAI94">4. Tidak Setuju</label>
      <input type="radio" name="MAI9" value="5" id="MAI95"><label for="MAI95">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>10</code></td>
                                        <td>
                                            Setelah saya menyelesaikan suatu tugas, saya bertanya kepada diri sendiri apakah ada cara yang lebih mudah.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI10" value="1" id="MAI101" required><label for="MAI101">1. Sangat Setuju</label>
      <input type="radio" name="MAI10" value="2" id="MAI102"><label for="MAI102">2. Setuju</label>
      <input type="radio" name="MAI10" value="3" id="MAI103"><label for="MAI103">3. Netral</label>
      <input type="radio" name="MAI10" value="4" id="MAI104"><label for="MAI104">4. Tidak Setuju</label>
      <input type="radio" name="MAI10" value="5" id="MAI105"><label for="MAI105">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>11</code></td>
                                        <td>
                                            Secara teratur saya melakukan peninjauan kemampuan untuk menolong saya memahami hubungan-hubungan penting.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI11" value="1" id="MAI111" required><label for="MAI111">1. Sangat Setuju</label>
      <input type="radio" name="MAI11" value="2" id="MAI112"><label for="MAI112">2. Setuju</label>
      <input type="radio" name="MAI11" value="3" id="MAI113"><label for="MAI113">3. Netral</label>
      <input type="radio" name="MAI11" value="4" id="MAI114"><label for="MAI114">4. Tidak Setuju</label>
      <input type="radio" name="MAI11" value="5" id="MAI115"><label for="MAI115">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>12</code></td>
                                        <td>
                                            Sebelum memulai sesuatu, saya bertanya kepada diri sendiri tentang hal-hal terkait.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI12" value="1" id="MAI121" required><label for="MAI121">1. Sangat Setuju</label>
      <input type="radio" name="MAI12" value="2" id="MAI122"><label for="MAI122">2. Setuju</label>
      <input type="radio" name="MAI12" value="3" id="MAI123"><label for="MAI123">3. Netral</label>
      <input type="radio" name="MAI12" value="4" id="MAI124"><label for="MAI124">4. Tidak Setuju</label>
      <input type="radio" name="MAI12" value="5" id="MAI125"><label for="MAI125">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>13</code></td>
                                        <td>
                                            Saya mempertimbangkan berbagai cara untuk memecahkan sesuatu masalah sebelum akhirnya memutuskan salah satu diantaranya.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI13" value="1" id="MAI131" required><label for="MAI131">1. Sangat Setuju</label>
      <input type="radio" name="MAI13" value="2" id="MAI132"><label for="MAI132">2. Setuju</label>
      <input type="radio" name="MAI13" value="3" id="MAI133"><label for="MAI133">3. Netral</label>
      <input type="radio" name="MAI13" value="4" id="MAI134"><label for="MAI134">4. Tidak Setuju</label>
      <input type="radio" name="MAI13" value="5" id="MAI135"><label for="MAI135">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>14</code></td>
                                        <td>
                                            Setiap kali selesai belajar, saya membuat rangkuman.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI14" value="1" id="MAI141" required><label for="MAI141">1. Sangat Setuju</label>
      <input type="radio" name="MAI14" value="2" id="MAI142"><label for="MAI142">2. Setuju</label>
      <input type="radio" name="MAI14" value="3" id="MAI143"><label for="MAI143">3. Netral</label>
      <input type="radio" name="MAI14" value="4" id="MAI144"><label for="MAI144">4. Tidak Setuju</label>
      <input type="radio" name="MAI14" value="5" id="MAI145"><label for="MAI145">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                </tbody>
                            </table>
                             <ul class="pagination text-center" role="navigation" aria-label="Pagination" id="page-selection">
                                <li class="pagination-previous"><a href="1-MAI-1.php" aria-label="Previous page">Previous</a></li>
                                <li><a href="1-MAI-1.php" aria-label="Page 1">1</a></li>
                                <li class="current"><span class="show-for-sr">You are on page</span>2</a></li>
                                <li><a href="1-MAI-3.php" aria-label="Page 3">3</a></li>
                                <li><a href="1-MAI-4.php" aria-label="Page 4">4</a></li>
                                <li><a href="1-MAI-5.php" aria-label="Page 5">5</a></li>
                                <li class="pagination-next"><a href="1-MAI-3.php" aria-label="Next page">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/foundation.js"></script>
        <script src="../../assets/js/jquery.bootpag.js"></script>
    <script>
    $(document).foundation();
            // init bootpag
        // $('#page-selection').bootpag({
        //     total: 7
        // }).on("page", function(event,  page number here  num){
        //      $("#content").html("Insert content"); // some ajax content loading...
        // });
    //     $(window).load(function(){        
    //         $('#exampleModal1').foundation('open');
    // });
    </script>
</body>

</html>
</html>
<?php } 
else
{
header('location:../login/login_mhs.php');
}
?>