<?php
include "koneksi.php";

$id_buku = $_GET['id_buku'];

$hasil = mysql_query("DELETE FROM buku WHERE id_buku = '$id_buku'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=page/data/data_buku";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>