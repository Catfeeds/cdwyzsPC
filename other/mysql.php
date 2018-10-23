<?php
header("Content-Type:text/html;charset=utf-8");
$mysqli = new mysqli('localhost','vzhuangdb','vzhuangdb','vzhuangdb');
if (mysqli_connect_errno()){
	die('Unable to connect!'). mysqli_connect_error();
}
mysql_query('set names utf8');

?>