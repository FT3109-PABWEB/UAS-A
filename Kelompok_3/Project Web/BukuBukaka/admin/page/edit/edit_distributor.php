<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$id_distributor=$_GET['id_distributor'];
$qryanggota=mysql_query("select * from distributor where id_distributor='$id_distributor'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT distributor</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=page/update/update_distributor" method="post">
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
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA DISTRIBUTOR</strong></div></td>
        </tr>
      <tr>
        <td height="28">ID DISTRIBUTOR</td>
          <td>:</td>
          <td><input type="text" name="id_distributor" required="required" size="40" value="<?php echo $tampilsiswa['id_distributor'];?>" /></td>
        </tr>
      <tr>
        <td width="400" height="28">NAMA DISTRIBUTOR</td>
          <td width="5">:</td>
          <td width="462"><input type="text" name="nama_distributor" required="required" size="40" value="<?php echo $tampilsiswa['nama_distributor'];?>" /></td>
        </tr>
      <tr>
        <td height="28">ALAMAT DISTRIBUTOR</td>
          <td>:</td>
          <td><input type="text" name="alamat_distributor"  size="40" required="required" value="<?php echo $tampilsiswa['alamat_distributor'];?>" /></td>
        </tr>
      <tr>
        <td height="28">NO TELEPON</td>
          <td>:</td>
          <td><input type="text" name="telepon_distributor"  size="15" required="required" value="<?php echo $tampilsiswa['telepon_distributor'];?>" /></td>
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
