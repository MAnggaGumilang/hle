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
                    $mhs= mysqli_query($connect, "SELECT * FROM tb_mai_page5 WHERE id_mhs='$_SESSION[idlog]'");
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
                                        <td><code>29</code></td>
                                        <td>
                                            Saya memanfaatkan kekuatan kecerdasan saya untuk menutupi kekurangan saya.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai29" value="4" id="mai290"><label for="mai290">Selalu</label>
                                            <input type="radio" name="mai29" value="3" id="mai291"><label for="mai290">Sering</label>
                                            <input type="radio" name="mai29" value="2" id="mai292"><label for="mai291">Kadang-kadang</label>
                                            <input type="radio" name="mai29" value="1" id="mai293"><label for="mai292">Jarang</label>
                                            <input type="radio" name="mai29" value="0" id="mai294"><label for="mai293">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>30</code></td>
                                        <td>
                                            Saya memusatkan perhatian terhadap arti dan manfaat dari informasi yang baru.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai30" value="4" id="mai300"><label for="mai300">Selalu</label>
                                            <input type="radio" name="mai30" value="3" id="mai301"><label for="mai301">Sering</label>
                                            <input type="radio" name="mai30" value="2" id="mai302"><label for="mai302">Kadang-kadang</label>
                                            <input type="radio" name="mai30" value="1" id="mai303"><label for="mai303">Jarang</label>
                                            <input type="radio" name="mai30" value="0" id="mai304"><label for="mai304">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>31</code></td>
                                        <td>
                                            Saya menemukan contoh-contoh sendiri sehingga informasi menjadi lebih bermakna atau jelas.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai31" value="4" id="mai310"><label for="mai310">Selalu</label>
                                            <input type="radio" name="mai31" value="3" id="mai311"><label for="mai311">Sering</label>
                                            <input type="radio" name="mai31" value="2" id="mai312"><label for="mai312">Kadang-kadang</label>
                                            <input type="radio" name="mai31" value="1" id="mai313"><label for="mai313">Jarang</label>
                                            <input type="radio" name="mai31" value="0" id="mai314"><label for="mai314">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>32</code></td>
                                        <td>
                                            Saya tergolong adil menilai diri sendiri tentang seberapa baiknya saya memahami sesuatu.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai32" value="4" id="mai320"><label for="mai320">Selalu</label>
                                            <input type="radio" name="mai32" value="3" id="mai321"><label for="mai321">Sering</label>
                                            <input type="radio" name="mai32" value="2" id="mai322"><label for="mai322">Kadang-kadang</label>
                                            <input type="radio" name="mai32" value="1" id="mai323"><label for="mai323">Jarang</label>
                                            <input type="radio" name="mai32" value="0" id="mai324"><label for="mai324">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>33</code></td>
                                        <td>
                                           Secara otomatis saya sadar menggunakan cara belajar yang berguna.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai33" value="4" id="mai330"><label for="mai330">Selalu</label>
                                            <input type="radio" name="mai33" value="3" id="mai331"><label for="mai331">Sering</label>
                                            <input type="radio" name="mai33" value="2" id="mai332"><label for="mai332">Kadang-kadang</label>
                                            <input type="radio" name="mai33" value="1" id="mai333"><label for="mai333">Jarang</label>
                                            <input type="radio" name="mai33" value="0" id="mai334"><label for="mai334">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>34</code></td>
                                        <td>
                                           Secara teratur saya istirahat sebentar untuk mengatur pemahaman saya.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai34" value="4" id="mai340"><label for="mai340">Selalu</label>
                                            <input type="radio" name="mai34" value="3" id="mai341"><label for="mai341">Sering</label>
                                            <input type="radio" name="mai34" value="2" id="mai342"><label for="mai342">Kadang-kadang</label>
                                            <input type="radio" name="mai34" value="1" id="mai343"><label for="mai343">Jarang</label>
                                            <input type="radio" name="mai34" value="0" id="mai344"><label for="mai344">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>35</code></td>
                                        <td>
                                            Saya menyadari/mengetahui bahwa setiap cara yang saya gunakan adalah yang paling efektif atau tepat.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai35" value="4" id="mai350"><label for="mai350">Selalu</label>
                                            <input type="radio" name="mai35" value="3" id="mai351"><label for="mai351">Sering</label>
                                            <input type="radio" name="mai35" value="2" id="mai352"><label for="mai352">Kadang-kadang</label>
                                            <input type="radio" name="mai35" value="1" id="mai353"><label for="mai353">Jarang</label>
                                            <input type="radio" name="mai35" value="0" id="mai354"><label for="mai354">Tidak Pernah</label>
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
                  <a href="1-MAI-6.php" class="pagination-next button">Lanjutkan kuesioner</a></div></div>
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
    $mai29=$_POST['mai29'];
    $mai30=$_POST['mai30'];
    $mai31=$_POST['mai31'];
    $mai32=$_POST['mai32'];
    $mai33=$_POST['mai33'];
    $mai34=$_POST['mai34'];
    $mai35=$_POST['mai35'];

      // echo "masuk";

    if($mai29=="" || $mai30=="" ||$mai31=="" || $mai32=="" || $mai33=="" || $mai34=="" || $mai35=="" )
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {
 
        mysqli_query($connect, "insert into tb_mai_page5 values('$idlog', '$namalog', '$mai29','$mai30', '$mai31', '$mai32', '$mai33', '$mai34', '$mai35', now())") or die (mysqli_error());
           
          
      
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
    <a href="1-MAI-6.php" class="pagination-next button">Lanjutkan kuesioner</a>
</div>
</div>
</div>


        <?php
        header('location:1-MAI-6.php');
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