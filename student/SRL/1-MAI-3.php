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
    <title>3. MAI - Students</title>
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
                                        <td><code>15</code></td>
                                        <td>
                                            Saya menanyakan orang lain bilamana saya tidak memahami sesuatu.  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI15" value="1" id="MAI151" required><label for="MAI151">1. Sangat Setuju</label>
      <input type="radio" name="MAI15" value="2" id="MAI152"><label for="MAI152">2. Setuju</label>
      <input type="radio" name="MAI15" value="3" id="MAI153"><label for="MAI153">3. Netral</label>
      <input type="radio" name="MAI15" value="4" id="MAI154"><label for="MAI154">4. Tidak Setuju</label>
      <input type="radio" name="MAI15" value="5" id="MAI155"><label for="MAI155">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>16</code></td>
                                        <td>
                                            Saya biasa memikirkan manfaat cara-cara belajar yang saya pakai.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI16" value="1" id="MAI161" required><label for="MAI161">1. Sangat Setuju</label>
      <input type="radio" name="MAI16" value="2" id="MAI162"><label for="MAI162">2. Setuju</label>
      <input type="radio" name="MAI16" value="3" id="MAI163"><label for="MAI163">3. Netral</label>
      <input type="radio" name="MAI16" value="4" id="MAI164"><label for="MAI164">4. Tidak Setuju</label>
      <input type="radio" name="MAI16" value="5" id="MAI165"><label for="MAI165">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>17</code></td>
                                        <td>
                                            Saya memusatkan perhatian terhadap arti dan manfaat dari informasi yang baru.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI17" value="1" id="MAI171" required><label for="MAI171">1. Sangat Setuju</label>
      <input type="radio" name="MAI17" value="2" id="MAI172"><label for="MAI172">2. Setuju</label>
      <input type="radio" name="MAI17" value="3" id="MAI173"><label for="MAI173">3. Netral</label>
      <input type="radio" name="MAI17" value="4" id="MAI174"><label for="MAI174">4. Tidak Setuju</label>
      <input type="radio" name="MAI17" value="5" id="MAI175"><label for="MAI175">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>18</code></td>
                                        <td>
                                            Saya menemukan contoh-contoh sendiri sehingga informasi menjadi lebih bermakna atau jelas.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI18" value="1" id="MAI181" required><label for="MAI181">1. Sangat Setuju</label>
      <input type="radio" name="MAI18" value="2" id="MAI182"><label for="MAI182">2. Setuju</label>
      <input type="radio" name="MAI18" value="3" id="MAI183"><label for="MAI183">3. Netral</label>
      <input type="radio" name="MAI18" value="4" id="MAI184"><label for="MAI184">4. Tidak Setuju</label>
      <input type="radio" name="MAI18" value="5" id="MAI185"><label for="MAI185">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>19</code></td>
                                        <td>
                                            Secara teratur saya istirahat sebentar untuk mengatur pemahaman saya.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI19" value="1" id="MAI191" required><label for="MAI191">1. Sangat Setuju</label>
      <input type="radio" name="MAI19" value="2" id="MAI192"><label for="MAI192">2. Setuju</label>
      <input type="radio" name="MAI19" value="3" id="MAI193"><label for="MAI193">3. Netral</label>
      <input type="radio" name="MAI19" value="4" id="MAI194"><label for="MAI194">4. Tidak Setuju</label>
      <input type="radio" name="MAI19" value="5" id="MAI195"><label for="MAI195">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>20</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri tentang seberapa baik saya mencapai tujuan setelah menyelesaikan tugas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI20" value="1" id="MAI201" required><label for="MAI201">1. Sangat Setuju</label>
      <input type="radio" name="MAI20" value="2" id="MAI202"><label for="MAI202">2. Setuju</label>
      <input type="radio" name="MAI20" value="3" id="MAI203"><label for="MAI203">3. Netral</label>
      <input type="radio" name="MAI20" value="4" id="MAI204"><label for="MAI204">4. Tidak Setuju</label>
      <input type="radio" name="MAI20" value="5" id="MAI205"><label for="MAI205">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>21</code></td>
                                        <td>
                                            Saya membuat gambar atau bagan untuk menolong saya selama saya belajar.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI121" value="1" id="MAI211" required><label for="MAI211">1. Sangat Setuju</label>
      <input type="radio" name="MAI21" value="2" id="MAI212"><label for="MAI212">2. Setuju</label>
      <input type="radio" name="MAI21" value="3" id="MAI213"><label for="MAI213">3. Netral</label>
      <input type="radio" name="MAI21" value="4" id="MAI214"><label for="MAI214">4. Tidak Setuju</label>
      <input type="radio" name="MAI21" value="5" id="MAI215"><label for="MAI215">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                </tbody>
                            </table>
                             <ul class="pagination text-center" role="navigation" aria-label="Pagination" id="page-selection">
                                <li class="pagination-previous"><a href="1-MAI-2.php" aria-label="Previous page">Previous</a></li>
                                <li><a href="1-MAI-1.php" aria-label="Page 1">1</a></li>
                                <li><a href="1-MAI-2.php" aria-label="Page 2">2</a></li>
                                <li class="current"><span class="show-for-sr">You are on page</span>3</a></li>
                                <li><a href="1-MAI-4.php" aria-label="Page 4">4</a></li>
                                <li><a href="1-MAI-5.php" aria-label="Page 5">5</a></li>
                                <li class="pagination-next"><a href="1-MAI-4.php" aria-label="Next page">Next</a></li>
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