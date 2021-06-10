<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$query1=mysql_query ("SELECT id_buku from buku");
$ambil = mysql_query("SELECT MAX(id_buku) AS id_buku FROM buku");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_buku'];
$nourut = (int) substr($id, 5, 8);
$nourut++;
$char ="Buk.";
$id_buku = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>INPUT BUKU</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=page/simpan/simpan_buku" method="post" name="tambah" enctype="multipart/form-data">
      <table id="example2" class="table table-bordered table-hover">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA BUKU</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="100" style="padding-left:10px;">ID BUKU</td>
        <td width="20" >:</td>
        <td width="328"><input name="id_buku" type="text" placeholder="Masukan id buku" required="required" value="<?php echo $id_buku ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">JUDUL BUKU</td>
        <td>:</td>
        <td><input name="judul" type="text" size="50" placeholder="Masukan Nama buku" required="required"/></td>
      </tr>
	    <tr>
        <td style="padding-left:10px;">NOMOR BUKU</td>
        <td>:</td>
        <td><input name="noisbn" type="text" size="50" placeholder="Masukan nomr buku" required="required"/></td>
      </tr>
	  	<tr>
        <td style="padding-left:10px;">PENULIS</td>
        <td>:</td>
        <td><input name="penulis" type="text" size="50" placeholder="Masukan penulis buku" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">PENERBIT</td>
        <td>:</td>
        <td><input name="penerbit" type="text" size="50" placeholder="Masukan penerbit buku" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">TAHUN</td>
        <td>:</td>
        <td><input name="tahun" type="date" size="50" placeholder="Masukan tahun terbit buku" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">STOK</td>
        <td>:</td>
        <td><input name="stok" type="text" size="50" placeholder="Masukan stok buku" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">HARGA POKOK</td>
        <td>:</td>
        <td><input name="harga_pokok" type="text" size="50" placeholder="Masukan harga pokok buku" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">HARGA JUAL</td>
        <td>:</td>
        <td><input name="harga_jual" type="text" size="50" placeholder="Masukan harga jual buku" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">PAJAK</td>
        <td>:</td>
        <td><input name="ppn" type="text" size="50" placeholder="Masukan pajak buku" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">DISKON</td>
        <td>:</td>
        <td><input name="diskon" type="text" size="50" placeholder="Masukan diskon buku" required="required"/></td>
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
