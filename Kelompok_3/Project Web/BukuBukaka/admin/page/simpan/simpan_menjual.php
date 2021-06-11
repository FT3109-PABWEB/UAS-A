<?php
error_reporting(0);
include ("koneksi.php");
$id_nilai =$_POST['id_nilai'];
$id_buku=$_POST['id_buku'];
$jumlah=$_POST['jumlah'];
$laba=$_POST['laba'];

$id_nilai=mysql_query("SELECT id_nilai FROM tb_nilai WHERE id_nilai='$id_nilai'");
$id_nilai=mysql_fetch_array($id_nilai);

$id_buku=mysql_query("SELECT id_buku FROM buku WHERE id_buku='$id_buku'");
$id_buku=mysql_fetch_array($id_buku);

error_reporting (E_ALL ^ E_NOTICE);
if (empty($id_nilai))

{	
	?><script language="javascript">alert("masukan id buku!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select id_nilai  from menjual where id_nilai ='$id_nilai' ";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode menjual Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into menjual (id_nilai , id_buku, jumlah, laba)values('$id_nilai[id_nilai]', '$id_buku[id_buku]', '$jumlah', '$laba')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=page/data/data_menjual";</script><?php
	}
?>		