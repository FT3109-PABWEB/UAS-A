<?php
include ("koneksi.php");
?>
<?php
error_reporting (0);
$id_buku=$_GET['id_buku'];
$qrydata=mysql_query("select * from buku where id_buku='$id_buku'");
$data=mysql_fetch_array($qrydata);
?>
<html>
<head>
<title> Detail BUKU </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA BUKU";?></font></td>
		</tr>
		<tr>
			<td width="212">ID BUKU</td>
			<td width="5">:</td>
			<td width="406"><?php echo $data['id_buku'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>JUDUL BUKU</td>
			<td>:</td>
			<td><?php echo $data['judul'];?></td>
		</tr>
		<tr>
			<td valign="top">OMOR BELAKANG BUKU</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $data['noisbn'];?></td>
		</tr>
		<tr>
			<td>PENULIS BUKU</td>
			<td>:</td>
			<td><?php echo $data['penulis'];?></td>
		</tr>
		<tr>
			<td>PENERBIT</td>
			<td>:</td>
			<td><?php echo $data['penerbit'];?></td>
		</tr>
		<tr>
			<td>TAHUN TERBIT</td>
			<td>:</td>
			<td><?php echo $data['tahun'];?></td>
		</tr>
		<tr>
			<td>STOK BUKU</td>
			<td>:</td>
			<td><?php echo $data['stok'];?></td>
		</tr>
		<tr>
			<td>HARGA POKOK</td>
			<td>:</td>
			<td><?php echo $data['harga_pokok'];?></td>
		</tr>
		<tr>
			<td>HARGA JUAL</td>
			<td>:</td>
			<td><?php echo $data['harga_jual'];?></td>
		</tr>
		<tr>
			<td>PAJAK</td>
			<td>:</td>
			<td><?php echo $data['ppn'];?></td>
		</tr>
		<tr>
			<td>DISKON</td>
			<td>:</td>
			<td><?php echo $data['diskon'];?></td>
		</tr>
		     
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_buku&id_buku=<?php echo $data['id_buku'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data dok">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>