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
    <title>7. Evaluation Self Regulation Learning</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/timeline.css">
    <meta class="foundation-mq">
</head>

<body>
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <div class="sidebar off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="l6sk4l-off-canvas" data-position="left" aria-hidden="true">
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
                                    <li class="timeline done">
                                        Adaptive-Learning Materials
                                        <span class="details">Description of point 5</span>
                                    </li>
                                    <li class="timeline done">
                                        Learning Evaluation
                                        <span class="details">Description of point 6</span>
                                    </li>
                                    <li class="timeline done">
                                        Self-Regulation Learning Evaluation
                                        <span class="details">Description of point 7</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <h2 style="display: block;" align="center">Self-Regulation Learning Evaluation</h2>
                            <hr width="75%" />
                            <?php
                    $mhs= mysqli_query($connect, "SELECT * FROM tb_evaluasi_srl WHERE id_mhs='$_SESSION[idlog]'");
                    $mai_mhs=mysqli_num_rows($mhs);
            if ($mai_mhs==0){
            ?>
                            <form action=""  method="post" id="add-mai" class="form-horizontal">
                            <table class="projects table">
                                <thead>
                                    <tr>
                                        <th width="5%">Nomor</th>
                                        <th width="75%">Pertanyaan</th>
                                        <th width="20%">Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>1</code></td>
                                        <td>
                                           Saya memperoleh materi tentang Sorting I, tetapi tidak cukup untuk mencapai tujuan pembelajaran saya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal1" value="1" id="soal60"><label for="soal10">Ya</label>
                                            <input type="radio" name="soal1" value="0" id="soal61"><label for="soal11">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>2</code></td>
                                        <td>
                                           Materi Sorting I dengan menggunakan (video/draw/summarization) telah memberikan informasi yang saya butuhkan untuk memahami materi.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal2" value="1" id="soal60"><label for="soal20">Ya</label>
                                            <input type="radio" name="soal2" value="0" id="soal61"><label for="soal21">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>3</code></td>
                                        <td>
                                            Saya pernah mendengar materi Sorting I sebelumnya, dan saya sudah sedikit memahaminya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal3" value="1" id="soal60"><label for="soal30">Ya</label>
                                            <input type="radio" name="soal3" value="0" id="soal61"><label for="soal31">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>4</code></td>
                                        <td>
                                            Setelah belajar menggunakan HLE ini, saya memahami materi Sorting I dengan baik.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal4" value="1" id="soal60"><label for="soal40">Ya</label>
                                            <input type="radio" name="soal4" value="0" id="soal61"><label for="soal41">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>5</code></td>
                                        <td>
                                            Saya berhasil mencapai tujuan belajar saya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal5" value="1" id="soal60"><label for="soal50">Ya</label>
                                            <input type="radio" name="soal5" value="0" id="soal61"><label for="soal51">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>6</code></td>
                                        <td>
                                            Menggunakan strategi yang saya pilih tadi dalam mempelajari Sorting I sangat membantu saya untuk memahaminya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal6" value="1" id="soal60"><label for="soal60">Ya</label>
                                            <input type="radio" name="soal6" value="0" id="soal61"><label for="soal61">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>7</code></td>
                                        <td>
                                            Waktu yang disediakan dalam <i> Hypermedia Learning Environment </i> ini cukup bagi saya
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal7" value="1" id="soal70"><label for="soal70">Ya</label>
                                            <input type="radio" name="soal7" value="0" id="soal71"><label for="soal71">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>8</code></td>
                                        <td>
                                            Belajar dengan menggunakan <i> Hypermedia </i> ini lebih mudah dibanding membaca buku.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                            <fieldset>
                                            <input type="radio" name="soal8" value="1" id="soal80"><label for="soal80">Ya</label>
                                            <input type="radio" name="soal8" value="0" id="soal81"><label for="soal81">Tidak</label>
                                            
                                          </fieldset>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-actions">
                      <button type="submit" name="submit" class="button success expanded">Submit</button> 
                    </div> <!-- /form-actions -->                            
                            </form>




                            <?php }
              else {
                ?>
               <div class="columns main-wrapper rounded shadow">
                 <div class="alert alert-success" align="left"><h5>Anda sudah melakukan evaluasi SRL dan materi Sorting I.</h5><br>

                    <?php

                    $tampil_skor=mysqli_query("SELECT
tb_evaluasi_sorting1.id_mhs,
tb_evaluasi_sorting1.nama_lengkap,
tb_evaluasi_sorting1.no1,
tb_evaluasi_sorting1.no2,
tb_evaluasi_sorting1.no3,
tb_evaluasi_sorting1.no4,
tb_evaluasi_sorting1.no5,
tb_evaluasi_sorting1.no6,
tb_evaluasi_sorting1.no7,
tb_evaluasi_sorting1.no8,
tb_evaluasi_sorting1.no9,
tb_evaluasi_sorting1.no10,
tb_evaluasi_sorting1.nilai as nilai_evaluasi_materi,
tb_evaluasi_sorting1.waktu_pengisian
FROM
tb_evaluasi_sorting1
WHERE id_mhs='$_SESSION[idlog]'");
                    $show_skor_materi=mysqli_fetch_array($tampil_skor);
                    $skor_materi=$show_skor_materi['nilai_evaluasi_materi'];
                    ?>

                                <p class="lead">Skor Evaluasi Materi: <?php echo "$skor_materi"; ?> </p>
                                <p class="lead">Hasil Monitoring SRL: <?php   ?> </p>
                                <ul>
                                    <li>Pengetahuan: ....</li> 
                                    <li>Pemahaman: ....</li> 
                                    <li>Kemajuan dalam mencapai tujuan: ....</li> 
                                    <li>Penggunaan strategi: ....</li> 
                                    <li>Penggunaan Waktu: ....</li> 
                                    <li>Tingkat Kesulitan: ....</li> 
                                </ul>
                                <p> Hasil Belajar Anda dalam Materi ... menggunakan Strategi ... adalah ... , Sehingga anda direkomendasikan untuk ....  </p>
                                








                  <a href="../dashboard.php" class="pagination-next button">Kembali ke dashboard</a></div></div>
                <?php
              }
              ?>



                            <?php


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
                            
      // echo "masuk";

    if($soal1=="" || $soal2=="" ||$soal3=="" || $soal4=="" || $soal5=="" || $soal6=="" || $soal7=="" || $soal8=="")
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {   
        $srl=$soal1+$soal2+$soal3+$soal4+$soal5+$soal6+$soal7+$soal8;
 
        $coba=mysqli_query($connect, "insert into tb_evaluasi_srl values('$idlog', '$namalog', '$soal1','$soal2', '$soal3', '$soal4', '$soal5', '$soal6', '$soal7', '$soal8', '$srl', now())") or die (mysqli_error());


        if ($srl<=1.75) {
          $srl_rendah=1;
        } elseif ($srl>=1.75 && $srl<=3.5) {
          $srl_rendah=(3.5-$srl)/1.75;
        } else{
          $srl_rendah=0;
        }

        if ($srl<=1.75 or $srl>=5.25) {
          $srl_sedang=0;
        } elseif ($srl>=1.75 && $srl<=3.5){
          $srl_sedang=($srl-1.75)/1.75;
        } elseif ($srl>=3.5 && $srl<=5.25) {
          $srl_sedang=(5.25-$srl)/1.75;
        }

        if ($srl<=3.5) {
          $srl_tinggi=0;
        } elseif ($srl>=3.5 && $srl<=5.25) {
          $srl_tinggi=($srl-3.5)/1.75;
        } else {
          $srl_tinggi=1;
        }

        mysqli_query($connect, "insert into tb_fuz_derajat_srl_sorting1 values('$idlog', '$srl_rendah', '$srl_sedang', '$srl_tinggi')") or die (mysqli_error());

        $srl_max=max($srl_rendah,$srl_sedang,$srl_tinggi);

        if ($srl_max==$srl_rendah) {
          $kategori_srl=1;
        }
        elseif ($srl_max==$srl_sedang) {
          $kategori_srl=2;
        }
        elseif ($srl_max==$srl_tinggi) {
          $kategori_srl=3;
        }

        mysqli_query($connect, "insert into tb_evaluasi_srl_sorting1_kategori values('$idlog', '$srl_max', '$kategori_srl')") or die (mysqli_error());



    }
      echo "<script type='text/javascript'>alert('Penambahan Data Sukses');</script>";
    }
  
  //E:Eksekusi Submit
?>



















                            
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
    </script>
</body>

</html>
<?php } 
else
{
header('location:../../login/login_mhs.php');
}
?>