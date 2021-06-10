<?php
include "koneksi.php";

$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$id_pasok=$_POST["check_list"] [$i];
$myquery = "DELETE FROM pasok WHERE id_pasok = '$id_pasok' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=page/data/data_pasok";</script><?php
}
?>