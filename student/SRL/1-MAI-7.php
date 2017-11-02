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
          $mhs= mysqli_query($connect, "SELECT * FROM tb_mai_page7 WHERE id_mhs='$_SESSION[idlog]'");
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
                                        <td><code>43</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri apakah hal yang sedang dibaca berhubungan dengan apa yang telah saya ketahui.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI43" value="4" id="MAI430"><label for="MAI430">Selalu</label>
                                            <input type="radio" name="MAI43" value="3" id="MAI431"><label for="MAI430">Sering</label>
                                            <input type="radio" name="MAI43" value="2" id="MAI432"><label for="MAI431">Kadang-kadang</label>
                                            <input type="radio" name="MAI43" value="1" id="MAI433"><label for="MAI432">Jarang</label>
                                            <input type="radio" name="MAI43" value="0" id="MAI434"><label for="MAI433">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>44</code></td>
                                        <td>
                                            Saya memikirkan kembali anggapan saya ketika saya bingung.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI44" value="4" id="MAI440"><label for="MAI440">Selalu</label>
                                            <input type="radio" name="MAI44" value="3" id="MAI441"><label for="MAI441">Sering</label>
                                            <input type="radio" name="MAI44" value="2" id="MAI442"><label for="MAI442">Kadang-kadang</label>
                                            <input type="radio" name="MAI44" value="1" id="MAI443"><label for="MAI443">Jarang</label>
                                            <input type="radio" name="MAI44" value="0" id="MAI444"><label for="MAI444">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>45</code></td>
                                        <td>
                                            Saya mengatur waktu saya untuk mencapai tujuan sebaik-baiknya.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI45" value="4" id="MAI450"><label for="MAI450">Selalu</label>
                                            <input type="radio" name="MAI45" value="3" id="MAI451"><label for="MAI451">Sering</label>
                                            <input type="radio" name="MAI45" value="2" id="MAI452"><label for="MAI452">Kadang-kadang</label>
                                            <input type="radio" name="MAI45" value="1" id="MAI453"><label for="MAI453">Jarang</label>
                                            <input type="radio" name="MAI45" value="0" id="MAI454"><label for="MAI454">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>46</code></td>
                                        <td>
                                            Saya lebih banyak belajar jika saya tertarik/senang dengan topik.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI46" value="4" id="MAI460"><label for="MAI460">Selalu</label>
                                            <input type="radio" name="MAI46" value="3" id="MAI461"><label for="MAI461">Sering</label>
                                            <input type="radio" name="MAI46" value="2" id="MAI462"><label for="MAI462">Kadang-kadang</label>
                                            <input type="radio" name="MAI46" value="1" id="MAI463"><label for="MAI463">Jarang</label>
                                            <input type="radio" name="MAI46" value="0" id="MAI464"><label for="MAI464">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>47</code></td>
                                        <td>
                                           Saya berupaya membagi kegiatan belajar saya menjadi langkah-langkah yang lebih kecil.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI47" value="4" id="MAI470"><label for="MAI470">Selalu</label>
                                            <input type="radio" name="MAI47" value="3" id="MAI471"><label for="MAI471">Sering</label>
                                            <input type="radio" name="MAI47" value="2" id="MAI472"><label for="MAI472">Kadang-kadang</label>
                                            <input type="radio" name="MAI47" value="1" id="MAI473"><label for="MAI473">Jarang</label>
                                            <input type="radio" name="MAI47" value="0" id="MAI474"><label for="MAI474">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>48</code></td>
                                        <td>
                                          Saya lebih memperhatikan makna umum dari pada makna khusus.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI48" value="4" id="MAI480"><label for="MAI480">Selalu</label>
                                            <input type="radio" name="MAI48" value="3" id="MAI481"><label for="MAI481">Sering</label>
                                            <input type="radio" name="MAI48" value="2" id="MAI482"><label for="MAI482">Kadang-kadang</label>
                                            <input type="radio" name="MAI48" value="1" id="MAI483"><label for="MAI483">Jarang</label>
                                            <input type="radio" name="MAI48" value="0" id="MAI484"><label for="MAI484">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>49</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri tentang seberapa baik saya bekerja, pada waktu mempelajari sesuatu hal yang baru.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI49" value="4" id="MAI490"><label for="MAI490">Selalu</label>
                                            <input type="radio" name="MAI49" value="3" id="MAI491"><label for="MAI491">Sering</label>
                                            <input type="radio" name="MAI49" value="2" id="MAI492"><label for="MAI492">Kadang-kadang</label>
                                            <input type="radio" name="MAI49" value="1" id="MAI493"><label for="MAI493">Jarang</label>
                                            <input type="radio" name="MAI49" value="0" id="MAI494"><label for="MAI494">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>50</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri apakah saya belajar sebanyak yang saya mampu, setiap kali saya menyelesaikan tugas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI50" value="4" id="MAI500"><label for="MAI500">Selalu</label>
                                            <input type="radio" name="MAI50" value="3" id="MAI501"><label for="MAI501">Sering</label>
                                            <input type="radio" name="MAI50" value="2" id="MAI502"><label for="MAI502">Kadang-kadang</label>
                                            <input type="radio" name="MAI50" value="1" id="MAI503"><label for="MAI503">Jarang</label>
                                            <input type="radio" name="MAI50" value="0" id="MAI504"><label for="MAI504">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>51</code></td>
                                        <td>
                                            Saya melupakan informasi baru yang tidak jelas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI51" value="4" id="MAI510"><label for="MAI510">Selalu</label>
                                            <input type="radio" name="MAI51" value="3" id="MAI511"><label for="MAI511">Sering</label>
                                            <input type="radio" name="MAI51" value="2" id="MAI512"><label for="MAI512">Kadang-kadang</label>
                                            <input type="radio" name="MAI51" value="1" id="MAI513"><label for="MAI513">Jarang</label>
                                            <input type="radio" name="MAI51" value="0" id="MAI514"><label for="MAI514">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>52</code></td>
                                        <td>
                                            Saya berhenti dan selanjutnya membaca kembali jika saya bingung.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI52" value="4" id="MAI520"><label for="MAI520">Selalu</label>
                                            <input type="radio" name="MAI52" value="3" id="MAI521"><label for="MAI521">Sering</label>
                                            <input type="radio" name="MAI52" value="2" id="MAI522"><label for="MAI522">Kadang-kadang</label>
                                            <input type="radio" name="MAI52" value="1" id="MAI523"><label for="MAI523">Jarang</label>
                                            <input type="radio" name="MAI52" value="0" id="MAI524"><label for="MAI524">Tidak Pernah</label>
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
                  <a href="1-MAI-preview.php" class="pagination-next button">Lanjutkan kuesioner</a></div></div>
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
    $MAI43=$_POST['MAI43'];
    $MAI44=$_POST['MAI44'];
    $MAI45=$_POST['MAI45'];
    $MAI46=$_POST['MAI46'];
    $MAI47=$_POST['MAI47'];
    $MAI48=$_POST['MAI48'];
    $MAI49=$_POST['MAI49'];
    $MAI50=$_POST['MAI50'];
    $MAI51=$_POST['MAI51'];
    $MAI52=$_POST['MAI52'];


      // echo "masuk";

    if($MAI43=="" || $MAI44=="" ||$MAI45=="" || $MAI46=="" || $MAI47=="" || $MAI48=="" || $MAI49=="" || $MAI50=="" || $MAI51=="" || $MAI52=="" )
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {
 
        mysqli_query($connect, "insert into tb_mai_page7 values('$idlog', '$namalog', '$MAI43','$MAI44', '$MAI45', '$MAI46', '$MAI47', '$MAI48', '$MAI49', '$MAI50', '$MAI51', '$MAI52', now())") or die (mysqli_error());
           
          
      
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
    <a href="1-MAI-preview.php" class="pagination-next button">Lanjutkan kuesioner</a>
</div>
</div>
</div>


        <?php
        header('location:1-MAI-preview.php');
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