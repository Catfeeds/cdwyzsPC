/**
 * sku 分类页面JS
 * Author： 顾伟
 */


/**
 * 瀑布流布局方法
 * @type {{deft: {container: string, block: string, blkWidth: number, blkRight: number, blkBottom: number, insertType: boolean, blkCols: number}, runvar: {cols: Array, colsLeft: Array, colsHeight: Array}, conf: conf, getMinCol: getMinCol, getMaxCol: getMaxCol, stream: stream}}
 */
var WaterFall = {
    //默认设置
    deft : {
        'container' : '',
        'block' : '',
        'blkWidth' : 220,
        'blkRight' : 15,
        'blkBottom' : 15,
        'insertType' :true,
        'blkCols' : 0
    },

    //运行时，存储的临时数据
    runvar : {
        //记录所有列的className
        cols : [],
        //记录所有列className的left值
        colsLeft : [],
        //记录所有列最后一元素的底部高度
        colsHeight: []
    },

    //配置信息
    conf : function(opt){

        //根据配置信息按需执行瀑布流式
        if(this.deft.block && opt){
            this.runvar.cols.length = 0;
            this.runvar.colsLeft.length = 0;
            this.runvar.colsHeight.length = 0;
            $(this.deft.block).removeClass('water').addClass('backwater');
        }

        var deft = this.deft;

        deft = $.extend(deft,opt);
//            Object.mix(deft,opt,true),
        //预置模块
        run = this.runvar,
            cols = run.cols,
            colsLeft = run.colsLeft,
            colsHeight = run.colsHeight,
            //判断页面参数传递
            con = $(deft.container),
            blk = $(deft.block),
            //判断列数
            colen = deft.blkCols === 0 ? Math.floor((con.width()+deft.blkRight)/(deft.blkWidth+deft.blkRight)) : deft.blkCols,
            deft.blkCols = colen;

        //得到页面上已现有元素
        if(!$(con) || !$(blk))return;


        //对页面上已有元素进行死水处理
        if(!con.hasClass('con-fall')){
            con.addClass('con-fall');
        }
        blk.addClass('backwater');

        //根据父元素计算子元素的列数并创建相关class
        for(var i=0; i<colen; i++){
            this.runvar.cols.push('col'+i);
            this.runvar.colsLeft.push(i*(deft.blkWidth+deft.blkRight));
            this.runvar.colsHeight.push(0);
        }

        //对死水布局进行活水处理
        this.stream();

        // return this;
    },
    //通过现有名个列的高度，返回一个最小的用于插入新模块,返回为对象
    getMinCol : function(){
        var minval = Math.min.apply(Math,this.runvar.colsHeight),
            heights = this.runvar.colsHeight,
            l = heights.length;
        for(var i=0; i<l; i++){
            if(minval === heights[i]){
                return i;
            }
        }
    },
    //取页面现有元素高度最低的数值
    getMaxCol : function(){
        return Math.max.apply(Math,this.runvar.colsHeight);
    },

    //执行流水布局，针对页面已存在的结构
    stream : function(coln){
        var run = this.runvar,
            cols = run.cols,
            colsLeft = run.colsLeft,
            colsHeight = run.colsHeight,
        //进行活水处理的元素collection集合
            coln = coln ? coln : $('.backwater');
        //动态计算高度并插入
        $.each(coln,function(i,el){
            var ele = $(el),
                colsInx = WaterFall.getMinCol(),
                leftV = colsLeft[colsInx],
                topV = colsHeight[colsInx]===0?colsHeight[colsInx]:colsHeight[colsInx]+WaterFall.deft.blkBottom;
            ele.css({
                'left' : leftV + 'px',
                'top' : topV + 'px'
            },1).addClass('water').removeClass('backwater');
            colsHeight[colsInx] = topV + ele.data('position') + 137;
        });

        //设置父元素高度
        $(this.deft.container).css('height',this.getMaxCol()+20+'px');
    }
};

/**
 *
 * 瀑布流 滚动加载更多内容
 * @type {{wrap: string, isLoad: boolean, noMore: boolean, currentPage: currentPage, _tpl1: string, _tpl2: string, init: init, load: load}}
 */
