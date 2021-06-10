<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form jendela buku</title>
  
  
  
      <link rel="stylesheet" href="csslogin/style.css">

  
</head>

<body>
<center>
<img src="images/hm.png"width="200" height="100">
</center>
  <body>
<div class="container">
	<section id="content">
		<form action="simpanregist.php" name="post" method="post" id="from-regist">
			<h1>Regist Admin</h1>
			<table id="example2" class="table table-bordered table-hover">
			<center>
     
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">USERNAME</td>
        <td>:</td>
        <td><input name="username" type="text" size="50" placeholder="Masukan username" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">PASSWORD</td>
        <td>:</td>
        <td><input name="password" type="Password" size="50" placeholder="Masukan password" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">NAMA</td>
        <td>:</td>
        <td><input name="Nama" type="text" size="50" placeholder="Masukan nama" required="required"/></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">AKSES</td>
        <td>:</td>
        <td><input name="status" type="text" size="100" placeholder="admin/user" required="required"/></td>
      </tr>
       <tr>
          <td style="padding-left:10px;">&nbsp;</td>
          <td>&nbsp;</td>
          <td style="font-size:9px; color:#FF0000;">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;padding-bottom:30px;"><input name="submit" type="submit" value="SIMPAN">
		<td colspan="3" style="padding-center:10px;padding-bottom:30px;"><input name="ulang" type="reset" value="ULANG">
		<td colspan="3" style="padding-right:10px;padding-bottom:30px;"><input name="batal" type="button" value="BATAL" onClick="javascript:history.back()">
      </tr>
    </table>
		</form><!-- form -->
		<div class="button">
			<a href="#">STMIK SUMEDANG</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script  src="jslogin/index.js"></script>

</body>
</html>
