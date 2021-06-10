<?php
include "koneksi.php";

$id_kasir = $_GET['id_kasir'];

$hasil = mysql_query("DELETE FROM kasir WHERE id_kasir = '$id_kasir'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=page/data/data_kasir";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>