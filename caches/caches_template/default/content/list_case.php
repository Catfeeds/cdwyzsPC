<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
     <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/cn/anli/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">
	<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
	<script src="<?php echo JS_PATH;?>/jquery1.42.min.js" type="text/javascript"></script>
	<script src="<?php echo JS_PATH;?>/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
  </head>
  <body>
   <!--header start-->
  	<?php include template("content","header"); ?> 
	<!--header end-->
	<!--<div class="cl_item">
	   <div class="wrap">
	      <div class="fl">Case <span>装修案例</span></div>
		  <div class="curr fr">当前位置><?php echo catpos($catid);?></div>
	   </div>
	</div>-->
	<!--装修案例开始-->
	<div class="w1200" >
		<img src="<?php echo IMG_PATH;?>anli.jpg" width="100%" />
			<div class="sxtj_div zxlanli">
				<div class="sxtj_bm">
					<div class="sxtj_bm_l"><i>|</i><span>获取免费设计</span> 今日还剩<span>12</span>个免费名额</div>
					<div class="sxtj_bm_r">
						<form action="http://web.cdwyzs.cn/other/add.php" method="post">
						<input type="text" name="name" placeholder="姓名" >
						<input type="phone" name="tel" placeholder="手机号码" >
						<button><img src="<?php echo IMG_PATH;?>anniu.gif" width="100%" /></button>
						<input type="hidden" name="from" value="PC案例免费设计">
					</form>
					</div>
				</div>
				<div class="curr">当前位置><?php echo catpos($catid);?></div>
				 <div class="demo">
					<div class="sx">
						<span>风格</span>
							<?php $n=1;if(is_array(filters('alfg',$modelid,$alfg_rang))) foreach(filters('alfg',$modelid,$alfg_rang) AS $r) { ?>
						<a rel="<?php echo $r['value'];?>" class="sx_child" name="alfg" href="javascript:;"><?php echo $r['name'];?></a>
						<?php $n++;}unset($n); ?>
					</div>
					<div class="sx">
						<span>户型</span>
							<?php $n=1;if(is_array(filters('hx',$modelid,$hx_rang))) foreach(filters('hx',$modelid,$hx_rang) AS $r) { ?>
						<a rel="<?php echo $r['value'];?>" class="sx_child" name="hxfw" href="javascript:;"><?php echo $r['name'];?></a>
						<?php $n++;}unset($n); ?>
					</div>
					<div class="sx">
						<span>面积</span>
							<?php $n=1;if(is_array(filters('mjfw',$modelid,$mjfw_rang))) foreach(filters('mjfw',$modelid,$mjfw_rang) AS $r) { ?>
						<a rel="<?php echo $r['value'];?>" class="sx_child" name="mjfw" href="javascript:;"><?php echo $r['name'];?></a>
						<?php $n++;}unset($n); ?>
					</div>
				<!--<div class="zj">
					<span>删选结果：</span>
					<p class="qcqb">清除全部</p>
				</div>-->
				</div>
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
		<div class="a_list">
		   <ul>
		      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=361812583dbe734b21f6292efa05c8c6&action=lists&catid=%24catid&num=9&order=listorder+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
		    <li>
			    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/></a>
				<div class="s_ms">
				   <p><?php echo $r['title'];?></p>
				   <p><span class="fl">设计师：<?php echo $r['sjs'];?></span><span class="fr">面积：<?php echo $r['mj'];?>㎡ </span></p>
				</div>
			</li>
			<?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			 <div style="clear:both"></div>
			 <div class="page"><?php echo $pages;?></div>
		   </ul>
		</div>
	</div>
	<!--装修案例结束-->
	<!--底部开始-->
	<?php include template("content","footer"); ?> 
	<!--底部结束-->
  </body>
</html>