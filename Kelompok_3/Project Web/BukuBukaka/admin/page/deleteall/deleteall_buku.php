<?php
include "koneksi.php";

$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$id_buku=$_POST["check_list"] [$i];
$myquery = "DELETE FROM buku WHERE id_buku = '$id_buku' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=page/data/data_buku2";</script><?php
}
?>