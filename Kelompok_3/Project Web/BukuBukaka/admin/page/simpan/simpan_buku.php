<?php
include "koneksi.php";
$id_buku=$_POST['id_buku'];
$judul=$_POST['judul'];
$noisbn=$_POST['noisbn'];
$penulis=$_POST['penulis'];
$penerbit=$_POST['penerbit'];
$tahun=$_POST['tahun'];
$stok=$_POST['stok'];
$harga_pokok=$_POST['harga_pokok'];
$harga_jual=$_POST['harga_jual'];
$ppn=$_POST['ppn'];
$diskon=$_POST['diskon'];

error_reporting (E_ALL ^ E_NOTICE);
if (empty($judul))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select id_buku from buku where id_buku='$id_buku'";
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
		mysql_query("insert into buku(id_buku, judul, noisbn, penulis, penerbit, tahun, stok, harga_pokok, harga_jual, ppn, diskon )values('$id_buku','$judul','$noisbn','$penulis','$penerbit','$tahun','$stok','$harga_pokok','$harga_jual','$ppn','$diskon')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=page/data/data_buku";</script><?php
	}
?>		