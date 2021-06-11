<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$query1=mysql_query ("SELECT id_distributor from distributor");
$ambil = mysql_query("SELECT MAX(id_pasok ) AS id_pasok FROM pasok");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_pasok'];
$nourut = (int) substr($id, 4, 8);
$nourut++;
$char ="Pas.";
$id_pasok  = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>INPUT PASOK</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=page/simpan/simpan_pasok" method="post" name="tambah" enctype="multipart/form-data">
      <table id="example2" class="table table-bordered table-hover">
      <tr>
        <td height="50" colspan="3" style="color:#034564;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA PASOK</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
	  <tr>
        <td width="100" style="padding-left:10px;">ID PASOK</td>
        <td width="20" >:</td>
        <td width="328"><input name="id_pasok" type="text" placeholder="Masukan id pasok" required="required" value="<?php echo $id_pasok?>"/></td>
      </tr>
     <tr>
        <td style="padding-left:10px;">ID DISTRIBUTOR</td>
        <td>:</td>
        <td><select name="distributor">
		<option>Pilih Satu</option>
		<?php while ($distributor=mysql_fetch_array($query1)){
				echo "<option>$distributor[id_distributor]</option>";
		}?>
		</select>
		</td>
	 </tr>
      <tr>
        <td style="padding-left:10px;">TANGGAL PASOK</td>
        <td>:</td>
        <td><input name="TANGGAL_PASOK" type="date" size="50" placeholder="Masukan jumlah pasok" required="required"/></td>
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
