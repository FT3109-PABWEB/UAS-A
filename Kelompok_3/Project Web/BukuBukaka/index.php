<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
if (!empty ($_SESSION ['admin'])) {
	header ('location :admin/menuadmin.php');
}
if (!empty ($_SESSION ['user'])) {
	header ('location :menuuser.php');
}
?><?php 
header('location:menuuser.php?');
?>
