
//日常CSS
document.writeln(`
<style>
.ydtc_big{position:fixed;top:0;bottom: 0;left: 0;right: 0; background:rgba(0,0,0,.6);z-index: 99;display: none;}
.ydtc{
	z-index:100;width:23em;height:33em;margin:0 auto;
	background-image: url('/statics/images/ydtc_1.png');
	background-size: 100% 100%;position: relative;
	text-align: center;display: flex;
	flex-direction:column;margin-top:10%;
}
.ydtc_gb{
	position: absolute;right:-1%;top:-4.3%;cursor: pointer;text-align: right;
}
.ydtc_kb{
	width: 100%; height:82%;
}
</style>
<div class="ydtc_big">
	<div class="ydtc">
		<div class="ydtc_gb">			
			<img onclick="closeSwt()" src="/statics/images/ydtc_2.png" width="70%" alt="" /></a>
		</div>
		<div class="ydtc_kb"></div>
		<a target="_blank" href="https://pct.zoosnet.net/LR/Chatpre.aspx?id=PCT57704281&lng=cn"><img src="/statics/images/ydtc_3.png" class="ydtc_bnt" width="70%" alt="" /></a>
	</div>
</div>
`)

	
$(".ydtc_bnt").click(
	function(str){
		str = 13;
		$.post("http://m.cdwyzs.cn/other/count.php",{name:str},function(ret){});
	}
);

function TimeAdd() {
	checkCookie("userTime");
}

function openMswt() {
	$(".ydtc_big").fadeIn(600, function() {
		$(this).show();
		bTrue = true;
		clearInterval(time);
	})
}

function closeSwt() {
	$(".ydtc_big").fadeOut(600, function() {
		bTrue = false;
		//time = setInterval("TimeAdd()", 1000);
	})
}

function getCookie(cookieName) {
	var strCookie = document.cookie;
	var arrCookie = strCookie.split("; ");
	for(var i = 0; i < arrCookie.length; i++) {
		var arr = arrCookie[i].split("=");
		if(cookieName == arr[0]) {
			return arr[1];
		}
	}
	return "";
}
function checkCookie(CookieName) {
	var Cname = getCookie(CookieName);
	if( Cname == ""){
		document.cookie = CookieName+"=0";
		//setTimeout("openMswt()",7000);//初次加载弹窗时间
	}
	else {
		var n = parseInt(Cname);
		++n;
		//console.log(n);
		document.cookie = CookieName+"="+n;
		//弹窗时间,首次10s,二次30s,之后1min
		var TimeNumber = Number.isInteger((n-10)/10);
		if( TimeNumber){
			openMswt();
		}
		
	}
}



$(".swt_list1").click(function(A) {
	A = 6;
	$.post("http://m.cdwyzs.cn/other/count.php", {
		name: A
	}, function(B) {})
});
$(".swt_list2").click(function(A) {
	A = 7;
	$.post("http://m.cdwyzs.cn/other/count.php", {
		name: A
	}, function(B) {})
});