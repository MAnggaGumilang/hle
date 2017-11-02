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
                            <h5>Tujuan Instruksional Umum</h5>
                            <h7><b>Dengan mempelajari Algoritma dan Struktur Data ini, diharapkan:</b></h7>
                            <ul>
                                <li>Mahasiswa mempelajari tentang paradigma pemrograman, pengertian algoritma, syarat-syarat algoritma, flowchart dan pseudocode, kompleksitas waktu eksekusi, iterasi dan rekursi.</li>
                                <li>Mahasiswa memahami konsep dasar struktur data.</li>
                                <li>Selanjutnya diberikan pelajaran macam–macam struktur data dan bentuk-bentuk algoritme yang ada.</li>
                            </ul>

                            </div>
                            <div class="callout">
                            <h5>Tujuan Instruksional Khusus</h5>
                            <table>
                                <tr>
                                    <td width="10%"></td>
                                    <td width="90%"></td>
                                </tr>
                                <tr>
                                    <td align="center"><b>No</b></td>
                                    <td><b>Learning Outcome</b></td>
                                
                                </tr>
                                <tr>
                                    <td align="center">1</td>
                                    <td>Mahasiswa dapat memahami arti dan manfaat algoritma dan struktur data, syarat-syarat algoritma dan kompleksitas algoritma.</td>
                                    
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td>Mahasiswa dapat menjelaskan dan mengimplementasikan representasi data, membuat deklarasi data atas berbagai tipe data , variabel dan Abstract Data Type (ADT).</td>
                                   
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td>Mahasiswa dapat memahami dan mengimplementasikan dalam pemrograman untuk membagun berbagai macam model struktur data seperti : tumpukan, queue, list, array, pohon, dan graph.</td>
                                   
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td>Mahasiswa dapat memahami berbagai macam algoritma sorting data dan unjuk kerjanya masing-masing algoritma itu.</td>
                                    
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td>Mahasiswa dapat memahami dan mengimplementasikan dalam program berbagai algoritma searching data dan unjuk kerja masing-masing.</td>
                                   
                                </tr>
                            </table>
                            </div>
                            <div class="callout">
                            <h5>Topik Pembelajaran</h5>
                            <ol>
                                <li>Pendahuluan</li>
                                <li>Analisis Algoritma</li>
                                <li>Struktur Data dan <i>Abstract Data Type</i> (ADT)</li>
                                <li>Tumpukan</li>
                                <li>Antrian</li>
                                <li>Struktur List</li>
                                <li>Struktur Pohon</li>
                                <li><i>Sorting Data</i></li>
                                <li><i>Searching Data</i></li>
                                <li>Struktur Data Graph</li>
                            </ol>
                        </div>
                        <div class="callout">
                            <h5>Pustaka</h5>
                            <ol>
                                <li>McMillan, M : Data Structures and Algoritms Using C#, Cambridge University Press, 2007 </li>
                                <li>Mehta, D.P and Sahni, S:Handbook of DATA STRUCTURES and APPLICATIONS, Chapman & Hall/CRC Computer and Information Science Series, 2005 </li>
                                <li>Unduhan Internet tentang Data Structures and Algorithms </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </div>
                
                <a href="../student/SRL/2-Set-Goals.php" class="button expanded success"> Lanjutkan</a>
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
header('location:../../login/login_mhs.php');
}
?>
