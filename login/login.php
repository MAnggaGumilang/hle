<?php
session_start();
include ('connect.php');
$nama=$_POST['username'];
$password=$_POST['password'];
//$password=md5($_POST['password']);

$result=mysql_query("select * from tb_mahasiswa where username='$nama' and password='$password'");

while ($row=mysql_fetch_array($result)){
	$id=$row['id'];
}

$cek_login=mysql_num_rows($result);
if (empty($cek_login))
{
	?>
	<script language="javascript">alert("Password atau Username Anda salah!!");</script>
	<script> document.location.href='index.php'; </script>
	<?
}
else
{
	session_register('id');
	session_register('nama');
	?>
	<script> document.location.href='../student/dashboard.php'; </script>
	<?
}

?>