<?php
error_reporting(0);
include ("koneksi.php");
$query1=mysql_query("SELECT id_kasir from kasir");

$ambil = mysql_query("SELECT MAX(id_penjualan) AS id_penjualan FROM penjualan");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_penjualan'];
$nourut = (int)  substr($id, 4, 8);
$nourut++;
$char = "Penj.";
$id_penjualan = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Penjualan</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=page/simpan/simpan_penjualan" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
<br>

      <tr>
        <td height="50" colspan="3" style="color:#034564;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA PENJUALAN</div></td>
      </tr>
	   <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
	  
      <tr>
        <td width="131" style="padding-left:10px;">ID PENJUALAN</td>
        <td width="41" >:</td>
        <td width="328"><input name="id_penjualan" type="text" placeholder="Masukan Id Penjualan" required="required" value="<?php echo $id_penjualan ?>"/></td>
      </tr>
	  
      <tr>
        <td width="131"style="padding-left:10px;">ID KASIR</td>
        <td width="41">:</td>
        <td><select name ="id_kasir"><option>Pilih Satu</option>
        <?php while ($id_kasir=mysql_fetch_array($query1))
		{
			echo "<option>$id_kasir[id_kasir]</option>";
		}
		?>
		</select>
		</td>
	  
	  <tr>
        <td width="131"style="padding-left:10px;">TOTAL</td>
        <td width="41">:</td>
        <td width="328"><input name="total" type="text" size="50" placeholder="Masukan Total " required="required"/></td>
      </tr>
	  
      <tr>
        <td width="131" style="padding-left:10px;">TANGGAL PENJUALAN</td>
        <td width="41" >:</td>
        <td width="328"><input name="tanggal_penjualan" type="date" placeholder="Masukan Tanggal Penjualan" required="required" /></td>
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
