<?php
include "koneksi.php";
$id_distributor=$_POST['id_distributor'];
$nama_distributor=$_POST['nama_distributor'];
$alamat_distributor=$_POST['alamat_distributor'];
$telepon_distributor=$_POST['telepon_distributor'];

if (empty($nama_distributor))
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
			mysql_query("UPDATE distributor WHERE id_distributor='$id_distributor' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_distributor";</script><?php }
	}
	$masukan=mysql_query("UPDATE distributor SET id_distributor='$id_distributor',nama_distributor='$nama_distributor', alamat_distributor='$alamat_distributor',  telepon_distributor='$telepon_distributor' WHERE id_distributor='$id_distributor'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=page/data/data_distributor";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>