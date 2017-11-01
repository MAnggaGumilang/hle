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
    <title>5. MAI - Students</title>
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
                                        <td><code>29</code></td>
                                        <td>
                                            Saya mengatur waktu saya untuk mencapai tujuan sebaik-baiknya.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI29" value="1" id="MAI291" required><label for="MAI291">1. Sangat Setuju</label>
      <input type="radio" name="MAI29" value="2" id="MAI292"><label for="MAI292">2. Setuju</label>
      <input type="radio" name="MAI29" value="3" id="MAI293"><label for="MAI293">3. Netral</label>
      <input type="radio" name="MAI29" value="4" id="MAI294"><label for="MAI294">4. Tidak Setuju</label>
      <input type="radio" name="MAI29" value="5" id="MAI295"><label for="MAI295">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>30</code></td>
                                        <td>
                                            Saya berupaya membagi kegiatan belajar saya menjadi langkah-langkah yang lebih kecil.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI30" value="1" id="MAI301" required><label for="MAI301">1. Sangat Setuju</label>
      <input type="radio" name="MAI30" value="2" id="MAI302"><label for="MAI302">2. Setuju</label>
      <input type="radio" name="MAI30" value="3" id="MAI303"><label for="MAI303">3. Netral</label>
      <input type="radio" name="MAI30" value="4" id="MAI304"><label for="MAI304">4. Tidak Setuju</label>
      <input type="radio" name="MAI30" value="5" id="MAI305"><label for="MAI305">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>31</code></td>
                                        <td>
                                            Saya lebih memperhatikan makna umum dari pada makna khusus.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI31" value="1" id="MAI311" required><label for="MAI311">1. Sangat Setuju</label>
      <input type="radio" name="MAI31" value="2" id="MAI312"><label for="MAI312">2. Setuju</label>
      <input type="radio" name="MAI31" value="3" id="MAI313"><label for="MAI313">3. Netral</label>
      <input type="radio" name="MAI31" value="4" id="MAI314"><label for="MAI314">4. Tidak Setuju</label>
      <input type="radio" name="MAI31" value="5" id="MAI315"><label for="MAI315">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>32</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri tentang seberapa baik saya bekerja, pada waktu mempelajari sesuatu hal yang baru.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI32" value="1" id="MAI321" required><label for="MAI321">1. Sangat Setuju</label>
      <input type="radio" name="MAI32" value="2" id="MAI322"><label for="MAI322">2. Setuju</label>
      <input type="radio" name="MAI32" value="3" id="MAI323"><label for="MAI323">3. Netral</label>
      <input type="radio" name="MAI32" value="4" id="MAI324"><label for="MAI324">4. Tidak Setuju</label>
      <input type="radio" name="MAI32" value="5" id="MAI325"><label for="MAI325">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>33</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri apakah saya belajar sebanyak yang saya mampu, setiap kali saya menyelesaikan tugas.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI33" value="1" id="MAI331" required><label for="MAI331">1. Sangat Setuju</label>
      <input type="radio" name="MAI33" value="2" id="MAI332"><label for="MAI332">2. Setuju</label>
      <input type="radio" name="MAI33" value="3" id="MAI333"><label for="MAI333">3. Netral</label>
      <input type="radio" name="MAI33" value="4" id="MAI334"><label for="MAI334">4. Tidak Setuju</label>
      <input type="radio" name="MAI33" value="5" id="MAI335"><label for="MAI335">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>

                                    <tr>
                                        <td><code>34</code></td>
                                        <td>
                                            Saya melupakan informasi baru yang tidak jelas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI34" value="1" id="MAI341" required><label for="MAI341">1. Sangat Setuju</label>
      <input type="radio" name="MAI34" value="2" id="MAI342"><label for="MAI342">2. Setuju</label>
      <input type="radio" name="MAI34" value="3" id="MAI343"><label for="MAI343">3. Netral</label>
      <input type="radio" name="MAI34" value="4" id="MAI344"><label for="MAI344">4. Tidak Setuju</label>
      <input type="radio" name="MAI34" value="5" id="MAI345"><label for="MAI345">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                    <tr>
                                        <td><code>35</code></td>
                                        <td>
                                            Saya berhenti dan selanjutnya membaca kembali jika saya bingung.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend>&nbsp;</legend>
                                        </td>
                                        <td>
                                          <fieldset>
      <input type="radio" name="MAI35" value="1" id="MAI351" required><label for="MAI351">1. Sangat Setuju</label>
      <input type="radio" name="MAI35" value="2" id="MAI352"><label for="MAI352">2. Setuju</label>
      <input type="radio" name="MAI35" value="3" id="MAI353"><label for="MAI353">3. Netral</label>
      <input type="radio" name="MAI35" value="4" id="MAI354"><label for="MAI354">4. Tidak Setuju</label>
      <input type="radio" name="MAI35" value="5" id="MAI355"><label for="MAI355">5. Sangat Tidak Setuju</label>
    </fieldset>
</td>
                                    </tr>
                                </tbody>
                            </table>
                              <ul class="pagination text-center" role="navigation" aria-label="Pagination" id="page-selection">
                                <li class="pagination-previous"><a href="1-MAI-4.php" aria-label="Previous page">Previous</a></li>
                                <li><a href="1-MAI-1.php" aria-label="Page 1">1</a></li>
                                <li><a href="1-MAI-2.php" aria-label="Page 2">2</a></li>
                                <li><a href="1-MAI-3.php" aria-label="Page 4">3</a></li>
                                <li><a href="1-MAI-4.php" aria-label="Page 4">4</a></li>
                                <li class="current"><span class="show-for-sr">You are on page</span>5</a></li>
                                <li class="pagination-next disabled">Next</li>
                                </ul>
                                <a class="pagination-next button expanded success">Submit</a>
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