var getmore = {
    wrap: '#waterfall',
    isLoad : false,
    noMore : false,
    currentPage: function(){
        var pagination = $('#pagination');
        if ( pagination.has('.active').length === 0 ){
            return -1;
        } else {
            return ~~pagination.find('.active').text() + 1;
        }
    },
    _tpl1 : '<li class="backwater" data-id="{{goods_id}}" data-position="{{height}}"> <div class="inner"><div class="btn-group"> <a href="javascript:;" class="btn-free-design" data-id="{{goods_id}}">免费设计</a> <a href="javascript:;" class="btn-amount-room" data-id="{{goods_id}}">量房</a> </div> <div class="pic" style="height: {{height}}px"> <a href="{{url}}" target="_blank"><img width="283" src="{{goods_img}}?imageView2/2/w/283/format/JPG/interlace/1"/><b class="msak"></b></a> </div> <div class="text"> <p class="tit">[{{function}}]{{name}}</p> <p class="price">￥{{market_price}}</p> <div class="meta"> <div class="style"> <span class="style-tag"> {{style}} </span> </div> <div class="start"><div class="start-num">{{click_count}}</div></div> </div> </div> </div> </li>', _tpl2 : '<li class="backwater" data-position="{{height}}"> <div class="inner"> <div class="pic" style="height: {{height}}px"> <a href="{{url}}" target="_blank"><img width="283" src="{{goods_img}}?imageView2/2/w/283/format/JPG/interlace/1"/></a> </div> <div class="text"> <p class="tit">[{{function}}]{{name}}</p> <p class="price"> ￥{{market_price}} </p> <div class="meta"> <div class="style"> <span class="style-tag"> {{style}} </span> </div> <div class="start"><div class="start-num">{{click_count}}</div></div> </div> </div> </div> </li>',
    init : function() {
        if ( WaterFall.getMaxCol() === 0 ) {
            $('#loadBox').css({display:'block'}).html('<p>去看看别的吧</p>');
        } else {
            $('#loadBox').css({display:'none'});
        }
        $(window).on('scroll',function(){
            var docHeight = $(document).height(),
                winHeight = $(window).height(),
                eventTop = $(this).scrollTop();
            if ( docHeight - eventTop - winHeight < 500 ){
                getmore.load();
            }
        });
    },
    load: function(){
        var nextPage = getmore.currentPage();

        if ( getmore.isLoad  || getmore.noMore || nextPage === -1 || (nextPage-1)%3===0  ) return;

        getmore.isLoad = true;
        $('#loadBox').css({display:'block'});
        $.ajax({
            url: '/case/api/clists.php?' + window.location.search.replace(/\?/,'') + '&page=' + nextPage,
            dataType: 'json',
            success: function(data){
                $('#loadBox').css({display:'none'});
                if ( data.goodslist.length === 0 ) {
                    $('#loadBox').css({display:'block'}).html('<p>没有更多了...</p>');
                    getmore.noMore = true;
                } else {
                    var _html = '';
                    $('#pagination').html(data.pagination);
                    if ( getCookie('youzi_phone') ){
                        $.each(data.goodslist, function (index, item) {
                            _html += tpl(getmore._tpl2, item)
                        });
                    } else {
                        $.each(data.goodslist, function (index, item) {
                            _html += tpl(getmore._tpl1, item)
                        });
                    }

                    $(getmore.wrap).append(_html);

                    WaterFall.stream();
                    getmore.isLoad = false;
                }
            }
        })
    }
};

/**
 * 获取 Location 的 search 值
 * @param _search
 * @param _key
 * @returns {string}
 */
function getLocationSearch(_search, _key){
    var searchArray = (_search).toString().replace('?&','').split('&'),
        result = '';
    $.each(searchArray, function(index, item){
        var _item = item.split('=');
        if ( _item[0] === _key ){
            result = _item[1]
        }
    });
    return result;
}

/**
 * 设置并跳转 Location 的 search 值
 * @param _search json格式
 */
function setLocationSearch(_search){
    var $location = window.location,
        searchStr = $location.search,
        reg = null;
    $.each(_search, function(_key, _item){
        reg = new RegExp('('+_key+')\\=(\\w+)?','gi');
        if (  reg.test(searchStr) ) {
            console.log('yes')
            searchStr = searchStr.replace( reg, function($1, $2, $3, $4){
                return $2 + '=' + _item;
            });
        } else {
            if ( searchStr === '' ) {
                searchStr = '?' + _key + '=' + _item;
            } else {
                searchStr = searchStr + '&' +_key + '=' + _item;
            }

        }
    });
    $location.href = searchStr;
}

