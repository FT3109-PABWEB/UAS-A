<?php
error_reporting(0);
include "koneksi.php";
$id_pasok =$_POST['id_pasok'];
$distributor=$_POST['distributor'];
$TANGGAL_PASOK=$_POST['TANGGAL_PASOK'];

$id_distributor=mysql_query("SELECT id_distributor FROM distributor WHERE id_distributor='$distributor'");
$id_distributor=mysql_fetch_array($id_distributor);

error_reporting (E_ALL ^ E_NOTICE);
if (empty($id_pasok))

{	
	?><script language="javascript">alert("masukan id pasok!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select id_pasok  from pasok where id_pasok ='$id_pasok' ";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode pasok Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into pasok(id_pasok , id_distributor, TANGGAL_PASOK)values('$id_pasok', '$id_distributor[id_distributor]', '$TANGGAL_PASOK')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=page/data/data_pasok";</script><?php
	}
?>		