<?php
session_start();
if(isset($_SESSION['idlog']) && isset($_SESSION['namalog']))
{
$idlog=$_SESSION['idlog'];
$namalog=$_SESSION['namalog'];
	unset($idlog);
	unset($namalog);
}
else if(isset($_SESSION['idadminlog']) && isset($_SESSION['adminname']))
{
$idlog=$_SESSION['idadminlog'];
$namalog=$_SESSION['adminname'];
	unset($idlog);
	unset($namalog);
}

session_destroy();

header('location:../../login/login_mhs.php');
?>