/**
 * 无逻辑的简单模板方法
 * @param tpl
 * @param data
 * @returns {XML|string|*|void}
 */
function tpl(tpl, data) {
    return tpl.replace(/{{(.*?)}}/g, function ($1, $2) {
        return data[$2] === undefined ? '0' : data[$2];
    });
}

// 获取cookie
function getCookie(name){
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
    if(arr != null) return unescape(arr[2]); return null;
}

function setCookie(c_name,value,expiredays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+expiredays);
    document.cookie=c_name+ "=" +escape(value)+
        ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}
//setCookie('youzi_phone',18721901371, 365);

// 当文档高度小于视窗高度，让footer位于底部
function fotter_bottom() {
    setWidth();
    $(window).on( 'scroll', function(){
        setWidth();
    }).on( 'scroll', function(){
        setWidth();
    });
    function setWidth(){
        var windowH = $(window).height(),
            documentH = $(document).height(),
            $ft = $('#common_footer');
        var timer = setTimeout(function(){
            if ( windowH === documentH ) {
                $ft.css({
                    position: 'absolute',
                    left:0,
                    bottom:0
                });
            } else {
                $ft.css({
                    position: 'none'
                });
            }
            clearTimeout(timer);
        },0);
    }
}

// 等图片都加载完后 初始化瀑布流
$((function(){
    WaterFall.conf({
        'container' : '#waterfall',
        'block' : '#waterfall>li',
        'blkWidth' :285,
        'blkRight' : 20,
        'blkBottom' : 20
    });
    getmore.init();
}));

