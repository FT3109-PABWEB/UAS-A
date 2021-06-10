<?php
include ("koneksi.php");
?>
<?php
error_reporting (0);
$id_kasir=$_GET['id_kasir'];
$qrydata=mysql_query("select * from kasir where id_kasir='$id_kasir'");
$data=mysql_fetch_array($qrydata);
?>
<html>
<head>
<title> Detail kasir </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA KASIR";?></font></td>
		</tr>
		<tr>
			<td width="212">ID KASIR</td>
			<td width="5">:</td>
			<td width="406"><?php echo $data['id_kasir'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>NAMA KASIR</td>
			<td>:</td>
			<td><?php echo $data['nama_kasir'];?></td>
		</tr>
		<tr>
			<td valign="top">ALAMAT KASIR</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $data['alamat_kasir'];?></td>
		</tr>
		<tr>
			<td>TELEPON</td>
			<td>:</td>
			<td><?php echo $data['telepon_kasir'];?></td>
		</tr>
		<tr>
			<td>STATUS</td>
			<td>:</td>
			<td><?php echo $data['status'];?></td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td>:</td>
			<td><?php echo $data['username'];?></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><?php echo $data['password'];?></td>
		</tr>
		<tr>
			<td>AKSES</td>
			<td>:</td>
			<td><?php echo $data['akses'];?></td>
		</tr>
		     
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=page/edit/edit_kasir&id_kasir=<?php echo $data['id_kasir'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data dok">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>