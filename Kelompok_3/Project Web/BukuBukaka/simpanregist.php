<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$Nama=$_POST['Nama'];
$status=$_POST['status'];

error_reporting (E_ALL ^ E_NOTICE);
if (empty($password))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select username from login where username='$username'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode buku Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
if (!empty($_FILES["photo"]["tmp_name"]))
				{
			$namafolder="photo/";  //tempat menyimpan file
    $jenis_gambar=$_FILES['photo']['type'];
    if($jenis_gambar=="image/jpeg"  || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif"  || $jenis_gambar=="image/png")
    {          
  $photo  = $namafolder . basename($_FILES['photo']['name']);      
  if  (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo))
  { die("Gambar gagal dikirim"); }
    } else  { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
			}
		mysql_query("insert into login(username, password, Nama, status )values('$username','$password','$Nama','$status')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="login.php";</script><?php
	}
?>		