//  弹窗
(function(){
    var isQeejia = /qeejia/.test(window.location.href),
        footerStr = '<p>如有任何疑问，您可以直接联系柚子客服：<b>400-696-7760</b></p>';
    if ( isQeejia ) {
        footerStr = '<p>如有任何疑问，您可以直接联系柚子客服：<b>400-880-2600</b></p>';
    }
    $('body').on('mouseover', '.yzsp-list-k ul li', function(){
        $(this).addClass('hover').find('.btn-group').css('display','none').stop().fadeIn(100);
    }).on('mouseout', '.yzsp-list-k ul li', function(){
        $(this).removeClass('hover').find('.btn-group').css('display','block').stop().fadeOut(300);
    });
    // 免费预约弹窗
    var dialogFreeOrder = new youzi.Dialog({
        selectors: {
            wrapBox: 'sku-dialog-wrap dialog-free-order'
        },
        header: '',
        body: '<p class="tit">免费预约量房</p>' +
            '<div class="input-wrap"><div class="input-top">今日已有<b>**</b>人预约</div>' +
            '<div class="input-field">' +
            '<input type="text" placeholder="请输入手机号码" class="phone-num bookforfree-cellphone" maxlength="11" autofocus="autofocus"></input>' +
            '<a id="jsDialogFreeOrderBtn" class="btn-get-order" href="javascript:;">免费量房</a>' +
            '<p class="reminder">预约成功后 我们的客服人员将在24小时内与您联系！</p></div>' +
            '<p class="msg"></p>' +
            '</div>',
        footer: footerStr
    });
    // 免费预约弹窗
    var dialogFreeDesign = new youzi.Dialog({
        selectors: {
            wrapBox: 'sku-dialog-wrap dialog-free-order'
        },
        header: '',
        body: '<p class="tit">免费预约设计</p>' +
            '<div class="input-wrap"><div class="input-top">今日已有<b>**</b>人预约</div>' +
            '<div class="input-field">' +
            '<input type="text" placeholder="请输入手机号码" class="phone-num bookforfree-cellphone" maxlength="11" autofocus="autofocus"></input>' +
            '<a id="jsDialogFreeOrderBtn" class="btn-get-order" href="javascript:;">免费设计</a>' +
            '<p class="reminder">预约成功后 我们的客服人员将在24小时内与您联系！</p></div>' +
            '<p class="msg"></p>' +
            '</div>',
        footer: footerStr
    });
    // 预约成功弹窗
    var dialogSuccessOrder = new youzi.Dialog({
        selectors: {
            wrapBox: 'sku-dialog-wrap dialog-success-order'
        },
        header: '',
        body: '<p class="tit"><i class="sku-dialog-draw"></i>恭喜您！预约成功！</p>' +
            '<p class="succeed-tit">我们的客服人员将在24小时内与您沟通上门量房时间，敬请留意！</p>' +
            '<div class="notice-box">特别惊喜： 月底之前签约成功即送<b>1000元</b>装修豪礼！</div>' +
            '<p class="succeed-msg">微信“扫一扫”关注柚子装修公众号，随时随地获取装修资讯。</p>' +
            '<p class="succeed-msg">1对1装修服务，N多装修福利，等你来拿！</p>' +
            '<p class="qcode"><img src="http://youzipic.qiniudn.com/youzi-public-122x122.png" alt="二维码" /></p>',
        footer: footerStr,
        closeCallback: function(){
            // window.location.reload();
        }
    });
    var dialogSuccessOrderInt = function(){
        dialogSuccessOrder.init();
        dialogSuccessOrder.wrap.find('.gb').on('click', function(){
            _hmt.push(['_trackEvent', 'SKU', 'click', 'SKU_click_close_popup']);
        })
    };


    // 获取免费预约的人数
    function getReservation (callback, _gid){
        ajax({
            url: '/case/api/reservationHandler.php',
            data: {
                act: 'get',
                gid: _gid
            },
            callback: function(){
                callback && callback.call(this);
            }
        });
    }
    // 更新免费预约的人数
    function updateReservation (_gid){
        ajax({
            url: '/case/api/reservationHandler.php',
            data: {
                act: 'update',
                gid: _gid
            }
        });
    }

    // 免费预约
    function goReservation (cell ,callback){
        ajax({
            url: '/api/sms/fromcase',
            data: {
                cell: cell
            },
            callback: function() {
                var _jsonResponse = this;
                if (_jsonResponse.status == 200) {
                    var __zp_tag_params = {
                        "orderid": _jsonResponse.order_id,
                        p_zp_conversion: "b8c3dc825e98748f1566b9871632c0f6",//固定值
                        p_zp_convinfo: _jsonResponse.order_id
                    };
                    (function(param){
                        var c = {query:[], args:param||{}};
                        c.query.push(["_setAccount","445"]);//固定参数
                        (window.__zpSMConfig = window.__zpSMConfig||[]).push(c);
                        var zp = document.createElement("script"); zp.type = "text/javascript"; zp.async = true;
                        zp.src = ("https:" == document.location.protocol ? "https:" : "http:") + "//cdn.zampda.net/s.js";
                        var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(zp, s);
                    })(__zp_tag_params);
                }
                callback && callback();
            }
        })
    }

    // 预约量房按钮
    $('body')
    .on('click', '.btn-free-design', function(){
        // 已经留过号码则直接预约
        _hmt.push(['_trackEvent', 'SKU', 'click', 'SKU_click_bookforfree']);
        if ( !!youzi.Cookie.get('hasCell') ) {
            dialogSuccessOrderInt();
        } else {
            dialogFreeDesign.init();
            getReservation(function(){
                var _data = this;
                dialogFreeDesign.wrap.find('input[type="text"]').focus();
                dialogFreeDesign.wrap.find('.input-top b').text(_data.msg)
            },$(this).data('id'))

        }

    })
    .on('click', '.btn-amount-room', function(){
        // 已经留过号码则直接预约
        _hmt.push(['_trackEvent', 'SKU', 'click', 'SKU_click_bookforfree']);
        if ( !!youzi.Cookie.get('hasCell') ) {
            dialogSuccessOrderInt();
        } else {
            dialogFreeOrder.init();
            getReservation(function(){
                var _data = this;
                dialogFreeOrder.wrap.find('input[type="text"]').focus();
                dialogFreeOrder.wrap.find('.input-top b').text(_data.msg)
            },$(this).data('id'))

        }
    })
    .on('click', '#jsDialogFreeOrderBtn', function() {
        _hmt.push(['_trackEvent', 'SKU', 'summit', 'SKU_summit_bookforfree']);
        var _this       = $(this);
        var _input      = _this.prev();
        var _val        = _input.val();
        var _dialogWrap = _this.closest('.sku-dialog-wrap');
        var _msg        = _dialogWrap.find('.msg')
        if (youzi.reg.mobile.test(_val)) {
            _hmt.push(['_trackPageview', '/virtual/succeed_case_reserve_free']);
            youzi.Cookie.set('hasCell', '1', {
                expires: 30
            });
            goReservation(_val)
            updateReservation();
            _msg.text('');
            dialogFreeOrder.remove()
            dialogSuccessOrderInt();
        } else {
            _msg.text('手机号码错误');
        }
    })

})();

