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
    <title>3. Activating Prior Knowledge - Students</title>
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
    <h2> Selamat, kamu memasuki tahap evaluasi materi, <?php echo $_SESSION['namalog'];?>! </h2>
    <h3> Kuis Sorting I </h3>
    <br/>
    <p> Ini merupakan kuis di akhir pertemuan. Kerjakan dengan baik, agar kamu mendapatkan hasil yang memuaskan. Selamat mengerjakan!</p>
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
                                    <li class="timeline done">
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
                              <h2 style="display: block;" align="center">Evaluasi: Sorting I</h2>
                            <hr width="75%" />
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    $mhs= mysqli_query($connect, "SELECT * FROM tb_evaluasi_sorting1 WHERE id_mhs='$_SESSION[idlog]'");
                    $mai_mhs=mysqli_num_rows($mhs);
            if ($mai_mhs==0){
            ?>
            <!-- modal -->
<!--<div class="large reveal" id="exampleModal1" data-reveal>
<div class="row"> 
<div class="large-4 small-12 columns">
<img class="thumbnail" src="../../assets/img/teacher.png">
</div>
<div class="large-8 small-12 columns">
    <h2> Hi <?php //echo $_SESSION['namalog'];?>! </h2>
    <h3> Pertama kali anda harus mengisi kuisioner</h3>
    <br/>
    <p> Kusioner Metacognitive Awareness Inventory (MAI) adalah berguna untuk mengukur ... </p>
</div>
</div>
</div>-->
                    <form action=""  method="post" id="add-mai" class="form-horizontal">
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <table class="projects table" id="content">
                                <thead>
                                    <tr>
                                        <th width="5%">Nomor</th>
                                        <th width="95%">Pertanyaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>1</code></td>
                                        <td>
                                            Sorting adalah proses mengatur sekumpulan objek menurut aturan atau susunan tertentu. Urutan objek tersebut dapat menaik atau bisa disebut...
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal1" value="10" id="soal10"><label for="soal10">Ascending</label>
                                            <input type="radio" name="soal1" value="0" id="soal11"><label for="soal10">Descending</label>
                                            <input type="radio" name="soal1" value="0" id="soal12"><label for="soal11">Decreasing</label>
                                            <input type="radio" name="soal1" value="0" id="soal13"><label for="soal12">Selection</label>
                                            <input type="radio" name="soal1" value="0" id="soal14"><label for="soal13">Increasing</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>2</code></td>
                                        <td>
                                            Usaha untuk mengurutkan kumpulan-kumpulan data dalam suatu array disebut...
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal2" value="0" id="soal20"><label for="soal20">Searching</label>
                                            <input type="radio" name="soal2" value="10" id="soal21"><label for="soal21">Sorting</label>
                                            <input type="radio" name="soal2" value="0" id="soal22"><label for="soal22">Devide</label>
                                            <input type="radio" name="soal2" value="0" id="soal23"><label for="soal23">Conquer</label>
                                            <input type="radio" name="soal2" value="0" id="soal24"><label for="soal24">D dan C</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>3</code></td>
                                        <td>
                                           Berikut ini adalah metode yang digunakan pada teknik sorting, kecuali...
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal3" value="0" id="soal30"><label for="soal30">Bubble</label>
                                            <input type="radio" name="soal3" value="0" id="soal31"><label for="soal31">Shell</label>
                                            <input type="radio" name="soal3" value="10" id="soal32"><label for="soal32">Fibonacci</label>
                                            <input type="radio" name="soal3" value="0" id="soal33"><label for="soal33">Insertion</label>
                                            <input type="radio" name="soal3" value="0" id="soal34"><label for="soal34">Selection</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>4</code></td>
                                        <td>
                                            Pengurutan data yang dilakukan dengan melakukan penukaran data dengan tepat disebelahnya secara terus menerus sampai bisa dipastikan dalam satu iterasi tertentu tidak ada lagi perubahan disebut dengan...

                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal4" value="0" id="soal40"><label for="soal40">insertion sort</label>
                                            <input type="radio" name="soal4" value="0" id="soal41"><label for="soal41">shell sort</label>
                                            <input type="radio" name="soal4" value="10" id="soal42"><label for="soal42">bubble sort</label>
                                            <input type="radio" name="soal4" value="0" id="soal43"><label for="soal43">heap sort</label>
                                            <input type="radio" name="soal4" value="0" id="soal44"><label for="soal44">tree sort</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>5</code></td>
                                        <td>
                                           Data 4, 0, 8, 2 diurutkan ascending (dari kecil ke besar) dengan bubble sort. Hasil urutan data pass satu (tahap satu) adalah...
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal5" value="10" id="soal50"><label for="soal50">0 4 2 8</label>
                                            <input type="radio" name="soal5" value="0" id="soal51"><label for="soal51">0 2 4 8</label>
                                            <input type="radio" name="soal5" value="0" id="soal52"><label for="soal52">8 4 2 0</label>
                                            <input type="radio" name="soal5" value="0" id="soal53"><label for="soal53">0 4 8 2</label>
                                            <input type="radio" name="soal5" value="0" id="soal54"><label for="soal54">Semua salah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>6</code></td>
                                        <td>
                                           Proses Sorting <br>
                                            22 10 15 3 8 2 <br>
                                            22 10 15 3 2 8 <br>
                                            22 10 15 2 3 8 <br>
                                            22 10 2 15 3 8 <br>
                                            22 10 2 15 3 8 <br>
                                            22 2 10 15 3 8 <br>
                                            2 22 10 15 3 8 <br> Jika dilihat dari prosesnya, sorting diatas menggunakan metode...


                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal6" value="10" id="soal60"><label for="soal60">Bubble sort</label>
                                            <input type="radio" name="soal6" value="0" id="soal61"><label for="soal61">Insertion sort</label>
                                            <input type="radio" name="soal6" value="0" id="soal62"><label for="soal62">Selection sort</label>
                                            <input type="radio" name="soal6" value="0" id="soal63"><label for="soal63">Shell sort</label>
                                            <input type="radio" name="soal6" value="0" id="soal64"><label for="soal64">Merge sort</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>7</code></td>
                                        <td>
                                            Jika diketahui urutan data 26   18   21   6   12, bila urutan data pada langkah berikutnya menjadi 18   26   6   21   12, maka metode sorting yang digunakan adalah...
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal7" value="0" id="soal70"><label for="soal70">Quick</label>
                                            <input type="radio" name="soal7" value="0" id="soal71"><label for="soal71">Bubble </label>
                                            <input type="radio" name="soal7" value="0" id="soal72"><label for="soal72">Insertion</label>
                                            <input type="radio" name="soal7" value="0" id="soal73"><label for="soal73">Selection</label>
                                            <input type="radio" name="soal7" value="10" id="soal74"><label for="soal74">Merge</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>8</code></td>
                                        <td>
                                            Jika urutan data pada langkah pertama adalah : 5   2  8  10   3 maka urutan data secara ascending pada iterasi berikutnya dengan metode Insertion sort adalah... 

                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal8" value="0" id="soal80"><label for="soal80">2   8   5   10   3</label>
                                            <input type="radio" name="soal8" value="0" id="soal81"><label for="soal81">2   3   5   10   8</label>
                                            <input type="radio" name="soal8" value="10" id="soal82"><label for="soal82">2   5   8    3   10</label>
                                            <input type="radio" name="soal8" value="0" id="soal83"><label for="soal83">2   3   5   8   10</label>
                                            <input type="radio" name="soal8" value="0" id="soal84"><label for="soal84">2   5   8   10   3</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>9</code></td>
                                        <td>
                                            Kinerja (efektifitas) algoritma sorting mengacu pada banyaknya operasi...
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal9" value="10" id="soal90"><label for="soal90">Pembandingan</label>
                                            <input type="radio" name="soal9" value="0" id="soal91"><label for="soal91">Perkalian</label>
                                            <input type="radio" name="soal9" value="0" id="soal92"><label for="soal92">Pembagian</label>
                                            <input type="radio" name="soal9" value="0" id="soal93"><label for="soal93">Pertukaran</label>
                                            <input type="radio" name="soal9" value="0" id="soal94"><label for="soal94">Semua salah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>10</code></td>
                                        <td>
                                            (1) Tentukan batas bawah (LB) dan batas atas (UB)<br>
                                            (2) Bila LB>UB, maka data ditukar<br>
                                            Pernyataan diatas adalah langkah pengurutan data dengan metode :

                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="soal10" value="0" id="soal100"><label for="soal100">Bubble</label>
                                            <input type="radio" name="soal10" value="0" id="soal101"><label for="soal101">Merge</label>
                                            <input type="radio" name="soal10" value="0" id="soal102"><label for="soal102">Selection</label>
                                            <input type="radio" name="soal10" value="0" id="soal103"><label for="soal103">Insertion</label>
                                            <input type="radio" name="soal10" value="10" id="soal104"><label for="soal104">Quick</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                </tbody>
                            </table>
                            <!--<ul class="pagination text-center" role="navigation" aria-label="Pagination" id="page-selection">
                                <li class="pagination-previous disabled">Previous</li>
                                <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                                <li><a href="1-MAI-2.php" aria-label="Page 2">2</a></li>
                                <li><a href="1-MAI-3.php" aria-label="Page 3">3</a></li>
                                <li><a href="1-MAI-4.php" aria-label="Page 4">4</a></li>
                                <li><a href="1-MAI-5.php" aria-label="Page 5">5</a></li>
                                <li><a href="1-MAI-6.php" aria-label="Page 6">6</a></li>
                                <li><a href="1-MAI-7.php" aria-label="Page 7">7</a></li>
                                <li class="pagination-next"><a href="1-MAI-2.php" aria-label="Next page">Next</a></li>
                            </ul>-->
                            <!--<input type="hidden" name="redirect-url" value="1-MAI-2.php">-->
                            <!--<input class="button expanded success" type="submit" name="submit">-->
                            <div class="form-actions">
                      <button type="submit" name="submit" class="button success expanded">Submit</button> 
                    </div> <!-- /form-actions -->

                            
                            </form>
                            <?php }
              else {
                ?>
               <div class="columns main-wrapper rounded shadow">
                 <div class="alert alert-success" align="center"><h5>Anda sudah melakukan evaluasi materi di halaman ini.</h5><br>
                  <a href="7-Evaluasi-Self-Regulation-Learning.php" class="pagination-next button">Lanjutkan</a></div></div>
                <?php
              }
              ?>
                        </div>
                    </div>
                </div>

                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <?php  //S:Eksekusi Submit
  if (isset($_POST['submit']))
  {
    $idlog=$_SESSION['idlog'];
    $namalog=$_SESSION['namalog'];
    $soal1=$_POST['soal1'];
    $soal2=$_POST['soal2'];
    $soal3=$_POST['soal3'];
    $soal4=$_POST['soal4'];
    $soal5=$_POST['soal5'];
    $soal6=$_POST['soal6'];
    $soal7=$_POST['soal7'];
    $soal8=$_POST['soal8'];
    $soal9=$_POST['soal9'];
    $soal10=$_POST['soal10'];


      // echo "masuk";

    if($soal1=="" || $soal2=="" ||$soal3=="" || $soal4=="" || $soal5=="" || $soal6=="" || $soal7=="" || $soal8=="" || $soal9=="" || $soal10=="")
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {   
        $nilai=$soal1+$soal2+$soal3+$soal4+$soal5+$soal6+$soal7+$soal8+$soal9+$soal10;
 
        $coba=mysqli_query($connect, "insert into tb_evaluasi_sorting1 values('$idlog', '$namalog', '$soal1','$soal2', '$soal3', '$soal4', '$soal5', '$soal6', '$soal7', '$soal8', '$soal9', $soal10, $nilai, now())") or die (mysqli_error());




        ?>

<div class="large reveal" id="exampleModal1" data-reveal>
<div class="row"> 
<div class="large-4 small-12 columns">
<img class="thumbnail" src="../../assets/img/teacher.png">
</div>
<div class="large-8 small-12 columns">
    <h2> Hi <?php echo $_SESSION['namalog'];?>! </h2>
    <h3></h3>
    <br/>
    <p> Kamu telah mengisi kuesioner pada halaman ini. </p>
    <a href="1-MAI-2.php" class="pagination-next button">Lanjutkan kuesioner</a>
</div>
</div>
</div>


        <?php
        header('location:1-MAI-2.php');
        
        

           
          //if($query){
            //header('Location: 1-MAI-2.php');
          //}
      
      //echo "<script type='text/javascript'>alert('Penambahan Data Sukses');</script>";
      //header('location:1-MAI-2.php');
    }
  }
  //E:Eksekusi Submit
?>
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
<?php } 
else
{
header('location:../../login/login_mhs.php');
}
?>