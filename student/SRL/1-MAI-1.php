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
    <title>1. MAI - Students</title>
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
    <h2> Hi Akhsin! </h2>
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
                                        <td><code>1</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri, "Apakah Saya Sudah Mencapai Tujuan Saya?", Ketika sedang berupaya mencapai tujuan secara  intensif.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI1" value="1" id="MAI11" required><label for="MAI11">1. Sangat Setuju</label>
      <input type="radio" name="MAI1" value="2" id="MAI12"><label for="MAI12">2. Setuju</label>
      <input type="radio" name="MAI1" value="3" id="MAI13"><label for="MAI13">3. Netral</label>
      <input type="radio" name="MAI1" value="4" id="MAI14"><label for="MAI14">4. Tidak Setuju</label>
      <input type="radio" name="MAI1" value="5" id="MAI15"><label for="MAI15">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>2</code></td>
                                        <td>
                                            Saya mempertimbangkan berbagai pilihan sebelum saya menyelesaikan sebuah permasalahan.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI2" value="1" id="MAI21" required><label for="MAI21">1. Sangat Setuju</label>
      <input type="radio" name="MAI2" value="2" id="MAI22"><label for="MAI22">2. Setuju</label>
      <input type="radio" name="MAI2" value="3" id="MAI23"><label for="MAI23">3. Netral</label>
      <input type="radio" name="MAI2" value="4" id="MAI24"><label for="MAI24">4. Tidak Setuju</label>
      <input type="radio" name="MAI2" value="5" id="MAI25"><label for="MAI25">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>3</code></td>
                                        <td>
                                            Saya terus menerus mengatur diri selama belajar agar memiliki waktu yang cukup.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI3" value="1" id="MAI31" required><label for="MAI31">1. Sangat Setuju</label>
      <input type="radio" name="MAI3" value="2" id="MAI32"><label for="MAI32">2. Setuju</label>
      <input type="radio" name="MAI3" value="3" id="MAI33"><label for="MAI33">3. Netral</label>
      <input type="radio" name="MAI3" value="4" id="MAI34"><label for="MAI34">4. Tidak Setuju</label>
      <input type="radio" name="MAI3" value="5" id="MAI35"><label for="MAI35">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>4</code></td>
                                        <td>
                                            Saya berpikir tentang apa yang sebenarnya perlu saya pelajari sebelum mengerjakan tugas.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI4" value="1" id="MAI41" required><label for="MAI41">1. Sangat Setuju</label>
      <input type="radio" name="MAI4" value="2" id="MAI42"><label for="MAI42">2. Setuju</label>
      <input type="radio" name="MAI4" value="3" id="MAI43"><label for="MAI43">3. Netral</label>
      <input type="radio" name="MAI4" value="4" id="MAI44"><label for="MAI44">4. Tidak Setuju</label>
      <input type="radio" name="MAI4" value="5" id="MAI45"><label for="MAI45">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>5</code></td>
                                        <td>
                                            Saya menyadari bagaimana baiknya saya menyelesaikan suatu tes.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI5" value="1" id="MAI51" required><label for="MAI51">1. Sangat Setuju</label>
      <input type="radio" name="MAI5" value="2" id="MAI52"><label for="MAI52">2. Setuju</label>
      <input type="radio" name="MAI5" value="3" id="MAI53"><label for="MAI53">3. Netral</label>
      <input type="radio" name="MAI5" value="4" id="MAI54"><label for="MAI54">4. Tidak Setuju</label>
      <input type="radio" name="MAI5" value="5" id="MAI55"><label for="MAI55">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>6</code></td>
                                        <td>
                                            Saya menyusun tujuan-tujuan khusus sebelum saya mengerjakan tugas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI6" value="1" id="MAI61" required><label for="MAI61">1. Sangat Setuju</label>
      <input type="radio" name="MAI6" value="2" id="MAI62"><label for="MAI62">2. Setuju</label>
      <input type="radio" name="MAI6" value="3" id="MAI63"><label for="MAI63">3. Netral</label>
      <input type="radio" name="MAI6" value="4" id="MAI64"><label for="MAI64">4. Tidak Setuju</label>
      <input type="radio" name="MAI6" value="5" id="MAI65"><label for="MAI65">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>7</code></td>
                                        <td>
                                            Saya bertindak perlahan-lahan dan hati-hati bila mana menjumpai informasi penting.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI7" value="1" id="MAI71" required><label for="MAI71">1. Sangat Setuju</label>
      <input type="radio" name="MAI7" value="2" id="MAI72"><label for="MAI72">2. Setuju</label>
      <input type="radio" name="MAI7" value="3" id="MAI73"><label for="MAI73">3. Netral</label>
      <input type="radio" name="MAI7" value="4" id="MAI74"><label for="MAI74">4. Tidak Setuju</label>
      <input type="radio" name="MAI7" value="5" id="MAI75"><label for="MAI75">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul class="pagination text-center" role="navigation" aria-label="Pagination" id="page-selection">
                                <li class="pagination-previous disabled">Previous</li>
                                <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                                <li><a href="1-MAI-2.php" aria-label="Page 2">2</a></li>
                                <li><a href="1-MAI-3.php" aria-label="Page 3">3</a></li>
                                <li><a href="1-MAI-4.php" aria-label="Page 4">4</a></li>
                                <li><a href="1-MAI-5.php" aria-label="Page 5">5</a></li>
                                <li class="pagination-next"><a href="1-MAI-2.php" aria-label="Next page">Next</a></li>
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
        $(window).load(function(){        
            $('#exampleModal1').foundation('open');
    });
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