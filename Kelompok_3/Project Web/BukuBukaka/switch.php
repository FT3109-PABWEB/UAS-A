<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];	
	$file="$page.php";
	
	if (!file_exists($file)){
		include ("switchname.php");
	}else{
		include ("$page.php");
	}
	
}else{
	include ("switchname.php");
}

?>