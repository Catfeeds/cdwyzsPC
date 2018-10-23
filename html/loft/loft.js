$(function(){
	setInterval(function(){
		$(".f5_gd li").first().height(0);
		$(".f5_gd").append($(".f5_gd li").first());
		$(".f5_gd li").last().animate({"height":"30px"},500);
	},2000)

	var b = 0;
	
	$("#lbul").mouseenter(function(){
		clearInterval(ban);
	});
	$("#lbul").mouseleave(function(){
		ban = setInterval(run,3000);
	});
	$('#f3l').click(function(){
		b--;
		if(b==6){b=0};
		if(b==-1){b=5};
		var left = b*-400;
		$("#lbul").stop().animate({"left":left+"px"},750);
	})
	$('#f3r').click(function(){
		b++;
		if(b==6){b=0};
		if(b==-1){b=5};
		var left = b*-400;
		$("#lbul").stop().animate({"left":left+"px"},750);

	})
	
	$('.f3_box1_img').mouseenter(function(){
		var s = 'loft/'+$(this).attr('id')+'.jpg';
		$('#f3_imgon').attr('src',s);
	})
})
