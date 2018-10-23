<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>

<html lang="zh-CN">

  <head>

    <meta charset="utf-8">

    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>

	<link href="<?php echo CSS_PATH;?>/common.css" rel="stylesheet">

    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">

	<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
	<style>
		.join {
			background-color: #fff;
			padding-bottom: 0;
		}
		.anmin_cen .zxlHzlc_head {
			margin: 36px 0;
			text-align: center;
		}
		.anmin_cen .zxlHzlc_con {
			box-sizing: border-box;
			margin-bottom: 10px;
			width: 100%;
			overflow: hidden;
		}
		.anmin_cen .zxlHzlc_con>div {
			padding: 46px 40px 0;
			box-sizing: border-box;
			position: relative;
			width: 100%;
			height: 422px;
			border: 1px solid #ddd;
			letter-spacing: 4px;
		}
		.zxlHzlc_con_1 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_01.png");
		}
		.zxlHzlc_con_2 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_02.png");
		}
		.zxlHzlc_con_3 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_03.png");
		}
		.zxlHzlc_con_4 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_04.png");
		}
		.zxlHzlc_con_5 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_05.png");
		}
		.zxlHzlc_con_6 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_06.png");
		}
		.zxlHzlc_con_7 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_07.png");
		}
		.zxlHzlc_con_8 {
			background-image: url("<?php echo IMG_PATH;?>hzlc/hzlc_bg_09.png");
		}
		.anmin_cen .zxlHzlc_con>div:before {
			content: "";
	    position: absolute;
	    width: 202%;
	   	left: -100%;
	    height: 0px;
	    border-bottom: 1px solid #ddd;
	    transform: rotate(-3.2deg);
		}
		.anmin_cen .zxlHzlc_con>div:after {
			content: "";
			position: absolute;
			width: 1px;
			height: 10px;
			background-color: #fff;
		}
		.anmin_cen .zxlHzlc_con>div:first-child {
			border-bottom: 0;
			text-align: right;
		}
		.anmin_cen .zxlHzlc_con>div:first-child:before {
	    bottom: 0;

		}
		.anmin_cen .zxlHzlc_con>div:first-child:after {
			height: 66px;
			bottom: 0;
			right: -1px;
		}
		.anmin_cen .zxlHzlc_con>div:last-child {
			margin-top: -56px;
			padding-top: 110px;
			border-top: 0;
		}
		.anmin_cen .zxlHzlc_con>div:last-child:before {
	    top: 66px;

		}
		.anmin_cen .zxlHzlc_con>div:last-child:after {
			top: 55px;
			left: -1px;
		}
		.anmin_cen .zxlHzlc_con>div h2 {
			margin-bottom: 34px;
			font-size: 30px;
			color: #666;
		}
		.anmin_cen .zxlHzlc_con>div h2 i {
			padding: 5px 5px 8px 10px;
			margin-left: 68px;
			font-style: normal;
			font-size: 43px;
			color: #fff;
			background-color: #fb4e4f;
			border-radius: 10px;
		}
		.anmin_cen .zxlHzlc_con>div:last-child h2 i {
			margin: 0 22px 0 0;
		}
		.anmin_cen .zxlHzlc_con>div p {
			font-size: 20px;
			color: #595959;
			line-height: 36px;
		}
		.anmin_cen .zxlHzlc_con>div a {
			display: block;
			margin-top: 24px;
			width: 364px;
			height: 44px;
			line-height: 44px;
			text-align: center;
			border: 2px solid #fb4e4f;
			color: #fb4e4f;
			font-size: 30px;
			border-radius: 4px;
			cursor: pointer;
		}
		.anmin_cen .zxlHzlc_con>div:first-child a {
			float: right;
		}
		.anmin_cen .zxlHzlc_con>div a:hover {
			color: #f7f7f7;
			background-color: #fb4e4f;
		}
		.SWT_small {
			cursor: pointer;
		}
		.zxl418 {
			display: block;
			margin-top: 36px;
			width: 100%;
			height: 375px;
			background-image: url("<?php echo IMG_PATH;?>hzlc/41800.jpg");
			background-position: center;
			background-repeat: no-repeat;
		}
	</style>
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
<script src="<?php echo JS_PATH;?>/jquery1.42.min.js" type="text/javascript"></script>

