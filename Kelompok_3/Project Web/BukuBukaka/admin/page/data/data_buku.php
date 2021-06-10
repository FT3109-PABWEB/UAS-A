<?php
error_reporting(0);
// database ke table
$data=mysql_query("select * from buku order by id_buku");
$jumlah=mysql_num_rows($data);
?>
<?php
include ("koneksi.php");
$query = "select * from buku";
$sql1 = mysql_query($query);
$total = mysql_num_rows($sql1);
$nomor = 0;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$nomor = 0;
$row = 20;
$max= ceil($total/$row);
?>
<?PHP 
$tanggal= date("d-m-y");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/styleku.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buku</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="layout/styles/3_column.css" type="text/css" />
<link rel="shortcut icon" href="images/logo-smd.ico">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<script language="javascript">
function check_all()
{
	var chk = document.getElementsByName('check_list[]');
	for (i = 0; i < chk.length; i++)
	chk[i].checked = true ;
}

function uncheck_all()
{
	var chk = document.getElementsByName('check_list[]');
	for (i = 0; i < chk.length; i++)
	chk[i].checked = false ;
}
</script>
<body id="top" >
 <div>
  <center><h2><font size="10" align="center" style="color:#006cd9;"><strong>DATA BUKU</strong></font></h2></center>
  <h1><p align="center" style="color:#006cd9;"><strong>Toko Buku Bukaka</strong></p></h1>
  <div style="padding-top:20px;"><form name="cari" method="post" action="?page=data_buku" id="form1"><table width="100%">
  <tr>
    <td width="32%"><input type="text" name="search" id="search" value="Cari Kode buku" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;"/>
    <input type="submit" name="submit" value="CARI"/></td>
    <td width="40%"><a href="?page=page/data/data_buku" title="refresh">[Refresh]</a>&nbsp;&nbsp;<a href="?page=page/input/input_buku">[+Tambah]</a>&nbsp;&nbsp;<a href="page/simpanxls/simpanbukuxls.php">[Save to.excel]</a></td>
    <td width="9%">&nbsp;</td>
  </tr>
</table>
</form>
</div>
</div>
<form method="post" action="?page=page/deleteall/deleteall_buku"> 
<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Data Buku</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
 <tr bgcolor="#cccccc"> 
      <center>
	  <td width="4%" height="42">&nbsp;</td>
		 <td width="40"align="center">No</td>
		<td width="80" align="justipy"><div align="justify"><center>ID BUKU</div></td>
        <td width="140"align="center" bgcolor="#cccccc"><div align="justify"><center>JUDUL</div></td>
        <td width="160" align="center" bgcolor="#cccccc"><div align="justify"><center>PENULIS</div></td>
        <td width="180" align="center" bgcolor="#cccccc"><div align="left">
          <div align="justify"><center>PENERBIT</div></td>
		 <td width="180" align="center" bgcolor="#cccccc"><div align="justify"><center>STOK</div></td>
        <td colspan="2" align="center"><strong>AKSI</strong></td>
      </center> </tr> </div>
	  <?php
	  if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
    {
	$search = $_POST['search'];
	$sql1 = mysql_query("SELECT * FROM buku WHERE id_buku LIKE '%$search%'") or die(mysql_error());
	}
		
	else{
	$sql1 = mysql_query("SELECT * FROM buku  order by id_buku asc LIMIT $nomor,$row");
	}
	
	{
	$no=0;
	$total = mysql_num_rows($sql1);
	   while ($data = mysql_fetch_array($sql1)){
	  $nomor++;	
     ?>
<tr>
<td height="27" align="center"><input type="checkbox" name="check_list[]" value="<?php echo $data['id_buku'];?>"/></td>
<td align="center"><?php echo $nomor;?></td>
<td align="center"> <?php echo $data['id_buku'];?></td>
<td align="center"><a href="?page=page/detail/detail_buku&id_buku=<?php echo $data['id_buku'];?>"><?php echo $data['judul']?></a></td>
   <td align="center"><?php echo $data['penulis'];?></td>
   <td align="center"><?php echo $data['penerbit'];?></td>
   <td align="center"><?php echo $data['stok'];?></td>
      <td width="50" align="center"><a href="?page=page/edit/edit_buku&id_buku=<?php echo $data ['id_buku']; ?>"><img src="img/edit.gif" width="18" height="15" style="border:0px;">UBAH</a></div></td>
        <td width="50" align="center"><a href="?page=page/delete/delete_buku&id_buku=<?php echo $data ['id_buku'];?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA BUKU INI...?')"> <img src="img/delete.gif" width="15" height="15" style="border:0px;">HAPUS</a></td>
  </tr>
  	<?php 
  }
	}  
	?>
  <table width="100%" cellpadding="3" cellspacing="1">
  <tr>
      <td width="3%" style="padding-bottom:30px;"><img src="img/1.png" width="50" height="20"></td>
      <td style="padding-bottom:30px;"><a href="#" onClick="check_all()">Chek all</a>&nbsp;&nbsp; <a href="#" onClick="uncheck_all()">Unchek all</a>
        <input type="submit" name="hapus" value="HAPUS" onClick="return confirm('Hapus yang ditandai?')"/>
        &nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
	   </table>
</table>
</div>
</div>
</div>

<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
     <tr>
       <td width="79%"><font size="3" align="left"> Jumlah data: <?php echo $total; ?></td>
       <td width="21%">Halaman: 
           <?php for ($h = 1; $h <= $max; $h++) 
 { $list[$h] = $row * $h - $row; echo "<a href='?page=buku&hal=$list[$h]'>$h</a> ";}
?>
  </td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</body>
</html>