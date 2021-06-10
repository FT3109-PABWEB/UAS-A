<?php
include "koneksi.php";

$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$id_kasir=$_POST["check_list"] [$i];
$myquery = "DELETE FROM kasir WHERE id_kasir = '$id_kasir' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=page/data/data_kasir";</script><?php
}
?>