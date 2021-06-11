<?php
include "koneksi.php";
$id_distributor=$_POST['id_distributor'];
$nama_distributor=$_POST['nama_distributor'];
$alamat_distributor=$_POST['alamat_distributor'];
$telepon_distributor=$_POST['telepon_distributor'];

error_reporting (E_ALL ^ E_NOTICE);
if (empty($nama_distributor))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select id_distributor from distributor where id_distributor='$id_distributor'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode distributor Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into distributor(id_distributor, nama_distributor, alamat_distributor, telepon_distributor )values('$id_distributor','$nama_distributor','$alamat_distributor','$telepon_distributor')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=page/data/data_distributor";</script><?php
	}
?>		