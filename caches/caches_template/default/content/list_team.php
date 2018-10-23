<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/cn/team/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">
	<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
<script src="<?php echo JS_PATH;?>/jquery1.42.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>

    <script src="<?php echo JS_PATH;?>/shanxuan.js" type="text/javascript"></script>
  </head>
  <body>
    <!--header start-->
	<?php include template("content","header"); ?> 
	<!--header end-->

	<!--设计团队开始-->
	<div class="w1200 pad" >
	<b>当前位置：<a href="http://www.cdwyzs.cn/">首页</a> > <?php echo catpos($catid);?><b/>
	   <div class="sxtj_div">
	       <!-- <div class="demo">
				<div class="sx">
					<span>按职称：</span>
						<?php $n=1;if(is_array(filters('zc',$modelid,$zc_rang))) foreach(filters('zc',$modelid,$zc_rang) AS $r) { ?>
					<a rel="<?php echo $r['value'];?>" class="sx_child" name="zc" href="javascript:;"><?php echo $r['name'];?></a>
					<?php $n++;}unset($n); ?>
				</div>
				<div class="sx">
					<span>按部门：</span>
					<?php $n=1;if(is_array(filters('bm',$modelid,$bm_rang))) foreach(filters('bm',$modelid,$bm_rang) AS $r) { ?>
					<a rel="<?php echo $r['value'];?>" class="sx_child" name="bm" href="javascript:;"><?php echo $r['name'];?></a>
					<?php $n++;}unset($n); ?>
				</div>
				<div class="zj">
					<span>删选结果：</span>
					<p class="qcqb">清除全部</p>
				</div>
		</div>-->
		<script type="text/javascript" src="<?php echo JS_PATH;?>/shanxuan.js"></script>
		<script type="text/javascript">
		$('.sx').sx({
			nuv:".zj",//筛选结果
			zi:"sx_child",//所有筛选范围内的子类
			qingchu:'.qcqb',//清除全部
			over:'on'//选中状态样式名称
		});
		</script>
						
		</div>
		<div class="s_list">
		    <ul>
		    <?php $sql = structure_filters_sql($modelid)?>
          <?php $urlrule = makeurlrule()?>

		    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=802cc4f1be16565e6f7ade5f0816616c&action=lists&catid=7&num=9&order=listorder+DESC&page=%24page&moreinfo=1&where=%24sql&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'7','order'=>'listorder DESC','moreinfo'=>'1','where'=>$sql,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'7','order'=>'listorder DESC','moreinfo'=>'1','where'=>$sql,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
		     <li>
			    <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/></a>
				<div class="s_ms"><span class="info"><a href="<?php echo $r['url'];?>" class="name"><?php echo $r['title'];?></a>&nbsp;<?php echo box('zc',$r[zc],12);?>&nbsp;&nbsp;<a href=""><?php echo $r['cysj'];?>年</a></span><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" target="_blank" id="swt4"><span class="yuyue">预约</span></a></div>
			 </li>
			 <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			 <div style="clear:both"></div>
			 <div class="page"><?php echo $pages;?></div>
		   </ul>
		</div>
		<div class="s_right">
		   <div class="s_sjzx">  
		       <div class="s_title">设计之星</div>
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=91c2f26bd9a0620c0c42aa49dcd0965d&action=position&catid=7&posid=1&num=1&order=listorder+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('catid'=>'7','posid'=>'1','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
			   <div class="s_img">
		         <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>"/></a>
		       </div>
			    <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		   </div>
		   <div class="s_rmzx" style="margin-bottom:10px">  
		       <div class="s_title">热门装修</div>
			   <ul>
			       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b08f025f7a1e2ef307ea7140aa64fdc&action=lists&catid=18&num=4&order=id+DESC&page=%24page&moreinfo=1&where=%24sql&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'18','order'=>'id DESC','moreinfo'=>'1','where'=>$sql,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'18','order'=>'id DESC','moreinfo'=>'1','where'=>$sql,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
			      <li>
				    <div class="s_case_t"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></div>
					
				  </li>
			 <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			   </ul>

		   </div>
		   <a id="RightHd" href="http://www.cdwyzs.cn/zn/hd/"><img src="http://www.cdwyzs.cn/statics/images/other/alhdt.jpg" width="100%" height="690"></a>
		</div>
		 <div style="clear:both"></div>
	</div>
	<!--设计团队结束-->
    <!--footer start-->
	<?php include template("content","footer"); ?> 
    <!--footer end-->
	<script>
		$(document).ready(function(){
			var len = $(".s_list ul li").length;
			if( len<7){
				$("#RightHd").css("display","none");
			}
		})
	</script>
  </body>
</html>