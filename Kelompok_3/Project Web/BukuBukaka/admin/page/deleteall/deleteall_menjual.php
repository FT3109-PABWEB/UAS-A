<?php
include "koneksi.php";

$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$id_penjualan=$_POST["check_list"] [$i];
$myquery = "DELETE FROM menjual WHERE id_penjualan = '$id_penjualan' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=page/data/data_menjual";</script><?php
}
?>