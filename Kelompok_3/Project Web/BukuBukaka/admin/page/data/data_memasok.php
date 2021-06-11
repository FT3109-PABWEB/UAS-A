<?php
error_reporting(0);
// database ke table
$data=mysql_query("select * from memasok order by id_pasok");
$jumlah=mysql_num_rows($data);
?>
<?php
include ("koneksi.php");
$query = "select * from memasok";
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
<title>Data memasok</title>
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
  <center><h2><font size="10" align="center" style="color:#006cd9;"><strong>DATA MEMASOK</strong></font></h2></center>
  <h1><p align="center" style="color:#006cd9;"><strong>Buku Bukaka</strong></p></h1>
  <div style="padding-top:20px;"><form name="cari" method="post" action="?page=data_memasok" id="form1"><table width="100%">
  <tr>
    <td width="32%"><input type="text" name="search" id="search" value="Cari Kode memasok" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;"/>
    <input type="submit" name="submit" value="CARI"/></td>
    <td width="40%"><a href="?page=page/data/data_memasok" title="refresh">[Refresh]</a>&nbsp;&nbsp;<a href="?page=page/input/input_memasok">[+Tambah]</a>&nbsp;&nbsp;<a href="page/simpanxls/simpanmemasokxls.php">[Save to.excel]</a></td>
    <td width="9%">&nbsp;</td>
  </tr>
</table>
</form>
</div>
</div>
<form method="post" action="?page=page/deleteall/deleteall_memasok"> 
<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Data memasok</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
 <tr bgcolor="#cccccc"> 
      <center>
	  <td width="4%" height="42">&nbsp;</td>
        <td width="40"align="center">No</td>
		<td width="80" align="justipy"><div align="justify"><center>ID PASOK</div></td>
        <td width="140"align="center" bgcolor="#cccccc"><div align="justify"><center>ID BUKU</div></td>
        <td width="160" align="center" bgcolor="#cccccc"><div align="justify"><center>JUMLAH PASOK</div></td>
        <td colspan="2" align="center"><strong>AKSI</strong></td>
      </center> </tr> </div>
	  <?php
	  if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
{
	$search = $_POST['search'];
	$sql1 = mysql_query("SELECT * FROM memasok WHERE id_pasok LIKE '%$search%'") or die(mysql_error());
	}
		
	else{
	$sql1 = mysql_query("SELECT * FROM memasok  order by id_pasok asc LIMIT $nomor,$row");
	}
	
	{
	$no=0;
	$total = mysql_num_rows($sql1);
	   while ($data = mysql_fetch_array($sql1)){
	  $nomor++;
		
		 ?>
<tr>
<td height="27" align="center"><input type="checkbox" name="check_list[]" value="<?php echo $data['id_pasok'];?>"/></td>
<td align="center"><?php echo $nomor; ?></td>
<td align="center"> <?php echo $data['id_pasok'];?></td>
<td align="center"><?php echo $data['id_buku'];?></a></td>
   <td align="center"><?php echo $data['jumlah_pasok'];?></td>
      <td width="50" align="center"><a href="?page=page/edit/edit_memasok&id_pasok=<?php echo $data ['id_pasok']; ?>"><img src="img/edit.gif" width="18" height="15" style="border:0px;">UBAH</a></div></td>
        <td width="50" align="center"><a href="?page=page/delete/delete_memasok&id_pasok=<?php echo $data ['id_pasok'];?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA MEMASOK INI...?')"> <img src="img/delete.gif" width="15" height="15" style="border:0px;">HAPUS</a></td>
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
       <td width="79%"><font size="3" align="left"> Jumlah data: <?php echo $total; ?> </a></td>
       <td width="21%">Halaman: 
           <?php for ($h = 1; $h <= $max; $h++) 
 { $list[$h] = $row * $h - $row; echo "<a href='?page=memasok&hal=$list[$h]'>$h</a> ";
}?>
      </a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</body>
</html>