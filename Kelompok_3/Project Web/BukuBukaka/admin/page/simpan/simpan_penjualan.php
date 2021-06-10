<?php
error_reporting (0);
include "koneksi.php";

$id_penjualan=$_POST['id_penjualan'];
$id_kasir=$_POST['id_kasir'];
$total=$_POST['total'];
$tanggal_penjualan=$_POST['tanggal_penjualan'];

$id_kasir=mysql_query("SELECT id_kasir FROM kasir WHERE id_kasir='$id_kasir'");
$id_kasir=mysql_fetch_array($id_kasir);

error_reporting (E_ALL ^ E_NOTICE);
if (empty($id_kasir))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select id_penjualan from penjualan where id_penjualan='$id_penjualan'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Id Penjualan Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into penjualan(id_penjualan, id_kasir, total, tanggal_penjualan)values('$id_penjualan', '$id_kasir[id_kasir]', '$total', '$tanggal_penjualan')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=page/data/data_penjualan";</script><?php
	}
?>		