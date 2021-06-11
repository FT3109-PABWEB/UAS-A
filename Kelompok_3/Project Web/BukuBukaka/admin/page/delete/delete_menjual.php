<?php
include "koneksi.php";

$id_nilai = $_GET['id_nilai'];

$hasil = mysql_query("DELETE FROM menjual WHERE id_nilai = '$id_nilai'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=page/data/data_menjual";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>