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
                    $mhs= mysqli_query($connect, "SELECT * FROM tb_mai_page3 WHERE id_mhs='$_SESSION[idlog]'");
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
                                        <td><code>15</code></td>
                                        <td>
                                            Saya belajar paling baik ketika saya mengetahui topik pembelajaran itu.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai15" value="4" id="mai150"><label for="mai150">Selalu</label>
                                            <input type="radio" name="mai15" value="3" id="mai151"><label for="mai150">Sering</label>
                                            <input type="radio" name="mai15" value="2" id="mai152"><label for="mai151">Kadang-kadang</label>
                                            <input type="radio" name="mai15" value="1" id="mai153"><label for="mai152">Jarang</label>
                                            <input type="radio" name="mai15" value="0" id="mai154"><label for="mai153">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>16</code></td>
                                        <td>
                                            Saya mengetahui apa yang diharapkan guru untuk saya pelajari.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai16" value="4" id="mai160"><label for="mai160">Selalu</label>
                                            <input type="radio" name="mai16" value="3" id="mai161"><label for="mai161">Sering</label>
                                            <input type="radio" name="mai16" value="2" id="mai162"><label for="mai162">Kadang-kadang</label>
                                            <input type="radio" name="mai16" value="1" id="mai163"><label for="mai163">Jarang</label>
                                            <input type="radio" name="mai16" value="0" id="mai164"><label for="mai164">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>17</code></td>
                                        <td>
                                            Saya mudah mengingat informasi.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai17" value="4" id="mai170"><label for="mai170">Selalu</label>
                                            <input type="radio" name="mai17" value="3" id="mai171"><label for="mai171">Sering</label>
                                            <input type="radio" name="mai17" value="2" id="mai172"><label for="mai172">Kadang-kadang</label>
                                            <input type="radio" name="mai17" value="1" id="mai173"><label for="mai173">Jarang</label>
                                            <input type="radio" name="mai17" value="0" id="mai174"><label for="mai174">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>18</code></td>
                                        <td>
                                            Saya menggunakan cara belajar yang berbeda-beda tergantung pada situasi dan kondisi.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai18" value="4" id="mai180"><label for="mai180">Selalu</label>
                                            <input type="radio" name="mai18" value="3" id="mai181"><label for="mai181">Sering</label>
                                            <input type="radio" name="mai18" value="2" id="mai182"><label for="mai182">Kadang-kadang</label>
                                            <input type="radio" name="mai18" value="1" id="mai183"><label for="mai183">Jarang</label>
                                            <input type="radio" name="mai18" value="0" id="mai184"><label for="mai184">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>19</code></td>
                                        <td>
                                           Setelah saya menyelesaikan suatu tugas, saya bertanya kepada diri sendiri apakah ada cara yang lebih mudah.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai19" value="4" id="mai190"><label for="mai190">Selalu</label>
                                            <input type="radio" name="mai19" value="3" id="mai191"><label for="mai191">Sering</label>
                                            <input type="radio" name="mai19" value="2" id="mai192"><label for="mai192">Kadang-kadang</label>
                                            <input type="radio" name="mai19" value="1" id="mai193"><label for="mai193">Jarang</label>
                                            <input type="radio" name="mai19" value="0" id="mai194"><label for="mai194">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>20</code></td>
                                        <td>
                                           Saya mengendalikan sendiri kualitas belajar saya.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai20" value="4" id="mai200"><label for="mai200">Selalu</label>
                                            <input type="radio" name="mai20" value="3" id="mai201"><label for="mai201">Sering</label>
                                            <input type="radio" name="mai20" value="2" id="mai202"><label for="mai202">Kadang-kadang</label>
                                            <input type="radio" name="mai20" value="1" id="mai203"><label for="mai203">Jarang</label>
                                            <input type="radio" name="mai20" value="0" id="mai204"><label for="mai204">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>21</code></td>
                                        <td>
                                            Secara teratur saya melakukan peninjauan kemampuan untuk menolong saya memahami hubungan-hubungan penting.

                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai21" value="4" id="mai210"><label for="mai210">Selalu</label>
                                            <input type="radio" name="mai21" value="3" id="mai211"><label for="mai211">Sering</label>
                                            <input type="radio" name="mai21" value="2" id="mai212"><label for="mai212">Kadang-kadang</label>
                                            <input type="radio" name="mai21" value="1" id="mai213"><label for="mai213">Jarang</label>
                                            <input type="radio" name="mai21" value="0" id="mai214"><label for="mai214">Tidak Pernah</label>
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
                ?><div class="columns main-wrapper rounded shadow">
                 <div class="alert alert-success" align="center"><h5>Anda sudah mengisi kuesioner pada halaman ini.</h5><br>
                  <a href="1-MAI-4.php" class="pagination-next button">Lanjutkan kuesioner</a></div></div>
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
    $mai15=$_POST['mai15'];
    $mai16=$_POST['mai16'];
    $mai17=$_POST['mai17'];
    $mai18=$_POST['mai18'];
    $mai19=$_POST['mai19'];
    $mai20=$_POST['mai20'];
    $mai21=$_POST['mai21'];

      // echo "masuk";

    if($mai15=="" || $mai16=="" ||$mai17=="" || $mai18=="" || $mai19=="" || $mai20=="" || $mai21=="" )
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {
 
        mysqli_query($connect, "insert into tb_mai_page3 values('$idlog', '$namalog', '$mai15','$mai16', '$mai17', '$mai18', '$mai19', '$mai20', '$mai21', now())") or die (mysqli_error());
           
          
      
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
    <a href="1-MAI-4.php" class="pagination-next button">Lanjutkan kuesioner</a>
</div>
</div>
</div>


        <?php
        header('location:1-MAI-4.php');
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