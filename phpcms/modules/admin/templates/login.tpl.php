<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('phpcms_logon')?></title>

<!--自定义样式-->
<link href="<?php echo CSS_PATH?>style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>cloud.js"></script>

<style type="text/css">
	 div{overflow:hidden; *display:inline-block;}div{*display:block;}
	.login_box{  }
	.login_iptbox{}
	.login_iptbox .ipt{height:24px; width:110px; margin-right:22px; color:#fff; background:url(<?php echo IMG_PATH?>admin_img/ipt_bg.jpg) repeat-x; *line-height:24px; border:none; color:#000; overflow:hidden;}
	<?php if(SYS_STYLE=='en'){ ?>
	.login_iptbox .ipt{width:100px; margin-right:12px;}
	<?php }?>
	.login_iptbox label{position:relative; *top:-6px;}
	.login_iptbox .ipt_reg{margin-left:12px;width:56px; margin-right:16px; background:url(<?php echo IMG_PATH?>admin_img/ipt_bg.jpg) repeat-x; *overflow:hidden;text-align:left;padding:2px 0 2px 5px;font-size:16px;font-weight:bold;}
	.login_tj_btn{ background:url(<?php echo IMG_PATH?>admin_img/login_dl_btn.jpg) no-repeat 0px 0px; width:52px; height:24px; margin-left:16px; border:none; cursor:pointer; padding:0px; float:right;}
	.yzm{position:absolute; background:url(<?php echo IMG_PATH?>admin_img/login_ts140x89.gif) no-repeat; width:140px; height:89px;right:56px;top:200px;left:450px; text-align:center; font-size:12px; display:none;}
	.yzm a:link,.yzm a:visited{color:#036;text-decoration:none;}
	.yzm a:hover{color:#C30;}
	.yzm img{cursor:pointer; margin:4px auto 7px; width:130px; height:50px; border:1px solid #fff;}
	.cr{font-size:12px;font-style:inherit;text-align:center;color:#ccc;width:100%; position:absolute; bottom:58px;}
	.cr a{color:#ccc;text-decoration:none;}


</style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 
</head>

<body onload="javascript:document.myform.username.focus();" style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
<!--自定义后台开始-->
    

    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>  


<div class="logintop">    
    <span>欢迎登录后台管理界面平台</span>    
    <ul>
    <li><a href="#">首页</a></li>

    </ul>    
    </div>
    
    <div class="loginbody">
    
    <span class="systemlogo"></span> 
       
    <div class="loginbox">
    
    <ul>
	   <div id="login_bg" class="login_box">
	   	<div class="login_iptbox">
	 <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
	  
		<li><input autocomplete="off" name="username" type="text" class="loginuser" value="" placeholder="请输入用户名" onclick="JavaScript:this.value=''"/></li>
		<li><input autocomplete="off" name="password" type="password" class="loginpwd" value="" placeholder="请输入密码" onclick="JavaScript:this.value=''"/></li>
		
		<li>
		 <label><?php echo L('security_code')?>：</label>
		 <input name="code" type="text" class="ipt ipt_reg" onfocus="document.getElementById('yzm').style.display='block'" />
   		
		 <div id="yzm" class="yzm">
			<?php echo form::checkcode('code_img')?><br />
				 <a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);">
		    <?php echo L('click_change_validate')?></a>
		</div>
			
		</li>
		<li>
		
		<input name="dosubmit" type="submit" class="loginbtn" value="登录"   /><label>
		</li>
	
	</form>
	 </div>
	  </div>
    </ul>
    
    
    </div>
    
    </div>
    
    
    
    <div class="loginbm">版权所有  成都唯意装饰工程有限公司  <a>技术支持:3298982</a></div>
	
    
<!--自定义后台结束-->
	<!--
<div id="login_bg" class="login_box">
	<div class="login_iptbox">
   	 <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
	     <input name="dosubmit" value="" type="submit" class="login_tj_btn" />
		 <label><?php echo L('username')?>：</label>
		 <input name="username" type="text" class="ipt" value="" />
		 <label><?php echo L('password')?>：</label>
		 <input name="password" type="password" class="ipt" value="" />
		 <label><?php echo L('security_code')?>：</label>
		 <input name="code" type="text" class="ipt ipt_reg" onfocus="document.getElementById('yzm').style.display='block'" />
          <div id="yzm" class="yzm">
		     <?php echo form::checkcode('code_img')?><br />
		     <a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);"><?php echo L('click_change_validate')?></a>
		  </div>
     </form>
    </div>
    <div class="cr"><?php echo L("copyright")?></div>
</div>-->

</body>
</html>