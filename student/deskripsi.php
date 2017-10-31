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
    <title>Deskripsi - Student</title>
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
                    <li class="active"><a href="../student/deskripsi.php"><i class="fa fa-info" aria-hidden="true"></i>Deskripsi</a></li>
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
                        <span class="title-bar-title">Sarah Ng</span>
                    </div>
                </div>
                <div class="row main-wrapper rounded">
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <h2 align="center">Rencana Program Kegiatan Pembelajaran Semester (RPKPS)</h2>
                            <div class="callout">
                            <h5>Deskripsi Singkat Mata Kuliah</h5>
                            <p> Mata kuliah ini mempelajari tentang paradigma pemrograman, pengertian algoritma, syarat-syarat algoritma, flowchart dan pseudocode, kompleksitas waktu eksekusi, iterasi dan rekursi. Sebagai konsep yang mendasari struktur data, dipelajari representasi data, tipe data, deklarasi variabel, deklarasi tipe data dengan ADT, alokasi memori dan struktur, deklarasi struktur, union, struktur data satu dimensi, dua dimensi dan tiga dimensi. Stack & Queue serta implementasinya. </p>
                            <p> Selanjutnya diberikan pelajaran macam –macam struktur data yaitu : struktur list tunggal, struktur list doubly, struktur list circular, struktur array, struktur pohon dan struktur graph. Update data (sisipkan dan hapus data) bagi berbagai model struktur data juga dipelajari di sini. Selanjutnya diberikan pemahaman tentang berbagai algoritma sorting dan unjukkerja masing-masing algoritma itu. Berbagai algoritma searching dan unjukkerjanya dipelajari di sini secara lebih mendalam untuk mendasari implementasi struktur data dalam sistem basis data. </p>
                            </div>
                            <div class="callout primary">
                            <h5>Tujuan Pembelajaran</h5>
                            <p> Dengan mempelajari Algoritma dan Struktur Data ini, diharapkan : </p>
                            <ol>
                                <li> Mahasiswa dapat memahami arti dan manfaat algoritma dan struktur data, syarat-syarat algoritma, kopleksitas waktu eksekusi program, teknik dan gaya pemrograman, serta langkah pemrograman yang efektif dan efisien </li>
                                <li> Mahasiswa dapat memahami dan mengimplementasikan dalam pemrograman untuk membagun berbagai macam model struktur data seperti : tumpukan, queue, list, array, pohon, dan graph. </li>
                                <li> Mahasiswa dapat memahami dan mengimplementasikan cara updating data dari berbagai model struktur data. </li>
                                <li> Mahasiswa dapat memahami berbagai macam algoritma sorting data dan unjukkerjanya masing-masing algoritma itu. </li>
                                <li> Mahasiswa dapat memahami dan mengimplementasikan dalam program berbagai algoritma searchig data dan unjukkerjanya masing-masing. </li>
                            </ol>
                            </div>
                            <div class="callout">
                            <h5>Materi Pembelajaran</h5>
                            <ul>
                                <li>Teknik Pemrograman</li>
                                <li>Struktur Data dan ADT</li>
                                <li>Tumpukan</li>
                                <li>Antrian</li>
                                <li>List</li>
                                <li>Tree</li>
                                <li>Sorting Data</li>
                                <li>Searching</li>
                                <li>Struktur Data Graph</li>
                            </ul>
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
    </script>
</body>

</html>
<?php } 
else
{
header('location:../login/login_mhs.php');
}
?>
