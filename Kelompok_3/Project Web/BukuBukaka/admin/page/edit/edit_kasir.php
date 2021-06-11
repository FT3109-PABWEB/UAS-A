<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$id_kasir=$_GET['id_kasir'];
$qryanggota=mysql_query("select * from kasir where id_kasir='$id_kasir'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT kasir</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=page/update/update_kasir" method="post">
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
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA KASIR</strong></div></td>
        </tr>
      <tr>
        <td height="28">ID KASIR</td>
          <td>:</td>
          <td><input type="text" name="id_kasir" required="required" size="40" value="<?php echo $tampilsiswa['id_kasir'];?>" /></td>
        </tr>
      <tr>
        <td width="400" height="28">NAMA KASIR</td>
          <td width="5">:</td>
          <td width="462"><input type="text" name="nama_kasir" required="required" size="40" value="<?php echo $tampilsiswa['nama_kasir'];?>" /></td>
        </tr>
      <tr>
        <td height="28">ALAMAT KASIR</td>
          <td>:</td>
          <td><input type="text" name="alamat_kasir"  size="40" required="required" value="<?php echo $tampilsiswa['alamat_kasir'];?>" /></td>
        </tr>
      <tr>
        <td height="28">NO TELEPON</td>
          <td>:</td>
          <td><input type="text" name="telepon_kasir"  size="15" required="required" value="<?php echo $tampilsiswa['telepon_kasir'];?>" /></td>
        </tr>
		<tr>
        <td height="28">STATUS</td>
          <td>:</td>
          <td><input type="text" name="status"  size="15" required="required" value="<?php echo $tampilsiswa['status'];?>" /></td>
        </tr>
		<tr>
        <td height="28">USERNAME</td>
          <td>:</td>
          <td><input type="text" name="username"  size="15" required="required" value="<?php echo $tampilsiswa['username'];?>" /></td>
        </tr>
		<tr>
        <td height="28">PASSWORD</td>
          <td>:</td>
          <td><input type="text" name="password"  size="15" required="required" value="<?php echo $tampilsiswa['password'];?>" /></td>
        </tr>
		<tr>
        <td height="28">AKSES</td>
          <td>:</td>
          <td><input type="text" name="akses"  size="15" required="required" value="<?php echo $tampilsiswa['akses'];?>" /></td>
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
