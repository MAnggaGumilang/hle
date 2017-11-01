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
                    $mhs= mysqli_query($connect, "SELECT * FROM tb_mai_page4 WHERE id_mhs='$_SESSION[idlog]'");
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
                                        <td><code>22</code></td>
                                        <td>
                                            Sebelum memulai sesuatu, saya bertanya kepada diri sendiri tentang hal-hal terkait.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai22" value="4" id="mai220"><label for="mai220">Selalu</label>
                                            <input type="radio" name="mai22" value="3" id="mai221"><label for="mai220">Sering</label>
                                            <input type="radio" name="mai22" value="2" id="mai222"><label for="mai221">Kadang-kadang</label>
                                            <input type="radio" name="mai22" value="1" id="mai223"><label for="mai222">Jarang</label>
                                            <input type="radio" name="mai22" value="0" id="mai224"><label for="mai223">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>23</code></td>
                                        <td>
                                            Saya mempertimbangkan berbagai cara untuk memecahkan sesuatu masalah sebelum akhirnya memutuskan salah satu diantaranya.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai23" value="4" id="mai230"><label for="mai230">Selalu</label>
                                            <input type="radio" name="mai23" value="3" id="mai231"><label for="mai231">Sering</label>
                                            <input type="radio" name="mai23" value="2" id="mai232"><label for="mai232">Kadang-kadang</label>
                                            <input type="radio" name="mai23" value="1" id="mai233"><label for="mai233">Jarang</label>
                                            <input type="radio" name="mai23" value="0" id="mai234"><label for="mai234">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>24</code></td>
                                        <td>
                                            Setiap kali selesai belajar, saya membuat rangkuman.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai24" value="4" id="mai240"><label for="mai240">Selalu</label>
                                            <input type="radio" name="mai24" value="3" id="mai241"><label for="mai241">Sering</label>
                                            <input type="radio" name="mai24" value="2" id="mai242"><label for="mai242">Kadang-kadang</label>
                                            <input type="radio" name="mai24" value="1" id="mai243"><label for="mai243">Jarang</label>
                                            <input type="radio" name="mai24" value="0" id="mai244"><label for="mai244">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>25</code></td>
                                        <td>
                                            Saya menanyakan orang lain bilamana saya tidak memahami sesuatu.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai25" value="4" id="mai250"><label for="mai250">Selalu</label>
                                            <input type="radio" name="mai25" value="3" id="mai251"><label for="mai251">Sering</label>
                                            <input type="radio" name="mai25" value="2" id="mai252"><label for="mai252">Kadang-kadang</label>
                                            <input type="radio" name="mai25" value="1" id="mai253"><label for="mai253">Jarang</label>
                                            <input type="radio" name="mai25" value="0" id="mai254"><label for="mai254">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>26</code></td>
                                        <td>
                                           Saya dapat memotivasi diri untuk belajar bilamana diperlukan.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai26" value="4" id="mai260"><label for="mai260">Selalu</label>
                                            <input type="radio" name="mai26" value="3" id="mai261"><label for="mai261">Sering</label>
                                            <input type="radio" name="mai26" value="2" id="mai262"><label for="mai262">Kadang-kadang</label>
                                            <input type="radio" name="mai26" value="1" id="mai263"><label for="mai263">Jarang</label>
                                            <input type="radio" name="mai26" value="0" id="mai264"><label for="mai264">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>27</code></td>
                                        <td>
                                           Saya menyadari cara apa yang digunakan ketika saya belajar.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai27" value="4" id="mai270"><label for="mai270">Selalu</label>
                                            <input type="radio" name="mai27" value="3" id="mai271"><label for="mai271">Sering</label>
                                            <input type="radio" name="mai27" value="2" id="mai272"><label for="mai272">Kadang-kadang</label>
                                            <input type="radio" name="mai27" value="1" id="mai273"><label for="mai273">Jarang</label>
                                            <input type="radio" name="mai27" value="0" id="mai274"><label for="mai274">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>28</code></td>
                                        <td>
                                            Saya biasa memikirkan manfaat cara-cara belajar yang saya pakai.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai28" value="4" id="mai280"><label for="mai280">Selalu</label>
                                            <input type="radio" name="mai28" value="3" id="mai281"><label for="mai281">Sering</label>
                                            <input type="radio" name="mai28" value="2" id="mai282"><label for="mai282">Kadang-kadang</label>
                                            <input type="radio" name="mai28" value="1" id="mai283"><label for="mai283">Jarang</label>
                                            <input type="radio" name="mai28" value="0" id="mai284"><label for="mai284">Tidak Pernah</label>
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
                  <a href="1-MAI-5.php" class="pagination-next button">Lanjutkan kuesioner</a></div></div>
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
    $mai22=$_POST['mai22'];
    $mai23=$_POST['mai23'];
    $mai24=$_POST['mai24'];
    $mai25=$_POST['mai25'];
    $mai26=$_POST['mai26'];
    $mai27=$_POST['mai27'];
    $mai28=$_POST['mai28'];

      // echo "masuk";

    if($mai22=="" || $mai23=="" ||$mai24=="" || $mai25=="" || $mai26=="" || $mai27=="" || $mai28=="" )
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {
 
        mysqli_query($connect, "insert into tb_mai_page4 values('$idlog', '$namalog', '$mai22','$mai23', '$mai24', '$mai25', '$mai26', '$mai27', '$mai28', now())") or die (mysqli_error());
           
          
      
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
    <a href="1-MAI-5.php" class="pagination-next button">Lanjutkan kuesioner</a>
</div>
</div>
</div>


        <?php
        header('location:1-MAI-5.php');
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