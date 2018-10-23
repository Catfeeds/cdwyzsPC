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
  </head>
  <body>
    <!--header start-->
	<?php include template("content","header"); ?> 
	<!--header end-->

	<!--设计团队开始-->
	<div class="w1200 pad" >
	<b>当前位置：<a href="http://www.cdwyzx.com/">首页</a> > <?php echo catpos($catid);?><?php echo $title;?></b>
		<div class="sjs_item">
		  <div class="fl sjs_img">
		    <img src="<?php echo $thumb;?>" width="280"/>
		  </div>
		  <div class="sjs_item_right">
		    <!-- <div class="name_div"><a href="javascript:;" class="name"><?php echo $title;?></a><?php echo box('zc',$r[zc],13);?></div>
			 <div class="text">
			    <br/>
				<span class="ft_b">代表作品:</span>
				<br/>
				<?php echo $dbzp;?>
				<br/>
				<br/>
				<span class="ft_b">设计理念/风格：</span>
				<br/>
				<?php echo $sjll;?>
                <br/>
				<br/>
				<span class="ft_b">个人简介：</span>
				<br/>
				<?php echo $content;?>  
                    <br/>
				<br/>
<a href="" class="btn sm_btn">预约</a>				
			 </div>-->
			 <table class="sjs_table">
		   <tbody>
		       <tr>
			    <th>姓&nbsp;&nbsp;名</th>
				<td colspan="3"><?php echo $title;?></td>
			  </tr>
		      <tr>
			    <th>设计职称</th>
				<td colspan="3"><?php echo box('zc',$r[zc],12);?></td>
			  </tr>
			  <tr>
			   <th>从业时间</th>
				<td colspan="3"><?php echo $cysj;?>年</td>
			   </tr>
			   <tr>
				<th>擅长风格</th>
				<td colspan="3"><?php echo $scfg;?></td>
			  </tr>
			   <!--<tr>
			   
				<th>毕业院校</th>
				<td colspan="3"><?php echo $byyx;?></td>
			  </tr>-->
			  <tr>
			    <th>设计理念</th>
				<td colspan="3"><?php echo $sjll;?></td>
			  </tr>
		   </tbody>
		</table>
		  </div>
	
		<div style="clear:both"></div>
		
			</div>
		<div class="tdzp"><span>最新作品</span></div>
		<ul class="clzt_ul">

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=949f3e6ceb6ececfb7a9c1d3e8bfa694&sql=SELECT+%2A+FROM+weiyi_almx+WHERE+sjs%3D%27%24title%27+order+by+rand%28%29&num=6&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM weiyi_almx WHERE sjs='$title' order by rand() LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

				<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?> 

		   <li>
		     <a href="<?php echo $val['url'];?>"><img src="<?php echo $val['thumb'];?>" width="100%" height="250"/></a>
			 <p class="ft_16"><?php echo $val['lpmc'];?></p>
			 <p>
				<span class="c_4f2222">面积：<?php echo $val['mj'];?>㎡</span>&nbsp;&nbsp;&nbsp;
				<span class="c_4f2222">价格：<?php echo $val['zxzj'];?>万</span>

			 </p>
		   </li>
		    <?php $n++;}unset($n); ?> 
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
		<div style="clear:both"></div>
	</div>
	<!--设计团队结束-->
    <!--header start-->
	<?php include template("content","footer"); ?> 
	<!--header end-->
  </body>
</html>