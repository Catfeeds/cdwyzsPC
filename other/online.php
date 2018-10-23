<?php
header("Content-Type:text/html;charset=utf-8"); 
include('mysql.php');
$name=htmlspecialchars($_POST['name']);
$tel=htmlspecialchars($_POST['tel']);

if(isset($name)){
$time=time();
$date=date("y-m-d",$time) ;
$sql = "INSERT INTO weiyi_online(name,tel,time) VALUES ('".$name."','".$tel."','".$date."')";
$ok=mysql_query($sql);
if($ok){
echo $name;
echo $tel;
	echo '申请成功，感谢支持!';
}

}else{
	echo '请输入正确内容';
}


?>