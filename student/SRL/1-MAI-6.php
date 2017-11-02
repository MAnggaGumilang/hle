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
                    $mhs= mysqli_query($connect, "SELECT * FROM tb_mai_page6 WHERE id_mhs='$_SESSION[idlog]'");
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
                                        <td><code>36</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri tentang seberapa baik saya mencapai tujuan setelah menyelesaikan tugas.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="page36" value="4" id="page360"><label for="page360">Selalu</label>
                                            <input type="radio" name="page36" value="3" id="page361"><label for="page360">Sering</label>
                                            <input type="radio" name="page36" value="2" id="page362"><label for="page361">Kadang-kadang</label>
                                            <input type="radio" name="page36" value="1" id="page363"><label for="page362">Jarang</label>
                                            <input type="radio" name="page36" value="0" id="page364"><label for="page363">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>37</code></td>
                                        <td>
                                            Saya membuat gambar atau bagan untuk menolong saya selama saya belajar.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="page37" value="4" id="page370"><label for="page370">Selalu</label>
                                            <input type="radio" name="page37" value="3" id="page371"><label for="page371">Sering</label>
                                            <input type="radio" name="page37" value="2" id="page372"><label for="page372">Kadang-kadang</label>
                                            <input type="radio" name="page37" value="1" id="page373"><label for="page373">Jarang</label>
                                            <input type="radio" name="page37" value="0" id="page374"><label for="page374">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>38</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri apakah saya telah mempertimbangkan semua pilihan, setiap kali saya memecahkan suatu masalah.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="page38" value="4" id="page380"><label for="page380">Selalu</label>
                                            <input type="radio" name="page38" value="3" id="page381"><label for="page381">Sering</label>
                                            <input type="radio" name="page38" value="2" id="page382"><label for="page382">Kadang-kadang</label>
                                            <input type="radio" name="page38" value="1" id="page383"><label for="page383">Jarang</label>
                                            <input type="radio" name="page38" value="0" id="page384"><label for="page384">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>39</code></td>
                                        <td>
                                            Saya berupaya memahami informasi baru dengan kata-kata saya sendiri.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="page39" value="4" id="page390"><label for="page390">Selalu</label>
                                            <input type="radio" name="page39" value="3" id="page391"><label for="page391">Sering</label>
                                            <input type="radio" name="page39" value="2" id="page392"><label for="page392">Kadang-kadang</label>
                                            <input type="radio" name="page39" value="1" id="page393"><label for="page393">Jarang</label>
                                            <input type="radio" name="page39" value="0" id="page394"><label for="page394">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>40</code></td>
                                        <td>
                                           Saya mengubah cara jika saya gagal memahami.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="page40" value="4" id="page400"><label for="page400">Selalu</label>
                                            <input type="radio" name="page40" value="3" id="page401"><label for="page401">Sering</label>
                                            <input type="radio" name="page40" value="2" id="page402"><label for="page402">Kadang-kadang</label>
                                            <input type="radio" name="page40" value="1" id="page403"><label for="page403">Jarang</label>
                                            <input type="radio" name="page40" value="0" id="page404"><label for="page404">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>41</code></td>
                                        <td>
                                           Saya menggunakan urutan topik/materi dari buku/teks untuk membantu saya belajar.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="page41" value="4" id="page410"><label for="page410">Selalu</label>
                                            <input type="radio" name="page41" value="3" id="page411"><label for="page411">Sering</label>
                                            <input type="radio" name="page41" value="2" id="page412"><label for="page412">Kadang-kadang</label>
                                            <input type="radio" name="page41" value="1" id="page413"><label for="page413">Jarang</label>
                                            <input type="radio" name="page41" value="0" id="page414"><label for="page414">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>42</code></td>
                                        <td>
                                            Saya membaca petunjuk secara teliti sebelum memulai melakukan suatu tugas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td> 
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="page42" value="4" id="page420"><label for="page420">Selalu</label>
                                            <input type="radio" name="page42" value="3" id="page421"><label for="page421">Sering</label>
                                            <input type="radio" name="page42" value="2" id="page422"><label for="page422">Kadang-kadang</label>
                                            <input type="radio" name="page42" value="1" id="page423"><label for="page423">Jarang</label>
                                            <input type="radio" name="page42" value="0" id="page424"><label for="page424">Tidak Pernah</label>
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
                  <a href="1-MAI-7.php" class="pagination-next button">Lanjutkan kuesioner</a></div></div>
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
    $page36=$_POST['page36'];
    $page37=$_POST['page37'];
    $page38=$_POST['page38'];
    $page39=$_POST['page39'];
    $page40=$_POST['page40'];
    $page41=$_POST['page41'];
    $page42=$_POST['page42'];

      // echo "masuk";

    if($page36=="" || $page37=="" ||$page38=="" || $page39=="" || $page40=="" || $page41=="" || $page42=="" )
    {
        echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    }
    else
    {
 
        mysqli_query($connect, "insert into tb_mai_page6 values('$idlog', '$namalog', '$page36','$page37', '$page38', '$page39', '$page40', '$page41', '$page42', now())") or die (mysqli_error());
           
          
      
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
    <a href="1-MAI-7.php" class="pagination-next button">Lanjutkan kuesioner</a>
</div>
</div>
</div>


        <?php
        header('location:1-MAI-7.php');
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