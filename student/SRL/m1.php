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
                                        <td><code>1</code></td>
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
                                            <input type="radio" name="MAI1" value="4" id="MAI10"><label for="MAI10">Selalu</label>
                                            <input type="radio" name="MAI1" value="3" id="MAI11"><label for="MAI10">Sering</label>
                                            <input type="radio" name="MAI1" value="2" id="MAI12"><label for="MAI11">Kadang-kadang</label>
                                            <input type="radio" name="MAI1" value="1" id="MAI13"><label for="MAI12">Jarang</label>
                                            <input type="radio" name="MAI1" value="0" id="MAI14"><label for="MAI13">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>2</code></td>
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
                                            <input type="radio" name="MAI2" value="4" id="MAI20"><label for="MAI20">Selalu</label>
                                            <input type="radio" name="MAI2" value="3" id="MAI21"><label for="MAI21">Sering</label>
                                            <input type="radio" name="MAI2" value="2" id="MAI22"><label for="MAI22">Kadang-kadang</label>
                                            <input type="radio" name="MAI2" value="1" id="MAI23"><label for="MAI23">Jarang</label>
                                            <input type="radio" name="MAI2" value="0" id="MAI24"><label for="MAI24">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>3</code></td>
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
                                            <input type="radio" name="MAI3" value="4" id="MAI30"><label for="MAI30">Selalu</label>
                                            <input type="radio" name="MAI3" value="3" id="MAI31"><label for="MAI31">Sering</label>
                                            <input type="radio" name="MAI3" value="2" id="MAI32"><label for="MAI32">Kadang-kadang</label>
                                            <input type="radio" name="MAI3" value="1" id="MAI33"><label for="MAI33">Jarang</label>
                                            <input type="radio" name="MAI3" value="0" id="MAI34"><label for="MAI34">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>4</code></td>
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
                                            <input type="radio" name="MAI4" value="4" id="MAI40"><label for="MAI40">Selalu</label>
                                            <input type="radio" name="MAI4" value="3" id="MAI41"><label for="MAI41">Sering</label>
                                            <input type="radio" name="MAI4" value="2" id="MAI42"><label for="MAI42">Kadang-kadang</label>
                                            <input type="radio" name="MAI4" value="1" id="MAI43"><label for="MAI43">Jarang</label>
                                            <input type="radio" name="MAI4" value="0" id="MAI44"><label for="MAI44">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>5</code></td>
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
                                            <input type="radio" name="MAI5" value="4" id="MAI50"><label for="MAI50">Selalu</label>
                                            <input type="radio" name="MAI5" value="3" id="MAI51"><label for="MAI51">Sering</label>
                                            <input type="radio" name="MAI5" value="2" id="MAI52"><label for="MAI52">Kadang-kadang</label>
                                            <input type="radio" name="MAI5" value="1" id="MAI53"><label for="MAI53">Jarang</label>
                                            <input type="radio" name="MAI5" value="0" id="MAI54"><label for="MAI54">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>6</code></td>
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
                                            <input type="radio" name="MAI6" value="4" id="MAI60"><label for="MAI60">Selalu</label>
                                            <input type="radio" name="MAI6" value="3" id="MAI61"><label for="MAI61">Sering</label>
                                            <input type="radio" name="MAI6" value="2" id="MAI62"><label for="MAI62">Kadang-kadang</label>
                                            <input type="radio" name="MAI6" value="1" id="MAI63"><label for="MAI63">Jarang</label>
                                            <input type="radio" name="MAI6" value="0" id="MAI64"><label for="MAI64">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>7</code></td>
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
                                            <input type="radio" name="MAI7" value="4" id="MAI70"><label for="MAI70">Selalu</label>
                                            <input type="radio" name="MAI7" value="3" id="MAI71"><label for="MAI71">Sering</label>
                                            <input type="radio" name="MAI7" value="2" id="MAI72"><label for="MAI72">Kadang-kadang</label>
                                            <input type="radio" name="MAI7" value="1" id="MAI73"><label for="MAI73">Jarang</label>
                                            <input type="radio" name="MAI7" value="0" id="MAI74"><label for="MAI74">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                </tbody>
                            </table>
                      <button type="submit" name="submit" class="button expanded success">Input</button> 

                            
                            </form>
                           
              
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
    $MAI1=$_POST['MAI1'];
    $MAI2=$_POST['MAI2'];
    $MAI3=$_POST['MAI3'];
    $MAI4=$_POST['MAI4'];
    $MAI5=$_POST['MAI5'];
    $MAI6=$_POST['MAI6'];
    $MAI7=$_POST['MAI7'];

      // echo "masuk";

    //if($MAI1=="" || $MAI2=="" ||$MAI3=="" || $MAI4=="" || $MAI5=="" || $MAI6=="" || $MAI7=="" )
    //{
      //  echo "<script type='text/javascript'>alert('Silahkan isi semua data dengan LENGKAP');</script>";
    //}
    //else
    //{
 
        mysqli_query($connect, "insert into tb_mai_page1 values('$idlog', '$namalog', '$MAI1','$MAI2', '$MAI3', '$MAI4', '$MAI5', '$MAI6', '$MAI7', now())") or die (mysqli_error());
        header("location:1-MAI-2.php");
       
        

           
          //if($query){
            //header('Location: 1-MAI-2.php');
          //}
      
      //echo "<script type='text/javascript'>alert('Penambahan Data Sukses');</script>";
      //header('location:1-MAI-2.php');
   // }
  }
  //E:Eksekusi Submit
?>

</body>

</html>
<?php } 
else
{
header('location:../../login/login_mhs.php');
}
?>