// 以下不是顾伟写的 ，有时间再去优化
$(function () {
    $('#mp').click(function () {
        var ob = $('#mp').attr('class');
        var sorturl = '{$sorturl}';
//            console.log(sorturl);
        //console.log(od);

        if (ob == 'undefined' || ob == 'px-jg-down' || ob == '') {
//            var area = $(this).attr('area');
            setLocationSearch({ob: 'asc', sort:'market_price'});
//            window.location.href = sorturl + '&sort=market_price&ob=asc';
        }
        if (ob == 'px-jg-up') {
//            window.location.href = sorturl + '&sort=market_price&ob=desc';
            setLocationSearch({ob: 'desc', sort:'market_price'});

        }
    });

    //下拉框
    var selects = $('select');//获取select
    for (var i = 0; i < selects.length; i++) {
        createSelect(selects[i], i);
    }
    function createSelect(select_container, index) {
        //创建select容器，class为select_box，插入到select标签前
        var tag_select = $('<div></div>');//div相当于select标签
        tag_select.attr('class', 'select_box');
        tag_select.insertBefore(select_container);
        //显示框class为select_showbox,插入到创建的tag_select中
        var select_showbox = $('<div></div>');//显示框
        select_showbox.css('cursor', 'pointer').attr('class', 'select_showbox').appendTo(tag_select);
        //创建option容器，class为select_option，插入到创建的tag_select中
        var ul_option = $('<ul></ul>');//创建option列表
        ul_option.attr('class', 'select_option');
        ul_option.appendTo(tag_select);
        createOptions(index, ul_option);//创建option
        //点击显示框
        tag_select.click(function () {
            select_showbox.addClass('select_box_opened');
            ul_option.show();
        });
        var li_option = ul_option.find('li');
        li_option.on('click', function () {
            var area = $(this).attr('area');
            setLocationSearch({area: area});
        });
        li_option.hover(function () {
            $(this).addClass('hover').siblings().removeClass('hover');
            if (closetimer) {
                clearTimeout(closetimer);
                ul_option.show();
            }
        }, function () {
            li_option.removeClass('hover');
        });

        var closetimer = null;
        tag_select.mouseout(function () {
            closetimer = setTimeout(function () {
                ul_option.hide();
                select_showbox.removeClass('select_box_opened');
            }, 500);
        });
    }



    function createOptions(index, ul_list) {
        //获取被选中的元素并将其值赋值到显示框中
        var options = selects.eq(index).find('option'),
            selected_option = options.filter(':selected'),
            selected_index = selected_option.index(),
            showbox = ul_list.prev();
        showbox.text(selected_option.text());
        //为每个option建立个li并赋值
        for (var n = 0; n < options.length; n++) {
            var tag_option = $('<li></li>'),//li相当于option
                txt_option = options.eq(n).text();
            var area = options.eq(n).val();
            tag_option.attr('area', area);
            tag_option.text(txt_option).css('cursor', 'pointer').appendTo(ul_list);
            //为被选中的元素添加class为selected
            if (n == selected_index) {
                tag_option.attr('class', 'selected');
            }
        }
    }

});
function clearDefaultText(el, message) {
    var obj = el;
    if (typeof(el) == "string")
        obj = document.getElementById(id);
    if (obj.value != "") {
        obj.value = "";
    }
    obj.onblur = function () {
        if (obj.value == "") {
            obj.value = message;
        }
    }
}
function check_cel() {
    document.forms[0].target = "rfFrame";
    if (document.promo_code.promoinput.value.length != 11) {
        document.getElementById('promoinput').value = "亲，手机号错啦！";
        document.promoinput.mobile.focus();
        return false;
    } else {
        var cell = document.getElementById('promoinput').value;
        $.ajax({
            type: "GET",
            url: "/api/sms/getCouponFromSKU3?cell=" + cell,
            //dataType: "jsonp",
            //jsonp: 'callback',
            success: function (json) {
                if (json == '500') {
                    alert('亲，请填写正确的手机号码。');
                    return;
                }
                alert("小柚会尽快把优惠码发到您的手机～！");//解码，显示汉字
                _hmt.push(['_trackPageview', '/virtual/succeed_menu_promo']);
            }
        });

    }
}
