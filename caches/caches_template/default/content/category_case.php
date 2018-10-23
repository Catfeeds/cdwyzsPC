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
  	<?php include template("content","header"); ?> 
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
					<div class="sxtj_bm_l"><i>|</i><span>获取免费设计</span> 今日还剩<span>30</span>个免费名额</div>
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
								<a rel="0" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=0">全部</a>
								<a rel="1" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=1&hx=0">现代简约</a>
								<a rel="2" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=2&hx=0">欧式/简欧</a>
								<a rel="3" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=3&hx=0">田园风格</a>
								<a rel="4" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=4&hx=0">地中海风格</a>
								<a rel="5" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=5&hx=0">中式风格</a>
								<a rel="6" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=6&hx=0">美式风格</a>
								<a rel="7" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=7&hx=0">混搭风格</a>
								<a rel="8" class="sx_child" name="alfg" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=8&hx=0">北欧风格</a>
						</div>
						<div class="sx">
								<span>户型</span>
								<a rel="0" class="sx_child" name="hx" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=0">全部</a>
								<a rel="1" class="sx_child" name="hx" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=1">一室</a>
								<a rel="2" class="sx_child" name="hx" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=2">二室</a>
								<a rel="3" class="sx_child" name="hx" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=3">三室</a>
								<a rel="4" class="sx_child" name="hx" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=4">四室</a>
						</div>
						<div class="sx">
								<span>面积</span>
								<a rel="0" class="sx_child" name="mjfw" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=0">全部</a>
								<a rel="1" class="sx_child" name="mjfw" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=1&alfg=0&hx=0">70㎡以下</a>
								<a rel="2" class="sx_child" name="mjfw" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=2&alfg=0&hx=0">70㎡-100㎡</a>
								<a rel="3" class="sx_child" name="mjfw" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=3&alfg=0&hx=0">100㎡-130㎡</a>
								<a rel="4" class="sx_child" name="mjfw" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=4&alfg=0&hx=0">130㎡以上</a>
						</div>
						<div class="sx">
								<span>局部</span>
								<a rel="0" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=0&mjfw=0&alfg=0&hx=0">全部</a>
								<a rel="1" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=1&mjfw=0&alfg=0&hx=0">客厅</a>
								<a rel="2" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=2&mjfw=0&alfg=0&hx=0">餐厅</a>
								<a rel="3" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=3&mjfw=0&alfg=0&hx=0">卫生间</a>
								<a rel="4" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=4&mjfw=0&alfg=0&hx=0">厨房</a>
								<a rel="5" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=5&mjfw=0&alfg=0&hx=0">卧室</a>
								<a rel="6" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=6&mjfw=0&alfg=0&hx=0">阳台</a>
								<a rel="7" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=7&mjfw=0&alfg=0&hx=0">过道</a>
								<a rel="8" class="sx_child" name="jubu" href="/index.php?m=content&c=index&a=lists&catid=8&jubu=8&mjfw=0&alfg=0&hx=0">吊顶</a>
						</div>			 	
					<!--<div class="sx">
						<span>风格</span>
							<?php $n=1; if(is_array(filters('alfg',$modelid,$alfg_rang))) foreach(filters('alfg',$modelid,$alfg_rang) AS $key => $r) { ?>
							<?php if($key < 9) { ?>
							<a rel="<?php echo $r['value'];?>" class="sx_child" name="alfg" href="javascript:;"><?php echo $r['name'];?></a>
							<?php } ?>
						<?php $n++;}unset($n); ?>
					</div>
					<div class="sx">
						<span>户型</span>
							<?php $n=1; if(is_array(filters('hx',$modelid,$hx_rang))) foreach(filters('hx',$modelid,$hx_rang) AS $key => $r) { ?>
							<?php if($key < 5) { ?>
							<a rel="<?php echo $r['value'];?>" class="sx_child" name="hx" href="javascript:;"><?php echo $r['name'];?></a>
							<?php } ?>
						<?php $n++;}unset($n); ?>
					</div>
					<div class="sx">
						<span>面积</span>
							<?php $n=1; if(is_array(filters('mjfw',$modelid,$mjfw_rang))) foreach(filters('mjfw',$modelid,$mjfw_rang) AS $key => $r) { ?>
							<?php if($key < 6) { ?>
							<a rel="<?php echo $r['value'];?>" class="sx_child" name="mjfw" href="javascript:;"><?php echo $r['name'];?></a>
							<?php } ?>
						<?php $n++;}unset($n); ?>
					</div>
					<div class="sx">
						<span>局部</span>
							<?php $n=1; if(is_array(filters('jubu',$modelid,$jubu_rang))) foreach(filters('jubu',$modelid,$jubu_rang) AS $key => $r) { ?>
							<?php if($key < 9) { ?>
						<a rel="<?php echo $r['value'];?>" class="sx_child" name="jubu" href="javascript:;"><?php echo $r['name'];?></a>
							<?php } ?>
						<?php $n++;}unset($n); ?>
					</div>-->
					
					
				<!--<div class="zj">
					<span>删选结果：</span>
					<p class="qcqb">清除全部</p>
				</div>-->
				</div>
				<script type="text/javascript" src="<?php echo JS_PATH;?>shanxuan.js"></script>
				<script type="text/javascript">
				$('.sx').sx({
					nuv:".zj",//筛选结果
					zi:"sx_child",//所有筛选范围内的子类
					qingchu:'.qcqb',//清除全部
					over:'on'//选中状态样式名称
				});
				$('.sx:last-child').sx({
					
				})
				</script>
			</div>
		<div class="a_list">
		   <ul>
		        <?php $sql = structure_filters_sql($modelid)?>

            <?php $urlrule = makeurlrule()?>

		    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2a52c775f0fbdb2f701e4f58e07ca97d&action=lists&catid=%24catid&num=9&order=listorder+DESC&page=%24page&moreinfo=1&where=%24sql&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','where'=>$sql,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','where'=>$sql,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

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
		   </ul>
		</div>
	</div>
	<script type="text/javascript">	
		$(function(){
			var i = 3;
//			var alurl = window.location.href;
//			if(alurl.length>60){
//				v++;
//				var alurl_arr = alurl.split("&");
//				alfg2 = alurl_arr[4]
//				alfg2 = alfg2.slice(0,alfg2.length-1);
//				console.log(alfg2);
//			}
		//var v = sessionStorage.getItem('v')
		var alurl = window.location.href;
		wz = [];
		v = 0;
		for(j=0;j<alurl.length;j++){
				if(alurl[j]=="?"){
				v++;
				wz[j] = [j];
			}
		}
		if(alurl.length>72&&v!=1){
			removeEmptyArrayEle(wz)
			alurl_t = alurl.slice(0,wz[1]);
			alurl_b = alurl.slice(Number(wz[1])+1);
			var res = alurl_t.concat(alurl_b);
			//console.log(res);
 	 		window.location.href=res;
		}

  $(window).scroll(function(){
				if(checkScroll()){
					getMore(i);i++;
				}
			})
	});
