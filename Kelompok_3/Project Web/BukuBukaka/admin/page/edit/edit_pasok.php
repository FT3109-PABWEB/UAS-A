<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$query1=mysql_query ("SELECT id_distributor from distributor");
$id_pasok=$_GET['id_pasok'];
$qryanggota=mysql_query("select * from pasok where id_pasok='$id_pasok'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT pasok</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=page/update/update_pasok" method="post">
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
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA PASOK</strong></div></td>
        </tr>
      <tr>
        <td height="28">ID PASOK</td>
          <td>:</td>
          <td><?php echo $tampilsiswa['id_pasok'];?></td>
        </tr>
		<tr>
        <td style="padding-left:1px;">ID DISTRIBUTOR</td>
        <td>:</td>
        <td><select name="distributor">
		<?php while ($distributor=mysql_fetch_array($query1)){
				echo "<option>$distributor[id_distributor]</option>";
		}?>
		</select>
		</td>
		  </tr>
      <tr>
        <td height="28">TANGGAL PASOK</td>
          <td>:</td>
          <td><input type="date" name="TANGGAL_PASOK"  size="40" required="required" value="<?php echo $tampilsiswa['TANGGAL_PASOK'];?>" /></td>
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
