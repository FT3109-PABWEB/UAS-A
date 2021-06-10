<?php
error_reporting(0);
include "koneksi.php";
$query1=mysql_query("SELECT id_pasok from pasok");
$query2=mysql_query("SELECT id_buku from buku");

$ambil = mysql_query("SELECT MAX(id_pasok) AS id_pasok FROM memasok");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_pasok'];
$nourut = (int)  substr($id, 6, 8);
$nourut++;
$char = "Pasok.";
$id_kasir = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Memasok</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=page/simpan/simpan_memasok" method="post" name="tambah" enctype="multipart/form-data">
<table id="example2" class="table table-bordered table-hover">
      <tr>
        <td height="50" colspan="3" style="color:#034564;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA MEMASOK</div></td>
      </tr>
	 <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
	  
      <tr>
        <td width="131" style="padding-left:10px;">ID PASOK</td>
        <td width="41" >:</td>
		<td><select name ="id_pasok"><option>Pilih Satu</option>
        <?php while ($id_pasok=mysql_fetch_array($query1))
		{
			echo "<option>$id_pasok[id_pasok]</option>";
		}
		?>
		</select>
		</td>
	  
      <tr>
        <td width="131"style="padding-left:10px;">ID BUKU</td>
        <td width="41">:</td>
        <td><select name ="id_buku"><option>Pilih Satu</option>
		<?php while ($id_buku=mysql_fetch_array($query2))
		{
			echo "<option>$id_buku[id_buku]</option>";
		}
		?>
		</select>
		</td>
	  
      <tr>
        <td width="131" style="padding-left:10px;">JUMLAH PASOK</td>
        <td width="41" >:</td>
        <td width="328"><input name="jumlah_pasok" type="text" placeholder="Masukan Jumlah pasok" required="required" /></td>
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
