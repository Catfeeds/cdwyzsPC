var arr
var obj
function demo(){
	
}
function text(parameter) {
    var typewriter = {
        str: parameter.str,
        effect: parameter.effect || "upBig",
        speed: parameter.speed || 200,
    }
    arr = [];
    for (var i = 0; i < typewriter.str.length; i++) {
        arr[i] = typewriter.str[i];
    }
    console.log(arr);
    var num = 0;

    obj = setInterval(function () {
        var randomN = Math.floor(Math.random() * 4) + 1;
        var eff = null;
        if (randomN === 1) {
            eff = "fadeInRightBig";
        }
        if (randomN === 2) {
            eff = "fadeInLeftBig";
        }
        if (randomN === 3) {
            eff = "fadeInUpBig";
        }
        if (randomN === 4) {
            eff = "fadeInDownBig";
        }
			if (typewriter.effect === "random") {
				setTimeout('demo()',2000);
            $("#text").append('<span style="display: inline-block;font-size:3em;" class="tip animated ' + eff + '">' + arr[num] + '</span>');
        }

        num++
        if (num === arr.length) {
            clearInterval(obj);
        }
    }, typewriter.speed);

}
$(function () {
    if ($("#btnBox").attr("effext") === "effext") {
        var speI = 200;
        $("#btnBox .speedBtn i").click(function () {
            speI = $(this).attr("speed");
            $(this).siblings().removeClass("speedF");
            $(this).addClass("speedF");
            $("#btnBox ul .effF").trigger("click");
        });

        $("#btnBox li").click(function () {
            arr = [];
            $("#text").html("");
            clearInterval(obj);
            var btnEff = $(this).attr("effext");
            $(this).siblings().removeClass("effF");
            $(this).addClass("effF");
            text({
                effect: btnEff,
                speed : speI,
            });
        });
    }
});

var arr2
var obj2
function text_one(parameter) {
    var typewriter = {
        str: parameter.str,
        effect: parameter.effect || "upBig",
        speed: parameter.speed || 200,
    }
    arr2 = [];
    for (var i = 0; i < typewriter.str.length; i++) {
        arr2[i] = typewriter.str[i];
    }
    console.log(arr2);
    var num = 0;

    obj2 = setInterval(function () {
        var randomN = Math.floor(Math.random() * 4) + 1;
        var eff = null;
        if (randomN === 1) {
            eff = "fadeInRightBig";
        }
        if (randomN === 2) {
            eff = "fadeInLeftBig";
        }
        if (randomN === 3) {
            eff = "fadeInUpBig";
        }
        if (randomN === 4) {
            eff = "fadeInDownBig";
        }
			if (typewriter.effect === "random") {
            $("#text_one").append('<span style="display: inline-block;fontSize:20px;" class="tip animated ' + eff + '">' + arr2[num] + '</span>');
        }

        num++
        if (num === arr2.length) {
            clearInterval(obj2);
        }
    }, typewriter.speed);

}
$(function () {
    if ($("#btnBox").attr("effext") === "effext") {
        var speI = 200;
        $("#btnBox .speedBtn i").click(function () {
            speI = $(this).attr("speed");
            $(this).siblings().removeClass("speedF");
            $(this).addClass("speedF");
            $("#btnBox ul .effF").trigger("click");
        });

        $("#btnBox li").click(function () {
            arr2 = [];
            $("#text_one").html("");
            clearInterval(obj2);
            var btnEff = $(this).attr("effext");
            $(this).siblings().removeClass("effF");
            $(this).addClass("effF");
            text_one({
                effect: btnEff,
                speed : speI,
            });
        });
    }
});