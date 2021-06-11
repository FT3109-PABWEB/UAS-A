<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$query1=mysql_query ("SELECT ID_kasir from kasir");
$ambil = mysql_query("SELECT MAX(id_kasir) AS id_kasir FROM kasir");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_kasir'];
$nourut = (int) substr($id, 5, 8);
$nourut++;
$char ="Kas.";
$id_kasir = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>INPUT KASIR</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=page/simpan/simpan_kasir" method="post" name="tambah" enctype="multipart/form-data">
      <table id="example2" class="table table-bordered table-hover">
      <tr>
        <td height="50" colspan="3" style="color:#034564;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA KASIR</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="100" style="padding-left:10px;">ID KASIR</td>
        <td width="20" >:</td>
        <td width="328"><input name="id_kasir" type="text" placeholder="Masukan id kasir" required="required" value="<?php echo $id_kasir ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">NAMA KASIR</td>
        <td>:</td>
        <td><input name="nama_kasir" type="text" size="50" placeholder="Masukan nama kasir" required="required"/></td>
      </tr>
	    <tr>
        <td style="padding-left:10px;">ALAMAT KASIR</td>
        <td>:</td>
        <td><input name="alamat_kasir" type="text" size="50" placeholder="Masukan alamat kasir" required="required"/></td>
      </tr>
	  	<tr>
        <td style="padding-left:10px;">NO TELEPON</td>
        <td>:</td>
        <td><input name="telepon_kasir" type="text" size="50" placeholder="Masukan no telepon kasir" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">STATUS</td>
        <td>:</td>
        <td><input name="status" type="text" size="50" placeholder="Masukan status kasir" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">USERNAME</td>
        <td>:</td>
        <td><input name="username" type="text" size="50" placeholder="Masukan username kasir" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">PASSWORD</td>
        <td>:</td>
        <td><input name="password" type="text" size="50" placeholder="Masukan password kasir" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">AKSES</td>
        <td>:</td>
        <td><input name="akses" type="text" size="50" placeholder="Masukan akses" required="required"/></td>
      </tr>
       <tr>
          <td style="padding-left:10px;">&nbsp;</td>
          <td>&nbsp;</td>
          <td style="font-size:9px; color:#FF0000;">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;padding-bottom:30px;"><input name="submit" type="submit" value="SIMPAN">
            <input name="fulang" type="reset" value="ULANG">
            <input name="batal" type="button" value="BATAL" onClick="javascript:history.back()"></td>
      </tr>
    </table>
</form>
</div>
</body>
</html>
