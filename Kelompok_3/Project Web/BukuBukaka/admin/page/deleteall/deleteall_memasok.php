<?php
include "koneksi.php";

$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$ID_PASOK=$_POST["check_list"] [$i];
$myquery = "DELETE FROM memasok WHERE ID_PASOK = '$ID_PASOK' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=page/data/data_memasok";</script><?php
}
?>