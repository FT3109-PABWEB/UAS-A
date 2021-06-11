<?php
error_reporting (0);
include "koneksi.php";

$id_pasok=$_POST['id_pasok'];
$id_buku=$_POST['id_buku'];
$jumlah_pasok=$_POST['jumlah_pasok'];

$id_pasok=mysql_query("SELECT id_pasok FROM pasok WHERE id_pasok='$id_pasok'");
$id_pasok=mysql_fetch_array($id_pasok);

$id_buku=mysql_query("SELECT id_buku FROM buku WHERE id_buku='$id_buku'");
$id_buku=mysql_fetch_array($id_buku);

error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($jumlah_pasok))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select id_pasok from memasok where id_pasok='$id_pasok'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Id Pasok Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into memasok(id_pasok, id_buku, jumlah_pasok)values('$id_pasok[id_pasok]', '$id_buku[id_buku]', '$jumlah_pasok')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=page/data/data_memasok";</script><?php
	}
?>		