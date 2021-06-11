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

if (empty($nama_kasir))
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
			mysql_query("UPDATE kasir WHERE id_kasir='$id_kasir' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_kasir";</script><?php }
	}
	$masukan=mysql_query("UPDATE kasir SET id_kasir='$id_kasir',nama_kasir='$nama_kasir', alamat_kasir='$alamat_kasir',  telepon_kasir='$telepon_kasir',  status='$status',  username='$username',  password='$password',  akses='$akses' WHERE id_kasir='$id_kasir'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=page/data/data_kasir";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>