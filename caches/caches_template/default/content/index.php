<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>成都装修公司-成都唯意装饰工程有限公司【官方网站】</title>
	<meta name="Keywords" content="装修,唯意装饰,成都装饰,成都装修,成都装修公司" >
	<meta name="Description" content="唯意装饰-成都装修公司前十强,成都整装领导品牌,提供成都装修设计,家庭装修,旧房改造等成都装修服务,口碑好,装修更靠谱!">
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
	<style>
		@font-face {
			font-family: 'PingFang';
			src: url('http://www.cdwyzs.cn/statics/fonts/PingFang Regular.ttf') format('truetype')
		};
	</style>
	<link href="<?php echo CSS_PATH;?>common.css"type="text/css" rel="stylesheet">
  <link href="<?php echo CSS_PATH;?>main.css" type="text/css" rel="stylesheet">
	<script src="<?php echo JS_PATH;?>jquery1.42.min.js" type="text/javascript"></script>
	<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>slider.js"></script>


	<!---->
	<script>
		(function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if(clientWidth<=1200){
                    docEl.style.fontSize = '100px';
                }else{
                    docEl.style.fontSize = 100 * (clientWidth / 1200) + 'px';
                }
            };

        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);
	</script>
  </head>
  <body>
  <!--header start-->
	<?php include template("content","header"); ?>
	<!--header end-->
    <!-- banner start -->
    <div id="zxlBanner" class="flexslider">
        <ul class="slides">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cee233449f9e793c20d123099406832f&action=lists&moreinfo=1&catid=45&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>'45','limit'=>'5',));}?>
        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><div class="img" style="position:relative"><?php echo $r['content'];?><a target="_blank" href="<?php echo $r['lj'];?>"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo $r['thumb'];?>" width="100%" /></a></div></li>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <script>
	$(function(){
		$('#zxlBanner').flexslider({
			animation: "slide",
			direction:"horizontal",
			easing:"swing",
			slideshowSpeed:6000
		});
	});
	</script>
    <!-- banner end-->
	<!--装修套餐-->
    <div class="w1200 tc">
	   <a target="_blank" href="http://www.cdwyzs.cn/zn/zzxl/2.html"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="../statics/images/taocan/2.png" width="100%"/></a>
	   <a target="_blank" href="http://www.cdwyzs.cn/zn/zzxl/3.html"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="../statics/images/taocan/3.png" width="100%"/></a>
	   <a target="_blank" href="http://www.cdwyzs.cn/zn/zzxl/4.html"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="../statics/images/taocan/4.png" width="100%"/></a>
	   <a target="_blank" href="http://www.cdwyzs.cn/zn/zzxl/1.html"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="../statics/images/taocan/228.png" width="100%"/></a>
	</div>
	<!--点击咨询-->

	<!--装修案例开始-->

	 <div class="zx_case w1200" style="margin-bottom: 0;">
	    <div class="zx_c_title">
	    	<style>
	    		.zxal_top{margin: 0 auto;  width: 100%;margin-top:35px;font-size: 22px;line-height: 30px;color: #333;text-align: center;font-weight: normal;}
	    		.zxal{
	    			width:100%;background: #FFF;border-top: 1px solid #F2F2F2;border-bottom: 1px solid #F2F2F2;box-shadow: 0 0 3px #F7F7F7;clear:both;display:table;  margin-top:35px; 
	    		}
	    		.zxal li{
	    			margin: 0 16px 0 25px;font-size:14px;line-height:40px;color:#999999;display: inline-block;
	    		}
	    		.zxal li a:hover{ color: #e60012;}
	    		.mores{display: block;margin:20px auto 0; width:136px;height:36px;border: 2px solid #999999;border-radius: 6px;font-size: 18px; line-height: 36px;color: #999999;text-align:center; clear:both;}
	    		.mores:hover{border: 2px solid #e60012; color: #e60012;}
	    		.zxal_red{font-weight:bold; color:#e60012;}
	    	</style>
	    	<h1 class="zxal_top">————&nbsp;&nbsp;&nbsp;&nbsp;装修案例&nbsp;&nbsp;&nbsp;&nbsp;————</h1>
	    	<ul class="zxal">
	    			<li><a href="<?php echo $CATEGORYS['8']['url'];?>" class="zxal_red">全部</a></li>
	    	  	<li><a href="/index.php?m=content&c=index&a=lists&catid=8&alfg=1">现代简约</a></li>
	    	    <li><a href="/index.php?m=content&c=index&a=lists&catid=8&alfg=2">欧式/简欧</a></li>
	    	    <li><a href="/index.php?m=content&c=index&a=lists&catid=8&alfg=3">田园风格</a></li>
	    		  <li><a href="/index.php?m=content&c=index&a=lists&catid=8&alfg=5">中式风格</a></li>
	    		  <li><a href="/index.php?m=content&c=index&a=lists&catid=8&alfg=8">北欧风格</a></li>
	    		  <li><a href="/index.php?m=content&c=index&a=lists&catid=8&alfg=6">美式风格</a></li>
            <li><a href="/index.php?m=content&c=index&a=lists&catid=8&alfg=4">地中海</a></li> 
	    	</ul>
             <!--装修案例导航-->
             <div class="zx_title_r">
            </div>
	  	</div>
		  <div class="zx_content">
		      <div class="zx_fl" >
					     <ul style="margin-bottom:15px">
						 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=45142b8e5ea5ddcbb763ee2371b56680&action=position&posid=1&catid=8&thumb=1&moreinfo=1&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','catid'=>'8','thumb'=>'1','moreinfo'=>'1','order'=>'listorder DESC','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					       <li><a href="<?php echo $r['url'];?>" class="imga" target="_blank">
					               <img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" />
								         <div class="info">
								                    设计师：<?php echo $r['sjs'];?></br>
								                    案例风格：<?php echo box('alfg',$r[alfg],13);?> </br>
                                                    案例户型：<?php echo box('hx',$r[hx],13);?></br>

					面积：<?php echo $r['mj'];?>平方</br>
								         </div>
					           </a>
							       <p>
							          <span class="fe70"><?php echo $r['title'];?></span>
							       </p>
					       </li>
					     	<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					       <div style="clear:both"></div>
					     </ul>
					</div>
		  </div>
		 	<div>
	    		<a class="mores" href="<?php echo $CATEGORYS['8']['url'];?>">More</a>
	    </div>
	</div>

	<!--装修案例结束-->
		<!--主材开始-->
	  <div class="ry w1200">
	    <div class="ry_title" style="height: 60px; line-height: 60px;">
		   <b>主材品牌</b>
           <a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" target="_blank">了解更多请咨询+</a>
		</div>
		<div class="ry_L">
        	<div class="ry_L_1">
            	<a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" target="_blank">查看更多 >></a>
            </div>
		   <ul>
		     	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=27e5a2a5e8960f5e1616e6cc84d271b0&action=lists&catid=23&thumb=1&moreinfo=1&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'23','thumb'=>'1','moreinfo'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		           <li>
                   	<img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="100%" style="margin-top:5px;"/>
                   	<div class="ry_Con ry_Con_P">
                    	<h4><?php echo $r['title'];?></h4>
                        <p><?php echo $r['description'];?></p>
                    </div>
                   </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		      	<script>
					$(".ry_L ul li").hover(function(){
						$(this).children("div").removeClass("ry_Con_P");
					},function(){
						$(this).children("div").addClass("ry_Con_P");
					})
    			</script>

              <div style="clear:both"></div>
		   </ul>
		</div>
	 </div>
	 <!--主材结束-->
	<!-- 装修步骤 -->
	<div class="w1200">
		<ul class="zxlServe">
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_0" style="margin-left:0;" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_1" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_2" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_3" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_4" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_5" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_6" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_7" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_8" target="_blank"></a></li>
			<li><a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" class="zxlZxbz_9" target="_blank"></a></li>
		</ul>
	</div>

	<!--广告开始
	<div class="gg">
	  <a href="<?php echo $CATEGORYS['44']['url'];?>"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo IMG_PATH;?>index-banner.jpg"/></a>
	</div>-->
	<!--广告结束-->
	<!--设计师版块开始-->
	 <div class="designer w1200">
	    <div class="zx_c_title">
		     <a href="<?php echo $CATEGORYS['7']['url'];?>"><b>设计团队</b></a>
		</div>
	    <div class="des_c">
		   <div class="des_l fl">
		       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c754e54e72229f04ed5e89224c1971aa&action=position&posid=2&catid=7&thumb=1&moreinfo=1&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'7','thumb'=>'1','moreinfo'=>'1','order'=>'listorder DESC','limit'=>'1',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		      <div class="des_one fl">
			     <div class="des_first">
				    <a href="<?php echo $r['url'];?>"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo $r['thumb'];?>" width="360"/></a>
				 </div>
				 <div class="des_t">
				    <b><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>&nbsp;&nbsp;<?php echo box('zc',$r[zc],12);?></b>
					<p>毕业于<?php echo $r['byyx'];?>&nbsp;&nbsp;<?php echo $r['cysj'];?>年经验</p>
					<p><?php echo $r['sjll'];?></p>
				 </div>

			  </div>
			  <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			  <div class="des_two fr">
			  		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6d099d308bd4b00b40ebd4c6b3198137&action=lists&posid=2&catid=7&thumb=1&moreinfo=1&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('posid'=>'2','catid'=>'7','thumb'=>'1','moreinfo'=>'1','order'=>'listorder DESC','limit'=>'6',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			     <div class="des_r fl">
				    <div class="des_d fl">
					   <div class="des_img">
					     <a href="<?php echo $r['url'];?>"><img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo $r['thumb'];?>" width="208"/></a>
					   </div>
					   <div class="des_info"><b><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo box('zc',$r[zc],12);?>&nbsp;&nbsp;&nbsp;
					   <a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" target="_blank" id="swt2"><span class="yuyue">预约</span></a></div>
					</div>
				 </div>
					 <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			  </div>
		   </div>

		   <div style="clear:both"></div>
		</div>
	 </div>
	<!--设计师版块结束-->

	<!-- 新闻 -->
	<div class="w1200">
		<!-- 家装攻略 -->
		<div class="zxlNews"style="width:356px">
			<div>
				<h5>家装攻略</h5>
				<a href="/index.php?m=content&c=index&a=lists&catid=21">更多+</a>
			</div>
			<ul class="zxlNewsCon">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0d4bec682be612f4330822bb34bf6fd9&action=lists&posid=1&catid=21&order=listorder+ASC&num=4&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('posid'=>'1','catid'=>'21','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>">
					<img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo $r['thumb'];?>" />
					<div>
						<h6><?php echo $r['title'];?></h6>
						<p><?php echo str_cut($r['description'],100);?></p>
					</div>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>

		<div class="zxlNews" style="width:438px;">
			<div>
				<h5>装修问答</h5>
				<a href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn" target="_blank">更多+</a>
			</div>
			<ul class="zxlNewsCon zxlNewsWDCon">
				<li>
					<h6>为什么唯意装饰的价格这么低？！</h6>
					<p>1、唯意装饰作为互联网装修企业的佼佼者，高度整合供应链资源，采用F2C模式，材料从工厂直接到用户家，省掉中间费用，将成本降到更低。</p>
					<p>2、同时规范化施工，流程化管理，提高人效。</p>
					<p>3、再利用互联网渠道和口碑做营销，降低营销成本，唯意装饰每三个客户就有一个是老客户介绍。</p>
					<p>4、互联网装修产品的毛利只控制在10%，而这10%也不是增加用户的成本，是通过供应链和管理效率挤压出来的利润。</p>
				</li>
				<li>
					<h6>这么低的价格质量有保障吗？</h6>
					<p>1、唯意装饰拥有5000平材料展厅，是专业的家装解决方案供应商！</p>
					<p>2、工程质量达到国家质量评定标准，不达标不满意，我们马上砸掉重做；</p>
					<p>3、全城首推15年质保，终身维护！</p>
					<p>4、德系工艺，现场看材料看样板间，所见即所得！</p>
				</li>
			</ul>
		</div>

		<!--家居布置-->
		<div class="zxlNews" style="float:right; margin-right:0;width:356px">
			<div>
				<h5>家居布置</h5>
				<a href="/index.php?m=content&c=index&a=lists&catid=47">更多+</a>
			</div>
			<ul class="zxlNewsCon">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fccd1d8fb011fce432af3aaca97ca454&action=lists&posid=1&catid=47&order=listorder+ASC&num=4&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('posid'=>'1','catid'=>'47','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>">
					<img art="装修效果图|成都装修公司|装修公司|旧房翻新|出租房装修|
简约装修|简单装修" src="<?php echo $r['thumb'];?>" />
					<div>
						<h6><?php echo $r['title'];?></h6>
						<p><?php echo str_cut($r['description'],100);?></p>
					</div>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>

	</div>
	<br style="clear:both" />
   <!--header start-->
	<?php include template("content","footer"); ?>
	<!--header end-->
  </body>
</html>