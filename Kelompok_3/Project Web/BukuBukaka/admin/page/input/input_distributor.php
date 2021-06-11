<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$query1=mysql_query ("SELECT id_distributor from distributor");
$ambil = mysql_query("SELECT MAX(id_distributor) AS id_distributor FROM distributor");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_distributor'];
$nourut = (int) substr($id, 5, 8);
$nourut++;
$char ="Dis.";
$id_distributor = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>INPUT DISTRIBUTOR</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=page/simpan/simpan_distributor" method="post" name="tambah" enctype="multipart/form-data">
      <table id="example2" class="table table-bordered table-hover">
      <tr>
        <td height="50" colspan="3" style="color:#034564;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA DISTRIBUTOR</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="100" style="padding-left:10px;">ID DISTRIBUTOR</td>
        <td width="20" >:</td>
        <td width="328"><input name="id_distributor" type="text" placeholder="Masukan id distributor" required="required" value="<?php echo $id_distributor ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">NAMA DISTRIBUTOR</td>
        <td>:</td>
        <td><input name="nama_distributor" type="text" size="50" placeholder="Masukan nama distributor" required="required"/></td>
      </tr>
	    <tr>
        <td style="padding-left:10px;">ALAMAT DISTRIBUTOR</td>
        <td>:</td>
        <td><input name="alamat_distributor" type="text" size="50" placeholder="Masukan alamat distributor" required="required"/></td>
      </tr>
	  	<tr>
        <td style="padding-left:10px;">TELEPON</td>
        <td>:</td>
        <td><input name="telepon_distributor" type="text" size="50" placeholder="Masukan telepon distributor" required="required"/></td>
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
