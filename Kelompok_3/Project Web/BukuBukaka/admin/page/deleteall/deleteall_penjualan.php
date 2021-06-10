<?php
include "koneksi.php";

$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$ID_PENJUALAN=$_POST["check_list"] [$i];
$myquery = "DELETE FROM penjualan WHERE ID_PENJUALAN = '$ID_PENJUALAN' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=page/data/data_penjualan";</script><?php
}
?>