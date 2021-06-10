<?php
include "koneksi.php";

$id_pasok = $_GET['id_pasok'];

$hasil = mysql_query("DELETE FROM pasok WHERE id_pasok = '$id_pasok'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=page/data/data_pasok";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>