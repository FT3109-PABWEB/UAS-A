
<?php
session_start();
mysql_connect("localhost","root","") or die ("Tidak ada koneksi");
include ("koneksi.php");
mysql_select_db("jendela_buku_inar");

$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];
error_reporting(0);
if($op=="in"){
$cek = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");
if(mysql_num_rows($cek)==1){
$c = mysql_fetch_array($cek);
$_SESSION['username'] = $c['username'];
$_SESSION['status'] = $c['status'];
if($c['status']=="admin"){
header("location:admin/menuadmin.php");
}else if($c['status']=="user"){
header("location:user/menuuser.php");
}else if($c['status']=="atasan"){
header("location:admin/index2.php");
}
}else{
die("password salah <a href=\"javascript:history.back()\">kembali>");
}
}else if($op=="out"){
unset($_SESSION['username']);
unset($_SESSION['jendela_buku_inar']);
header("location:admin/menuadmin.php");
}
?>