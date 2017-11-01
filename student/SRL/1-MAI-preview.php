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
    <title>1. MAI - Students</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/timeline.css">
    <meta class="foundation-mq">
</head>

<body>

                <div class="row main-wrapper rounded">
                    <div class="row top space">
                        <div class="columns">
                            <div class="top-bar">
                             <h2 style="display: block;" align="center">Metacognitive Awareness Test</h2>
                             <h5 align="center"> <?php echo $_SESSION['namalog'];?> , <?php echo $_SESSION['idlog'];?> ( <a class="logout" href="logout.php"><i class="fa fa-lock"></i>  Logout</a> )</h5>
                            <hr width="75%" />
                            </div>
                        </div>
                    </div>
                    
                    <?php
            $sql=mysqli_query($connect, "SELECT
tb_mai_page1.id_mhs,
tb_mai_page1.nama_lengkap,
tb_mai_page1.MAI1 AS MAI1,
tb_mai_page1.MAI2 AS MAI2,
tb_mai_page1.MAI3 AS MAI3,
tb_mai_page1.MAI4 AS MAI4,
tb_mai_page1.MAI5 AS MAI5,
tb_mai_page1.MAI6 AS MAI6,
tb_mai_page1.MAI7 AS MAI7,
tb_mai_page2.MAI8 AS MAI8,
tb_mai_page2.MAI9 AS MAI9,
tb_mai_page2.MAI10 AS MAI10,
tb_mai_page2.MAI11 AS MAI11,
tb_mai_page2.MAI12 AS MAI12,
tb_mai_page2.MAI13 AS MAI13,
tb_mai_page2.MAI14 AS MAI14,
tb_mai_page3.MAI15 AS MAI15,
tb_mai_page3.MAI16 AS MAI16,
tb_mai_page3.MAI17 AS MAI17,
tb_mai_page3.MAI18 AS MAI18,
tb_mai_page3.MAI19 AS MAI19,
tb_mai_page3.MAI20 AS MAI20,
tb_mai_page3.MAI21 AS MAI21,
tb_mai_page4.MAI22 AS MAI22,
tb_mai_page4.MAI23 AS MAI23,
tb_mai_page4.MAI24 AS MAI24,
tb_mai_page4.MAI25 AS MAI25,
tb_mai_page4.MAI26 AS MAI26,
tb_mai_page4.MAI27 AS MAI27,
tb_mai_page4.MAI28 AS MAI28,
tb_mai_page5.MAI29 AS MAI29,
tb_mai_page5.MAI30 AS MAI30,
tb_mai_page5.MAI31 AS MAI31,
tb_mai_page5.MAI32 AS MAI32,
tb_mai_page5.MAI33 AS MAI33,
tb_mai_page5.MAI34 AS MAI34,
tb_mai_page5.MAI35 AS MAI35,
tb_mai_page6.MAI36 AS MAI36,
tb_mai_page6.MAI37 AS MAI37,
tb_mai_page6.MAI38 AS MAI38,
tb_mai_page6.MAI39 AS MAI39,
tb_mai_page6.MAI40 AS MAI40,
tb_mai_page6.MAI41 AS MAI41,
tb_mai_page6.MAI42 AS MAI42,
tb_mai_page7.MAI43 AS MAI43,
tb_mai_page7.MAI44 AS MAI44,
tb_mai_page7.MAI45 AS MAI45,
tb_mai_page7.MAI46 AS MAI46,
tb_mai_page7.MAI47 AS MAI47,
tb_mai_page7.MAI48 AS MAI48,
tb_mai_page7.MAI49 AS MAI49,
tb_mai_page7.MAI50 AS MAI50,
tb_mai_page7.MAI51 AS MAI51,
tb_mai_page7.MAI52 AS MAI52
FROM
tb_mai_page1
INNER JOIN tb_mai_page2 ON tb_mai_page1.id_mhs = tb_mai_page2.id_mhs AND tb_mai_page1.nama_lengkap = tb_mai_page2.nama_lengkap
INNER JOIN tb_mai_page3 ON tb_mai_page3.nama_lengkap = tb_mai_page2.nama_lengkap AND tb_mai_page3.id_mhs = tb_mai_page2.id_mhs
INNER JOIN tb_mai_page4 ON tb_mai_page4.nama_lengkap = tb_mai_page3.nama_lengkap AND tb_mai_page4.id_mhs = tb_mai_page3.id_mhs
INNER JOIN tb_mai_page5 ON tb_mai_page5.nama_lengkap = tb_mai_page4.nama_lengkap AND tb_mai_page5.id_mhs = tb_mai_page4.id_mhs
INNER JOIN tb_mai_page6 ON tb_mai_page6.nama_lengkap = tb_mai_page5.nama_lengkap AND tb_mai_page6.id_mhs = tb_mai_page5.id_mhs
INNER JOIN tb_mai_page7 ON tb_mai_page7.nama_lengkap = tb_mai_page6.nama_lengkap AND tb_mai_page7.id_mhs = tb_mai_page6.id_mhs
WHERE tb_mai_page1.id_mhs = '$_SESSION[idlog]' AND tb_mai_page2.id_mhs = '$_SESSION[idlog]' AND tb_mai_page3.id_mhs = '$_SESSION[idlog]' AND tb_mai_page4.id_mhs = '$_SESSION[idlog]'
AND tb_mai_page5.id_mhs = '$_SESSION[idlog]' AND tb_mai_page6.id_mhs = '$_SESSION[idlog]' AND tb_mai_page7.id_mhs = '$_SESSION[idlog]'
");
            $data=mysqli_fetch_array($sql);
            ?>
                      <div class="columns main-wrapper rounded shadow">
                        
                      <h5 class="mb"> Knowledge score:


                        <?php

                        $knowledge = $data['MAI3'] + $data['MAI5'] + $data['MAI10'] + $data['MAI12'] + $data['MAI14'] + $data['MAI15'] + $data['MAI16'] + $data['MAI17'] + $data['MAI18'] + $data['MAI20'] + $data['MAI26'] + $data['MAI27'] + $data['MAI29'] + $data['MAI32'] + $data['MAI33'] + $data['MAI35']+ $data['MAI46'];

                        echo "$knowledge <br>";

                        $regulation = $data['MAI1'] + $data['MAI2'] + $data['MAI4'] + $data['MAI6'] + $data['MAI7'] + $data['MAI8'] + $data['MAI9'] + $data['MAI11'] +$data['MAI13'] + $data['MAI19'] + $data['MAI21'] + $data['MAI22'] + $data['MAI23'] + $data['MAI24'] + $data['MAI25'] + $data['MAI28'] + $data['MAI30'] + $data['MAI31'] + $data['MAI34'] + $data['MAI36'] + $data['MAI37'] + $data['MAI38'] + $data['MAI39'] + $data['MAI40'] + $data['MAI41'] + $data['MAI42'] + $data['MAI43'] + $data['MAI44'] + $data['MAI45'] + $data['MAI47'] + $data['MAI48'] + $data['MAI49'] + $data['MAI50'] + $data['MAI51'] + $data['MAI52'];

                        echo "Regulation score: $regulation";
                        ?>
                      </h5>  
                      <h6>
                        Hasil tersebut tidak mempengaruhi nilai akademik mahasiswa, nilai <b>Knowledge</b> dan <b>Regulation </b> tersebut akan menentukan bantuan pembelajaran yang akan diberikan kepada mahasiswa pada pertemuan selanjutnya.
                      </h6>     

                      <form action=""  method="post" id="add-score" class="form-horizontal">
                        <div class="form-actions">
                      <button type="submit" name="submit" class="button success expanded">KLIK DISINI UNTUK MENYIMPAN HASIL</button> 
                    </div> <!-- /form-actions -->
                      </form></div>
                      <?php

  //S:Eksekusi Submit
  if (isset($_POST['submit']))
  {
    $idlog=$_SESSION['idlog'];
    $namalog=$_SESSION['namalog'];
    $knowledge=$knowledge;
    $regulation=$regulation;

      // echo "masuk";

    if($knowledge=="" || $regulation=="" )
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {
        mysqli_query($connect, "insert into tb_fuz_skor_mhs_mai values('$idlog', '$namalog', '$knowledge','$regulation', now())") or die (mysqli_error());

        if ($knowledge<=17) {
          $knowledge_rendah=1;
        } elseif ($knowledge>=17 && $knowledge<=34) {
          $knowledge_rendah=(34-$knowledge)/17;
        } else{
          $knowledge_rendah=0;
        }

        if ($knowledge<=17 or $knowledge>=51) {
          $knowledge_sedang=0;
        } elseif ($knowledge>=17 && $knowledge<=34){
          $knowledge_sedang=($knowledge-17)/17;
        } elseif ($knowledge>=34 && $knowledge<=51) {
          $knowledge_sedang=(51-$knowledge)/17;
        }

        if ($knowledge<=34) {
          $knowledge_tinggi=0;
        } elseif ($knowledge>=34 && $knowledge<=51) {
          $knowledgelogin_tinggi=($knowledge-34)/17;
        } else {
          $knowledge_tinggi=1;
        }


        if ($regulation<=35) {
          $regulation_rendah=1;
        } elseif ($regulation>=35 && $regulation<=70) {
          $regulation_rendah=(70-$regulation)/35;
        } else{
          $regulation_rendah=0;
        }

        if ($regulation<=35 or $regulation>=105) {
          $regulation_sedang=0;
        } elseif ($regulation>=35 && $regulation<=70){
          $regulation_sedang=($regulation-35)/35;
        } elseif ($regulation>=70 && $regulation<=105) {
          $regulation_sedang=(105-$regulation)/35;
        }

        if ($regulation<=70) {
          $regulation_tinggi=0;
        } elseif ($regulation>=70 && $regulation<=105) {
          $regulation_tinggi=($regulation-70)/35;
        } else {
          $regulation_tinggi=1;
        }

        mysqli_query($connect, "insert into tb_fuz_derajat_mai values('$idlog', '$knowledge_rendah', '$knowledge_sedang', '$knowledge_tinggi', '$regulation_rendah', '$regulation_sedang', '$regulation_tinggi')") or die (mysqli_error());


        $knowledge_max=max($knowledge_rendah,$knowledge_sedang,$knowledge_tinggi);
        $regulation_max=max($regulation_rendah,$regulation_sedang,$regulation_tinggi);

        if ($knowledge_max==$knowledge_rendah) {
          $kategori_knowledge=1;
        }
        elseif ($knowledge_max==$knowledge_sedang) {
          $kategori_knowledge=2;
        }
        elseif ($knowledge_max==$knowledge_tinggi) {
          $kategori_knowledge=3;
        }

        if ($regulation_max==$regulation_rendah) {
          $kategori_regulation=1;
        }
        elseif ($regulation_max==$regulation_sedang) {
          $kategori_regulation=2;
        }
        elseif ($regulation_max==$regulation_tinggi) {
          $kategori_regulation=3;
        }


        mysqli_query($connect, "insert into tb_fuz_kategori values('$idlog', '$knowledge_max', '$regulation_max', '$kategori_knowledge', '$kategori_regulation')") or die (mysqli_error());

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
header('location:../../login/login_mhs.php');
}
?>