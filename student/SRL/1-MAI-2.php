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
                    $mhs= mysqli_query($connect, "SELECT * FROM tb_mai_page2 WHERE id_mhs='$_SESSION[idlog]'");
                    $mai_mhs=mysqli_num_rows($mhs);
            if ($mai_mhs==0){
            ?>
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
                                        <td><code>8</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri, ”Apakah saya sudah mencapai tujuan saya?”, ketika sedang berupaya mencapai tujuan secara intensif.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai8" value="4" id="mai80"><label for="mai80">Selalu</label>
                                            <input type="radio" name="mai8" value="3" id="mai81"><label for="mai80">Sering</label>
                                            <input type="radio" name="mai8" value="2" id="mai82"><label for="mai81">Kadang-kadang</label>
                                            <input type="radio" name="mai8" value="1" id="mai83"><label for="mai82">Jarang</label>
                                            <input type="radio" name="mai8" value="0" id="mai84"><label for="mai83">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>9</code></td>
                                        <td>
                                            Saya mempertimbangkan berbagai pilihan sebelum saya menyelesaikan sebuah permasalahan.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai9" value="4" id="mai90"><label for="mai90">Selalu</label>
                                            <input type="radio" name="mai9" value="3" id="mai91"><label for="mai91">Sering</label>
                                            <input type="radio" name="mai9" value="2" id="mai92"><label for="mai92">Kadang-kadang</label>
                                            <input type="radio" name="mai9" value="1" id="mai93"><label for="mai93">Jarang</label>
                                            <input type="radio" name="mai9" value="0" id="mai94"><label for="mai94">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>10</code></td>
                                        <td>
                                            Saya coba menggunakan cara-cara yang pernah saya pakai sebelumnya.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai10" value="4" id="mai100"><label for="mai100">Selalu</label>
                                            <input type="radio" name="mai10" value="3" id="mai101"><label for="mai101">Sering</label>
                                            <input type="radio" name="mai10" value="2" id="mai102"><label for="mai102">Kadang-kadang</label>
                                            <input type="radio" name="mai10" value="1" id="mai103"><label for="mai103">Jarang</label>
                                            <input type="radio" name="mai10" value="0" id="mai104"><label for="mai104">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>11</code></td>
                                        <td>
                                            Saya terus menerus mengatur diri selama belajar agar memiliki waktu yang cukup.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai11" value="4" id="mai110"><label for="mai110">Selalu</label>
                                            <input type="radio" name="mai11" value="3" id="mai111"><label for="mai111">Sering</label>
                                            <input type="radio" name="mai11" value="2" id="mai112"><label for="mai112">Kadang-kadang</label>
                                            <input type="radio" name="mai11" value="1" id="mai113"><label for="mai113">Jarang</label>
                                            <input type="radio" name="mai11" value="0" id="mai114"><label for="mai114">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>12</code></td>
                                        <td>
                                           Saya memahami kekuatan dan kelemahan kecerdasan saya.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai12" value="4" id="mai120"><label for="mai120">Selalu</label>
                                            <input type="radio" name="mai12" value="3" id="mai121"><label for="mai121">Sering</label>
                                            <input type="radio" name="mai12" value="2" id="mai122"><label for="mai122">Kadang-kadang</label>
                                            <input type="radio" name="mai12" value="1" id="mai123"><label for="mai123">Jarang</label>
                                            <input type="radio" name="mai12" value="0" id="mai124"><label for="mai124">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>13</code></td>
                                        <td>
                                           Saya berpikir tentang apa yang sebenarnya perlu saya pelajari sebelum mengerjakan tugas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai13" value="4" id="mai130"><label for="mai130">Selalu</label>
                                            <input type="radio" name="mai13" value="3" id="mai131"><label for="mai131">Sering</label>
                                            <input type="radio" name="mai13" value="2" id="mai132"><label for="mai132">Kadang-kadang</label>
                                            <input type="radio" name="mai13" value="1" id="mai133"><label for="mai133">Jarang</label>
                                            <input type="radio" name="mai13" value="0" id="mai134"><label for="mai134">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>14</code></td>
                                        <td>
                                            Saya menyadari bagaimana baiknya saya menyelesaikan suatu tes.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai14" value="4" id="mai140"><label for="mai140">Selalu</label>
                                            <input type="radio" name="mai14" value="3" id="mai141"><label for="mai141">Sering</label>
                                            <input type="radio" name="mai14" value="2" id="mai142"><label for="mai142">Kadang-kadang</label>
                                            <input type="radio" name="mai14" value="1" id="mai143"><label for="mai143">Jarang</label>
                                            <input type="radio" name="mai14" value="0" id="mai144"><label for="mai144">Tidak Pernah</label>
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
                             <div class="form-actions">
                      <button type="submit" name="submit" class="button success expanded">Submit</button> 
                    </div> <!-- /form-actions -->

                            
                            </form>
                            <?php }
              else {
                ?><<div class="columns main-wrapper rounded shadow">
                 <div class="alert alert-success" align="center"><h5>Anda sudah mengisi kuesioner pada halaman ini.</h5><br>
                  <a href="1-MAI-3.php" class="pagination-next button">Lanjutkan kuesioner</a></div></div>
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
    $mai8=$_POST['mai8'];
    $mai9=$_POST['mai9'];
    $mai10=$_POST['mai10'];
    $mai11=$_POST['mai11'];
    $mai12=$_POST['mai12'];
    $mai13=$_POST['mai13'];
    $mai14=$_POST['mai14'];

      // echo "masuk";

    if($mai8=="" || $mai9=="" ||$mai10=="" || $mai11=="" || $mai12=="" || $mai13=="" || $mai14=="" )
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {
 
        mysqli_query($connect, "insert into tb_mai_page2 values('$idlog', '$namalog', '$mai8','$mai9', '$mai10', '$mai11', '$mai12', '$mai13', '$mai14', now())") or die (mysqli_error());
           
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
    <a href="1-MAI-3.php" class="pagination-next button">Lanjutkan kuesioner</a>
</div>
</div>
</div>


        <?php
        header('location:1-MAI-3.php');
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
</html>
<?php } 
else
{
header('location:../../login/login_mhs.php');
}
?>