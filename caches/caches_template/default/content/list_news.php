<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">
	<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/cn/news/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
<script src="<?php echo JS_PATH;?>/jquery1.42.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
  </head>
  <body>
    <!--header start-->
	<?php include template("content","header"); ?> 
	<!--header end-->
	<!--内容开始-->
	<div class="news-wrap" >
	   <!--<div class="z_side_r">
	      <div class="page_h">
		    <div class="name"></div>
		    <div class="pos">
			  当前位置：<a href="">首页</a>><?php echo catpos($catid);?>
			</div>
		  </div>
		  <div class="pad_30_0 ft_article">    
               <?php echo $content;?>
		  </div>
	   </div>
	   <div style="clear:both"></div>-->
	     <div class="w1000">
		    <div class="news-title">
			    <h2>新闻中心</h2>
				<img src="<?php echo IMG_PATH;?>name07.png" alt="">
				  <a href="/index.php?m=content&c=index&a=lists&catid=18 " class="first on">活动新闻</a>
        	<a href="<?php echo $CATEGORYS['21']['url'];?> " class=" ">家装攻略</a>
				  <a href="/index.php?m=content&c=index&a=lists&catid=47" class=" ">家居布置</a>
				  <a href="<?php echo $CATEGORYS['48']['url'];?> " class=" ">装修问答</a>
				  <a href="<?php echo $CATEGORYS['20']['url'];?> " class=" ">公司动态</a>
			</div>
			    <div class="news-listin">
               <ul>
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ccd13e5567ae483ffe0ef18c2da43253&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
           <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>                
				<li>
                    <a href="<?php echo $r['url'];?> " target="_blank" class="fl"><img src="<?php echo $r['thumb'];?>" width="212" height="159" class="fl" alt="<?php echo $r['title'];?>"></a>
                    <div class="intro">
                        <a href="<?php echo $r['url'];?> "  target="_blank" class="tit"><?php echo $r['title'];?></a>
						 <span class="date"></span>
                        <a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['description'];?></a>
                        <a href="<?php echo $r['url'];?>" class="more"  target="_blank">查看详细</a>
                    </div>
                </li>
	       <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                            </ul>
            <div class="clear"></div>

        </div>
		 </div>
	</div>
	<!--内容结束-->
    <!--header start-->
	<?php include template("content","footer"); ?> 
	<!--header end-->
		<script>
			Date.prototype.Format = function (fmt) { //author: meizz 
		    var o = {
		        "M+": this.getMonth() + 1, //月份 
		        "d+": this.getDate(), //日 
		        "h+": this.getHours(), //小时 
		        "m+": this.getMinutes(), //分 
		        "s+": this.getSeconds(), //秒 
		        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
		        "S": this.getMilliseconds() //毫秒 
		    };
		    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
		    for (var k in o)
		    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
		    return fmt;
		}
			var time = new Date().Format("yyyy-MM-dd");
			$('.date').text('发布时间：'+time)
		</script>
  </body>
</html>