<?php
defined('IN_PHPCMS') or exit('No permission resources.');
/**
 * @abstract 		瀑布流列表
 * @copyright		LV
 * @license			http://www.phpcms.cn/
 * @lastmodify		2013-09-04
 */
$db = '';
$db = pc_base::load_model('content_model');
$catid = intval($_GET['catid']);$page=intval($_GET['page']);$alfg=intval($_GET['alfg']);
$db->table_name = 'weiyi_almx';if($alfg == 0){
	$data = $db->select('status=99 ORDER BY listorder DESC LIMIT '. $page*3 .',3');
}elseif($alfg == 1){
	$data = $db->select('status=99 and catid=12 ORDER BY listorder DESC LIMIT '. $page*3 .',3');
}elseif($alfg == 2){
	$data = $db->select('status=99 and catid=14 ORDER BY listorder DESC LIMIT '. $page*3 .',3');
}elseif($alfg == 3){	$data = $db->select('status=99 and catid=9 ORDER BY listorder DESC LIMIT '. $page*3 .',3');}elseif($alfg == 4){	$data = $db->select('status=99 and catid=11 ORDER BY listorder DESC LIMIT '. $page*3 .',3');}elseif($alfg == 5){	$data = $db->select('status=99 and catid=10 ORDER BY listorder DESC LIMIT '. $page*3 .',3');}elseif($alfg == 6){	$data = $db->select('status=99 and catid=40 ORDER BY listorder DESC LIMIT '. $page*3 .',3');}elseif($alfg == 7){	$data = $db->select('status=99 and catid=13 ORDER BY listorder DESC LIMIT '. $page*3 .',3');}elseif($alfg == 8){	$data = $db->select('status=99 and catid=38 ORDER BY listorder DESC LIMIT '. $page*3 .',3');}//switch ($alfg)
//{
//case 0:
//$data = $db->select('status=99 ORDER BY listorder DESC LIMIT '. $page*3 .',3');
//break;  
//case 1:
//$data = $db->select('status=99 and catid=12 ORDER BY listorder DESC LIMIT '. $page*3 .',3');
//break;
//}
//echo 'thumb!=""    LIMIT '.($page-1)*2 .' , ' . $page*2 .''  ;		
//$data = $db->select("status=99 order by id desc limit 10,20");
echo json_encode($data);
?>
