<?php
include "koneksi.php";
$id_kasir=$_POST['id_kasir'];
$nama_kasir=$_POST['nama_kasir'];
$alamat_kasir=$_POST['alamat_kasir'];
$telepon_kasir=$_POST['telepon_kasir'];
$status=$_POST['status'];
$username=$_POST['username'];
$password=$_POST['password'];
$akses=$_POST['akses'];
$harga_jual=$_POST['harga_jual'];
$ppn=$_POST['ppn'];
$diskon=$_POST['diskon'];

error_reporting (E_ALL ^ E_NOTICE);
if (empty($nama_kasir))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select id_kasir from kasir where id_kasir='$id_kasir'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode kasir Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into kasir(id_kasir, nama_kasir, alamat_kasir, telepon_kasir, status, username, password, akses )values('$id_kasir','$nama_kasir','$alamat_kasir','$telepon_kasir','$status','$username','$password','$akses')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=page/data/data_kasir";</script><?php
	}
?>		