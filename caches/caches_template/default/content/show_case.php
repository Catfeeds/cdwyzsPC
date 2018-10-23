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
    <script src="<?php echo JS_PATH;?>/script.js" type="text/javascript"></script>
 </head>
  <body>
    <!--header start-->
	<?php include template("content","header"); ?> 
	<!--header end-->

	<!--设计团队开始-->
	<div class="w1200 pad" >
       <b>当前位置：<a href="http://www.cdwyzs.cn/">首页</a> ><a href="http://www.cdwyzs.cn/index.php?m=content&c=index&a=lists&catid=8">装修案例</a> ><?php echo $CATEGORYS[$catid]['catname'];?>><?php echo $lpmc;?></a></b><br/>
	   <br/>
		<div class="a_xq_l fl">
			    <div class="cshow_bb">
				    <div class="bd">
						<ul class="big_img_ul">
							<?php $n=1;if(is_array($nr)) foreach($nr AS $k) { ?>
							<li><img src="<?php echo thumb($k[url],893,554, 0);?>"/></li>     
							<?php $n++;}unset($n); ?>
						</ul>	
					</div>
					<div class="hd">
					   <div class="prev1"></div>
					   <div class="hd_ul">
					      <div class="hd_ulb">
						    <ul class="clearFix zm">
							      <?php $n=1;if(is_array($nr)) foreach($nr AS $k) { ?>
								   <li><img src="<?php echo thumb($k[url]);?>" width="90" height="77"/></li>
								  <?php $n++;}unset($n); ?>
							</ul>
						  </div>
						  <div class="hd_bt">
						     <div class="prev3 prevStop"></div>
							 <div class="next3"></div>
						  </div>
					   </div>
					   <div class="next1"></div>
					</div>
		        </div>
				<script type="text/javascript">
				
					jQuery(".cshow_bb").slide({mainCell:".bd ul",effect:"left",prevCell:".prev1",nextCell:".next1",pnLoop:false});
					jQuery(".hd_ul").slide({mainCell:".hd_ulb ul",effect:"left",prevCell:".prev3",nextCell:".next3",vis:8,pnLoop:false});
				
				</script>
			  <div class="tdzp"><span>案例信息</span></div>
			 <div class="alxx">
				<ul>
					<li><span>设计师:</span><?php echo $sjs;?></li>
					<li><span>楼盘名称:</span><?php echo $lpmc;?></li>
					<li><span>案例风格:</span><?php echo box('alfg',$r[alfg],13);?></li>
					<li><span>案例户型:</span><?php echo box('hx',$r[hx],13);?></li>
					<li><span>面积:</span><?php echo $mj;?>平方</li>
					<li><span>装修造价:</span><?php echo $zxzj;?>万</li>
				</ul>
			  </div>

			  <div class="rmal">
			      <div class="tdzp"><span>人气案例</span></div>
				  <div class="hot_case">
					<ul>  
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1f4b34945feb600e05250d86facfc9be&action=lists&catid=8&thumb=1&moreinfo=1&order=rand%28%29&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','thumb'=>'1','moreinfo'=>'1','order'=>'rand()','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					   <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="100%" height="148"/><br/><?php echo $r['title'];?></a></li>
								<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				  </div>
			  </div>
			  <div class="clear"></div>
			  <div class="rmal">
				  <div class="tdzp"><span>热门套餐</span></div>
				  <div class="hot_case">
					<ul>
						<li><a href="http://www.cdwyzs.cn/zn/zzxl/2.html"><img src="http://www.cdwyzs.cn/statics/images/taocan/2.png" width="100%" height="148"/></a></li>
						<li><a href="http://www.cdwyzs.cn/zn/zzxl/4.html"><img src="http://www.cdwyzs.cn/statics/images/taocan/4.png" width="100%" height="148" /></a></li>
						<li><a href="http://www.cdwyzs.cn/zn/zzxl/3.html"><img src="http://www.cdwyzs.cn/statics/images/taocan/3.png" width="100%" height="148" /></a></li>
						<li><a href="http://www.cdwyzs.cn/zn/zzxl/1.html"><img src="http://www.cdwyzs.cn/statics/images/taocan/1.png" width="100%" height="148" /></a></li>
					</ul>
				  </div>
				  <img src="http://www.cdwyzs.cn/statics/images/other/wxqm.jpg" width="100%" />
			  </div>
		</div>
		
		<div class="a_xq_r fr">
		    <center><div class="msyy_h">设计师</div></center>
			<div class="pad_10">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4049bb05f58845a2b70fa7aea9e422f1&sql=SELECT+%2A+FROM++weiyi_sjsmx+WHERE+title%3D%27%24sjs%27+order+by+rand%28%29&num=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM  weiyi_sjsmx WHERE title='$sjs' order by rand() LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
			   <img src="<?php echo $r['thumb'];?>" width="100%"/>

			   <?php $n++;}unset($n); ?>
			   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
			<a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" target="_blank" id="swt6"><div class="djyy">点击预约</div></a>
			<a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" target="_blank" id="swt30"><img style="margin-top:4px;" src="http://www.cdwyzs.cn/statics/images/other/mfbj.jpg" width="100%" /></a>
			<a href="http://www.cdwyzs.cn/zn/hd/"><img src="http://www.cdwyzs.cn/statics/images/other/alhdt.jpg" width="100%" /></a>
		</div>
		<div style="clear:both"></div>
	</div>

	<!--设计团队结束-->
	<!--header start-->
	<?php include template("content","footer"); ?> 
	<!--header end-->
<script>
  	$(function(){
  		$('.big_img_ul li img').attr({'style':'width:100%;'});
  	})
</script>
  </body>
</html>