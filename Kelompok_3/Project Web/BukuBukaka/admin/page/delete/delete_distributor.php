<?php
include "koneksi.php";

$id_distributor = $_GET['id_distributor'];

$hasil = mysql_query("DELETE FROM distributor WHERE id_distributor = '$id_distributor'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=page/data/data_distributor";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>