<?php
include "koneksi.php";

$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$id_distributor=$_POST["check_list"] [$i];
$myquery = "DELETE FROM distributor WHERE id_distributor = '$id_distributor' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=page/data/data_distributor";</script><?php
}
?>