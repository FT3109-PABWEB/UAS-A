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

if (empty($judul))
{	?><script language="javascript">alert("Data belum Lengkap!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	if (!empty($_FILES["photo"]["tmp_name"]))
	{
		$namafolder="../anggota/photo/";
		$jenis_gambar=$_FILES['photo']['type'];
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png" || $jenis_gambar=="image/bmp")
		{           
			$photo = $namafolder . basename($_FILES['photo']['name']);       
			if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo)) 
			{
			   die("Gambar gagal dikirim");
			}
			//Hapus photo yang lama jika ada
			$res = mysql_query();
			$d=mysql_fetch_object($res);
			if (strlen($d->photo)>3)
			{
				if (file_exists($d->photo)) unlink($d->photo);
			}					
			mysql_query("UPDATE buku WHERE id_buku='$id_buku' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_distributor";</script><?php }
	}
	$masukan=mysql_query("UPDATE buku SET id_buku='$id_buku',judul='$judul', noisbn='$noisbn',  penulis='$penulis', tahun='$tahun', stok='$stok',harga_pokok='$harga_pokok', harga_jual='$harga_jual', ppn='$ppn', diskon='$diskon'  WHERE id_buku='$id_buku'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=page/data/data_buku";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>