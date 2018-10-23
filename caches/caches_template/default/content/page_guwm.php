<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>

<html lang="zh-CN">

  <head>

    <meta charset="utf-8">

    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
	<link href="<?php echo CSS_PATH;?>common.css" rel="stylesheet">

    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">

	<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
	<link href="<?php echo CSS_PATH;?>animate.min.css" rel="stylesheet">
<script src="<?php echo JS_PATH;?>jquery-1.4.4.min.js" type="text/javascript"></script>

<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>

  </head>

  <body>

    <!--header start-->

	<?php include template("content","header"); ?> 

	<!--header end-->

	<!--内容开始-->

	<div class="zxlAbout" >
		<div class="banner"><img src="<?php echo IMG_PATH;?>join/join_01.jpg" width="100%" alt="" title="" /></div>
		<div class="zxlCon">
			<div class="zxlCon-left animate" data-animate="slideInLeft" data-duration="1.5s" data-delay="0.2s"><video id="video1" src="<?php echo IMG_PATH;?>join/ship.mp4" controls="controls" poster="<?php echo IMG_PATH;?>join/ship.jpg">您的浏览器暂不支持播放该视频，请升级至最新版浏览器。</video></div>
			<div class="zxlCon-right animate" data-animate="slideInRight" data-duration="1.5s" data-delay="0.2s">
				<div class="zxlText">
					<h3>公司简介 <span>A</span>bout Us</h3>
					<p style="margin-top: 8px;">成都唯意装饰工程有限公司，是一家集家装设计、施工、主材、家居软装为一体的一站式互联网装饰企业。</p>
					<p>专注品质装修服务，唯意装饰坚守匠心，重视每一位客户的全程体验，从设计到施工到售后，整体过程完善，有效保障装修及施工质量，为客户打造一个尽善尽美的家。</p>
					<p>唯意装饰拥有经验丰富的设计师团队，施工团队和监理团队，5000平材料展厅、不同风格样板间一应俱全。根据客户需求，量“房”裁衣，制定个性化方案，提供更高更有效更优质的家装服务。</p>
					<p>唯意本着“客户的满意是我们成功的唯一标准”的经营理念，以精益求精的态度全程为客户服务，以客为友、服务为本，把每一个准新家，当做自己家来装修。</p>
				</div>
			</div>
		</div>
		<div class="zxlCon-2">
			<div class="zxlAbout-h2 animate" data-animate="lightSpeedIn" data-duration="1s" data-delay="0s">
				<h2><i></i>选择唯意<i></i></h2>
				<small>CHOOSE THE ONLY ONE</small>
			</div>
			<div class="zxlCon-2-1 animate" data-animate="slideInLeft" data-duration="1.0s" data-delay="0.2s">
				<h4>质量放心：</h4>
				<p>与国内知名品牌供应商合作，选用优质的高端材料，引进先进工艺，绿色环保，为业主打造舒适安康的居家环境。</p>

			</div>
			<div data-animate="slideInRight" data-duration="1.0s" data-delay="0.2s" class="zxlCon-2-1 zxlCon-2-2 animate">
				<h4>团队实力：</h4>
				<p>云集资深设计师团队、经验丰富的工程管理队伍、技术精良的施工队伍、为客户打造一个尽善尽美的家。</p>

			</div>
			<div class="zxlCon-2-1 animate" data-animate="slideInLeft" data-duration="1.0s" data-delay="0.2s">
				<h4>预算透明：</h4>
				<p>预算报价透明，每一项报价都进行详细的规定，杜绝“低开高走”和“增项漏项”，让业主的钱花得清楚明白。</p>

			</div>
			<div class="zxlCon-2-1 zxlCon-2-2 animate" data-animate="slideInRight" data-duration="1.0s" data-delay="0.2s">
				<h4>价格超值：</h4>
				<p>极致性价比套餐，根据客户的总投资预算进行设计，合理分配各环节资金规划，家装当然更省钱。</p>

			</div>
			<div class="zxlCon-2-1 animate" data-animate="slideInLeft" data-duration="1.0s" data-delay="0.2s">
				<h4>工程透明：</h4>
				<p>先计划后施工，严格遵守工程进度时间表，让客户清楚知道装修的每一个工程施工进度，拒绝拖延工期。</p>

			</div>
			<div class="zxlCon-2-1 zxlCon-2-2 animate" data-animate="slideInRight" data-duration="1.0s" data-delay="0.2s">
				<h4>服务保障：</h4>
				<p>水电防水8年质保，主材15年质保，终身维护！</p>

			</div>
			<a target="_blank" href="http://dvt.zoosnet.net/LR/Chatpre.aspx?id=DVT37588334&lng=cn&r=&rf1=&rf2=&p=http%3A//cdwyzs.cn/&cid=1497662184100319259840&sid=1506041940617150243706" class="animate" data-animate="flip" data-duration="1.5s" data-delay="0s">咨询更多</a>
		</div>
		<div class="zxlCon-3">
			<div class="zxlAbout-h2 animate" data-animate="lightSpeedIn" data-duration="1s" data-delay="0s">
				<h2><i></i>工程标准<span></span>国际一线品牌<i></i></h2>
				<small>INTERNATIONAL FIRST-LINE BRAND</small>
			</div>
			<div class="zxlCon-left animate" data-animate="slideInLeft" data-duration="1.5s" data-delay="0.2s">
				<ul>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094821510.jpg" alt="升达地板" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094605843.jpg" alt="箭牌卫浴" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094449893.jpg" alt="多乐士" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094349139.jpg" alt="都芳漆" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094254685.png" alt="toto" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094504273.jpg" alt="方太烟机" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094649339.jpg" alt="马可波罗" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094525242.jpg" alt="菲林克斯" width="100%"/></li>
					<li><img src="http://www.cdwyzs.cn/uploadfile/2016/0822/20160822094625453.jpg" alt="康佳" width="100%"/></li>
				</ul>
			</div>
			<div class="zxlCon-right animate" data-animate="slideInRight" data-duration="1.5s" data-delay="0.2s">
				<div id="zxlLunBo-1" class="zxlText">
					<ul>
						<li><img src="<?php echo IMG_PATH;?>join/joinSteam_01.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/joinSteam_01.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/joinSteam_01.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/joinSteam_01.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/joinSteam_01.jpg" width="100%" alt="" title="" /></li>
					</ul>
				</div>
				<div class="zxlText-L"></div>
				<div class="zxlText-R"></div>
				<script>
						$(document).ready(function(){
							var zxlLength = $("#zxlLunBo-1 li").length;
							var firstHtml = $("#zxlLunBo-1").find("ul li:first-child").html();
							var lastHtml = $("#zxlLunBo-1").find("ul li:last-child").html();
							$("#zxlLunBo-1 ul").css({marginLeft:"-520px"});
							//$("#zxlLunBo-1").find("ul li:first-child").before("<li>" +lastHtml+ "</li>");
							$(".zxlText-L").click(function(){
								$(this).parent().children("#zxlLunBo-1").find("ul li:first-child").animate({width:0},1000,function(){
									var htm = $(this).html();
									$(this).parent().children("li:last-child").after("<li>"+htm+"</li>");
									$(this).remove();
								});
							});
							$(".zxlText-R").click(function(){
								var htm = $(this).parent().children("#zxlLunBo-1").find("ul li:last-child").html();
								$(this).parent().children("#zxlLunBo-1").find("ul li:first-child").before("<li style='width:0'>"+htm+"</li>");
								$(this).parent().children("#zxlLunBo-1").find("ul li:first-child").animate({width:"520px"},1000,function(){
									$(this).parent().children("li:last-child").remove();
								});
							})
						})
					</script>
			</div>
		</div>
		<div class="zxlCon-4">
			<div class="zxlAbout-h2 animate" data-animate="lightSpeedIn" data-duration="1s" data-delay="0s">
				<h2><i></i>实力团队<i></i></h2>
				<small>STRENGTH OF THE TEAM</small>
			</div>
			<div class="zxlCon-4-1">
				<img class="animate" data-animate="fadeIn" data-duration="2s" data-delay="0.2s" src="<?php echo IMG_PATH;?>join/join_04.jpg" width="100%" alt="" title="" />
				<span class="animate" data-animate="rotateIn" data-duration="1.5s" data-delay="0.2s">施工队伍</span>
			</div>
			<div class="zxlCon-4-1" style="margin-top: 56px;">
				<div class="zxlCon-4-1-left animate" data-animate="slideInLeft" data-duration="1.5s" data-delay="0.2s">
					<ul>
						<li></li>
						<li><img src="<?php echo IMG_PATH;?>join/join_05.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/join_06.jpg" width="100%" alt="" title="" /></li>
						<li></li>
					</ul>
				</div>
				<div class="zxlCon-4-1-right animate"  data-animate="slideInRight" data-duration="1.5s" data-delay="0.2s">
					<div class="zxlCon zxlText">
						<h3>公司简介 <span>A</span>bout Us</h3>
						<p style="margin-top: 14px;">上百名经验丰富、充满创意的设计师。<br>一对一贴心服务，空间布局、预算控制、及个性化需求，一步到位，<br>美观又实用！</p>
						<p>200多位技术精良的施工人员。<br>先进的施工工艺、认真的工作态度、较高的职业素养，<br>为您打造您心中的满意家园。</p>
						<p>强大的售后团队、经验丰富的金牌监理。<br>监督每一个施工环节，业务衔接流畅，整体过程完善把控，<br>有效保障装修及施工质量。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="zxlCon-5">
			<div class="zxlAbout-h2 animate" data-animate="lightSpeedIn" data-duration="1s" data-delay="0s">
				<h2><i></i>值得信赖<i></i></h2>
				<small>WE HAVE THE HONOR OF</small>
			</div>
			<div class="zxlCon-5-left animate" data-animate="slideInLeft" data-duration="1.5s" data-delay="0.2s">
				<div id="zxlLunBo-2" class="zxlText">
					<ul>
						<li><img src="<?php echo IMG_PATH;?>join/1.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/2.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/3.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/4.jpg" width="100%" alt="" title="" /></li>
						<li><img src="<?php echo IMG_PATH;?>join/5.jpg" width="100%" alt="" title="" /></li>
					</ul>
				</div>
				<div class="zxlText-L"></div>
				<div class="zxlText-R"></div>
				<script>
						$(document).ready(function(){
							var zxlLength = $("#zxlLunBo-2 li").length;
							var firstHtml = $("#zxlLunBo-2").find("ul li:first-child").html();
							var lastHtml = $("#zxlLunBo-2").find("ul li:last-child").html();
							$("#zxlLunBo-2 ul").css({marginLeft:"-604px"});
							//$("#zxlLunBo-1").find("ul li:first-child").before("<li>" +lastHtml+ "</li>");
							$(".zxlText-L").click(function(){
								$(this).parent().children("#zxlLunBo-2").find("ul li:first-child").stop().animate({width:0},1000,function(){
									var htm = $(this).html();
									$(this).parent().children("li:last-child").after("<li>"+htm+"</li>");
									$(this).remove();
								});
							});
							$(".zxlText-R").click(function(){
								var htm = $(this).parent().children("#zxlLunBo-2").find("ul li:last-child").html();
								$(this).parent().children("#zxlLunBo-2").find("ul li:first-child").before("<li style='width:0'>"+htm+"</li>");
								$(this).parent().children("#zxlLunBo-2").find("ul li:first-child").animate({width:"604px"},1000,function(){
									$(this).parent().children("li:last-child").remove();
								});
							})
						})
					</script>
			</div>
			<div class="zxlCon-5-right animate" data-animate="slideInRight" data-duration="1.5s" data-delay="0.2s">
				<div class="zxlCon zxlText">
						<h3>唯意装饰 <span>精益求精</span></h3>
						<p style="margin-top: 40px;">沿袭行业领先产品、工艺、材料、环保标准</p>
						<p>对环保不达标、质量不合格的“零容忍”态度</p>
						<p>创造更高的品质，更便捷的服务、更舒心的价格享受</p>
						<p>唯意人不断进取，为更多业主提供优质满意的家装体验</p>
					</div>
			</div>
		</div>
		<div class="animate" style="width: 100%; min-width: 1200px; height:560px; overflow: hidden;" data-animate="fadeIn" data-duration="1.5s" data-delay="0.2s">
<style type="text/css">
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>
  <!--百度地图容器-->
<div>
  <div style="width:100%;height:560px;border:#ccc solid 1px;" id="dituContent"></div>
</div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(104.081233,30.69297);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.disableScrollWheelZoom();//禁用地图滚轮放大缩小，默认禁用(可不写)
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"成都唯意装饰工程有限公司",content:"公司地址：一环路北三段1号金牛万达广场&nbsp;&nbsp;SOHO&nbsp;&nbsp;C座21楼整层<br>公交线路：11,15,16,27,28,32,34,52,54,55,57,70,73,83,86,106,113,342路人民北路下车即到<br>地铁路线：地铁1号线人民北路站B1出口即到<br>联系客服：400-808-9193<br>联系手机：13880985564",point:"104.080847|30.692069",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://map.baidu.com/image/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
		</div>
	</div>

	<!--内容结束-->

    <!--header start-->

	<?php include template("content","footer"); ?> 

	<!--header end-->
	<script src="<?php echo JS_PATH;?>/scrolla.jquery.min.js" type="text/javascript"></script>
	<script>
		$('.animate').scrolla({
		    mobile: false, // disable animation on mobiles 
		    once: false // only once animation play on scroll
		});
	</script>
  </body>

</html>