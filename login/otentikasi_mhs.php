<?php
include('../connect.php');
 
//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
//untuk mencegah sql injection
//kita gunakan mysqli_real_escape_string
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
//if (empty($username) && empty($password)) {
    //kalau username dan password kosong
    //header('location:login_mhs.php?error=1');
   // break;
//} else if (empty($username)) {
    //kalau username saja yang kosong
  //  header('location:login_mhs.php?error=2');
   // break;
//} else if (empty($password)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
  //  header('location:login_mhs.php?error=3');
    //break;
//}
 
$login = mysqli_query($connect, "SELECT * FROM tb_mahasiswa WHERE username = '$username' AND password='$password'");
$row=mysqli_fetch_array($login);

if ($row['username'] == $username AND $row['password'] == $password)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['idlog']=$row['id_mhs'];
  $_SESSION['namalog']=$row['nama_lengkap'];
  echo  $_SESSION['idlog']."-".$_SESSION['namalog'];
  header('location:../student/dashboard.php');
}

else
{
  
echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='../login/login_mhs.php'></a></center>";
}
?>