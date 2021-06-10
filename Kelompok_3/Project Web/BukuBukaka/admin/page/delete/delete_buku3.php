<?php
  error_reporting(0);
  require "config/koneksi.php";
  require "config/lib.php";
$Token	= $_GET['Token'];
if(isset($Token)){
	// Skrip menghapus data dari tabel database
	 
	$myQry = $mysqli->query("DELETE FROM buku WHERE id_buku='$Token'");
	
	echo "<script>alert('Data Baru berhasil Dihapus');location.href='?page=page/data/data_buku3'</script>";
	echo "<meta http-equiv='refresh' content='0;'>";
}
else {
	echo "Data yang dihapus tidak ada";
}
?>