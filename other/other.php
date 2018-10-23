<?php
//开启Session存储
session_start();

//获取点击数据
if(isset($_POST['pc'])){
	$name=$_POST['pc'];
	$_SESSION['pc']=$name;
}

//判断SESSION变量
if($_SESSION['pc']=='123'){
	echo 'close';
	//unset($_SESSION['pc']);//销毁变量
	}else{	
	echo 'open';
}
?>