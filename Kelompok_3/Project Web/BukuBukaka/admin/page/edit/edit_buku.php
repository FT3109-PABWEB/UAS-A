<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$id_buku=$_GET['id_buku'];
$qryanggota=mysql_query("select * from buku where id_buku='$id_buku'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT BUKU</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=page/update/update_buku" method="post">
  <div align="center">
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
 <tr bgcolor="#cccccc"> 
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA BUKU</strong></div></td>
        </tr>
      <tr>
        <td height="28">ID BUKU</td>
          <td>:</td> 
		  <td width="462"><input type="text" name="id_buku" required="required" size="40" value="<?php echo $tampilsiswa['id_buku'];?>" /></td>
        
        </tr>
      <tr>
        <td width="400" height="28">JUDUL BUKU</td>
          <td width="5">:</td>
          <td width="462"><input type="text" name="judul" required="required" size="40" value="<?php echo $tampilsiswa['judul'];?>" /></td>
        </tr>
      <tr>
        <td height="28">NOMOR BUKU</td>
          <td>:</td>
          <td><input type="text" name="noisbn"  size="40" required="required" value="<?php echo $tampilsiswa['noisbn'];?>" /></td>
        </tr>
      <tr>
        <td height="28">PENULIS</td>
          <td>:</td>
          <td><input type="text" name="penulis"  size="15" required="required" value="<?php echo $tampilsiswa['penulis'];?>" /></td>
        </tr>
		<tr>
        <td height="28">PENERBIT</td>
          <td>:</td>
          <td><input type="text" name="penerbit"  size="15" required="required" value="<?php echo $tampilsiswa['penerbit'];?>" /></td>
        </tr>
		<tr>
        <td height="28">TAHUN</td>
          <td>:</td>
          <td><input type="text" name="tahun"  size="15" required="required" value="<?php echo $tampilsiswa['tahun'];?>" /></td>
        </tr>
		<tr>
        <td height="28">STOK</td>
          <td>:</td>
          <td><input type="text" name="stok"  size="15" required="required" value="<?php echo $tampilsiswa['stok'];?>" /></td>
        </tr>
		<tr>
        <td height="28">HARGA POKOK</td>
          <td>:</td>
          <td><input type="text" name="harga_pokok"  size="15" required="required" value="<?php echo $tampilsiswa['harga_pokok'];?>" /></td>
        </tr>
		<tr>
        <td height="28">HARGA JUAL</td>
          <td>:</td>
          <td><input type="text" name="harga_jual"  size="15" required="required" value="<?php echo $tampilsiswa['harga_jual'];?>" /></td>
        </tr>
		<tr>
        <td height="28">PAJAK</td>
          <td>:</td>
          <td><input type="text" name="ppn"  size="15" required="required" value="<?php echo $tampilsiswa['ppn'];?>" /></td>
        </tr>
		<tr>
        <td height="28">DISKON</td>
          <td>:</td>
          <td><input type="text" name="diskon"  size="15" required="required" value="<?php echo $tampilsiswa['diskon'];?>" /></td>
        </tr>
       <tr>     
      <td height="25">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" value="UBAH" /> 
            <input type="button" onclick="javascript:history.back();" value="BATAL" /></td>
        </tr>
	</tr>
    </table>
  </div>
</div>
</div>
</form>
</div>
</body>
</html>