function removeEmptyArrayEle(arr){    
  for(var i = 0; i < arr.length; i++) {
   if(arr[i] == undefined) {
      arr.splice(i,1);
      i = i - 1; // i - 1 ,因为空元素在数组下标 2 位置，删除空之后，后面的元素要向前补位，
                       // 这样才能真正去掉空元素,觉得这句可以删掉的连续为空试试，然后思考其中逻辑
    }
   }
   return arr;
};	
function getMore(i){
	var alfg = "alfg="+GetQueryString("alfg");	
	var json = "/api.php?op=picflow&"+alfg+"&catid=<?php echo $catid;?>&page=" + i;
		$.getJSON(json, function(data){
		$.each(data,function(j){
			var j = data[j];
			var html='<li><a href='+j.url+'><img src='+j.thumb+' alt=""></a><div class="s_ms"><p>'+j.title+'</p><p><span class="fl">设计师：'+j.sjs+'</span><span class="fr">面积：'+j.mj+'㎡ </span></p></div></li>';
			$(".a_list ul").append(html);
		})
	});
}
function checkScroll(){
		var lheight = $('.a_list ul li:last').height();
		var scrolltop = $(document).scrollTop(); 
		var bheight = $(document.body).height();
		if(scrolltop*2>bheight-lheight){
			return true;
		}
}
function GetQueryString(name){
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}
	</script>

	<!--装修案例结束-->
	<!--底部开始-->
	<?php include template("content","footer"); ?> 
	<!--底部结束-->
  </body>
</html>