<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>

  </head>

  <body>

    <!--header start-->

	<?php include template("content","header"); ?>

	<!--header end-->

	<!--内容开始-->

	<div class="join" >

	   <div class="join-new anmin_cen">
			<div class="zxlHzlc_head"><img src="<?php echo IMG_PATH;?>hzlc/hzlc_01.png" width="100%"/></div>
				<div class="zxlHzlc_con">
					<div class="zxlHzlc_con_1">
						<h2>方案沟通<i>01</i></h2>
						<p>设计师一对一服务，与客户详细<br />沟通家装设计，风格，费用，周期等</p>
					</div>
					<div class="zxlHzlc_con_2">
						<h2><i>02</i>现场量房</h2>
						<p>设计师到客户拟装修的居室<br />进行现场勘测，并进行综合考察，<br />进行更加合理的家装设计规划。 </p>
						<a class="SWT_small">申请免费量房</a>
					</div>
				</div>
				<div class="zxlHzlc_con">
					<div class="zxlHzlc_con_3">
						<h2>方案确定<i>03</i></h2>
						<p>客户选择设计风格，设计师进<br />行家装设计，根据客户需求反<br />馈调整，确定最终设计方案，<br />并在公司展厅选择材料</p>
						<a class="SWT_small">0元设计报名</a>
					</div>
					<div class="zxlHzlc_con_4">
						<h2><i>04</i>签订合同</h2>
						<p>双方确认设计方案及预算，<br />签订装修合同，明确双方的<br />权利与义务</p>
					</div>
				</div>
				<div class="zxlHzlc_con">
					<div class="zxlHzlc_con_5">
						<h2>约定开工时间<i style="margin-left: 16px;">05</i></h2>
						<p>交付首期款，并约定开工时间<br />并安排施工</p>
						<a class="SWT_small">网上预约活动</a>
					</div>
					<div class="zxlHzlc_con_6">
						<h2><i>06</i>中期验收</h2>
						<p>隐蔽工程及各单项工程验收，<br />如木工水电等验收。交纳合同<br />中约定的中期款及变更款项</p>
						<a class="SWT_small">限量水电赠送</a>
					</div>
				</div>
				<div class="zxlHzlc_con">
					<div class="zxlHzlc_con_7">
						<h2>完工验收<i>07</i></h2>
						<p>进行赠品安装，如洁具，烟机灶具，<br />热水器等。按工程服务及服务实际<br />发生费用交纳或者退还费用</p>
					</div>
					<div class="zxlHzlc_con_8">
						<h2><i>08</i>8大售后服务</h2>
						<p>按照家装保修合同约定主材<br />质保15年，终身维护。</p>
						<a class="SWT_small">更多保障</a>
					</div>
				</div>
			</div>
				<a class="zxl418" href="http://www.cdwyzs.cn/zn/zzxl/2.html"></a>
				<div class="join-new anmin_cen">
				<img style="margin-top: 50px;" src="<?php echo IMG_PATH;?>hzlc/hzlc_02.jpg" width="100%">
				<img class="SWT_small" style="margin-top: 33px; display: block;" src="<?php echo IMG_PATH;?>hzlc/hzlc_03.jpg" width="100%">
	   </div>

	</div>

	<script>

    $(function(){



    var we= $(".abou_t");

    we.find(".about-left").delay(0).animate({top:-0,opacity : 1},1200);



    });

</script>

	<!--内容结束-->

    <!--header start-->

	<?php include template("content","footer"); ?>

	<!--header end-->
	<script>
		$(".SWT_small").click(function(){
				$("#LRdiv2").css("display","block");
			})
			function lr_closemini(){
				$("#LRdiv2").css("display","none");
			}
	</script>
  </body>

</html>