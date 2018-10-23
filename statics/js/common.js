/**
 * [SKU库公用js]
 * @Author  顾伟
 */
window.youzi = window.youzi || {};

// 正则
youzi.reg = {
  authcode: /\d{4}/,
  mobile: /^1(([35][0-9])|(47)|([8][0-9])|([7][0-9]))\d{8}$/i
}

youzi.Cookie = {};
/**
 * [get 获取cookie]
 * @param  {[type]} name    [cookie键]
 * @param  {[type]} options [可选 converter 转换函数。如果有值，会在传给converter函数前进行转换； raw为真时则不会进行URI转码]
 * @return {[type]}         [description]
 */
youzi.Cookie.get = function(name, options) {
  validateCookieName(name);

  if (typeof options === 'function') {
    options = {
      converter: options
    };
  } else {
    options = options || {};
  }

  var cookies = parseCookieString(document.cookie, !options['raw']);
  return (options.converter || same)(cookies[name]);
};
/**
 * [set 设置cookie]
 * @param {[type]} name    [cookie键]
 * @param {[type]} value   [cookie值]
 * @param {[type]} options [path（字符串）、domain（字符串）、 expires（数值或日期对象）、raw（布尔值）。当 raw 为真值时，在设置 cookie 值时，不会进行 URI 编码。]
 */
youzi.Cookie.set = function(name, value, options) {
  validateCookieName(name);

  options = options || {};
  var expires = options['expires'];
  var domain = options['domain'];
  var path = options['path'];
  var encode = encodeURIComponent;

  if (!options['raw']) {
    value = encode(String(value));
  }

  var text = name + '=' + value;

  // expires
  var date = expires;
  if (typeof date === 'number') {
    date = new Date();
    date.setDate(date.getDate() + expires);
  }
  if (date instanceof Date) {
    text += '; expires=' + date.toUTCString();
  }

  // domain
  if (isNonEmptyString(domain)) {
    text += '; domain=' + domain;
  }

  // path
  if (isNonEmptyString(path)) {
    text += '; path=' + path;
  }

  // secure
  if (options['secure']) {
    text += '; secure';
  }

  document.cookie = text;
  return text;
};
/**
 * [remove 移除指定cookie 调用 set 方法]
 * @param  {[type]} name    [cookie键]
 * @param  {[type]} options [与set方法一样]
 */
youzi.Cookie.remove = function(name, options) {
  options = options || {};
  options['expires'] = new Date(0);
  return this.set(name, '', options);
};


function parseCookieString(text, shouldDecode) {
  var cookies = {};
  var decode = decodeURIComponent;

  if (isString(text) && text.length > 0) {

    var decodeValue = shouldDecode ? decode : same;
    var cookieParts = text.split(/;\s/g);
    var cookieName;
    var cookieValue;
    var cookieNameValue;

    for (var i = 0, len = cookieParts.length; i < len; i++) {

      cookieNameValue = cookieParts[i].match(/([^=]+)=/i);
      if (cookieNameValue instanceof Array) {
        try {
          cookieName = decode(cookieNameValue[1]);
          cookieValue = decodeValue(cookieParts[i]
            .substring(cookieNameValue[1].length + 1));
        } catch (ex) {}
      } else {
        cookieName = decode(cookieParts[i]);
        cookieValue = '';
      }

      if (cookieName) {
        cookies[cookieName] = cookieValue;
      }
    }

  }

  return cookies;
}


// Cookie Helpers
function isString(o) {
  return typeof o === 'string';
}

function isNonEmptyString(s) {
  return isString(s) && s !== '';
}

function validateCookieName(name) {
  if (!isNonEmptyString(name)) {
    throw new TypeError('Cookie name must be a non-empty string');
  }
}

function same(s) {
  return s;
}


/**
 * [Dialog 弹窗]
 * @param {[type]} config [description]
 */
youzi.Dialog = function(config) {
  this.config = $.extend(true, {}, {
    header: '提示信息',
    body: '',
    footer: '',
    showHeader: true,
    showMask: true,
    selectors: {
      wrapBox: '',
      confirmBtn: '.confirm-btn',
      cancelBtn: '.cancel-btn'
    },
    closeCallback: null,
    confirmCallback: null
  }, config);
  this.mask = $('<div class="yz-dialog-mask"></div>');
  this.wrap = $('<div class="yz-dialog-wrap ' + this.config.selectors.wrapBox + '"><div class="content"></div></div>');
  this.opend = false;
  this.create = function() {
    var _this = this;
    var header = $('<div class="dialog-header"></div>');
    var body = $('<div class="dialog-body"></div>');
    var footer = $('<div class="dialog-footer"></div>');

    body.html(_this.config.body);
    header.html('<h3>' + _this.config.header + '</h3><div id="gb" class="gb" role="close"></div>');
    footer.html(_this.config.footer);
    $('body')
      .append(_this.mask)
      .append(_this.wrap).find('.content')
      .html('')
      .append(header).append(body).append(footer)
  }
}

$.extend(youzi.Dialog.prototype, {
  init: function() {
    var _this = this;
    if (this.opend === true) return;
    this.create();
    this.show();
    this.wrap.on('click', '[role="close"]', function() {
      _this.remove();
    })
    this.mask.on('click', function() {
      _this.remove();
    })
    $(document).on('keydown', function(event) {
      var keyCode = event.keyCode;
      if (keyCode === 27) {
        _this.remove();
      }
    });
    this.opend = true;
  },
  show: function() {
    var _this = this;
    this._clientCenter();
  },
  remove: function() {
    this.wrap.remove();
    this.mask.remove();
    this.config.closeCallback && this.config.closeCallback();
    this.opend = false;
  },
  _isIE6: !('minWidth' in $('html')[0].style),
  _clientCenter: function() {
    var _this = this;
    var $window = $(window);
    var $document = $(document);
    var scrollTop = $window.scrollTop();
    var scrollLeft = $window.scrollLeft();
    var clientHeight = $window.height();
    var clientWidth = $window.width();
    var dialogWidth = _this.wrap.width();
    var dialogHeight = _this.wrap.height();
    var pageHeight = $document.height();

    this.mask.css({
      height: pageHeight
    })
    if (_this._isIE6) {
      _this.wrap.css({
        margin: 0
      })
    } else {
      _this.wrap.css({
        marginTop: -dialogHeight / 2,
        marginLeft: -dialogWidth / 2
      })

    }
  }
});

// 封装 ajax 简易方法
function ajax(opt){
    $.ajax({
        type: opt.type || 'GET',
        url: opt.url,
        data: opt.data,
        dataType: 'json',
        success: function(data){
            opt.callback && opt.callback.call(data)
        }
    })
}


jQuery(function() {
  //切换地址
  var site = '';
  var reg = new RegExp("(^| )site=([^;]*)(;|\x24)"),
    result = reg.exec(document.cookie);
  if (result) {
    site = result[2] || null;
  }
  var loc = site == 'hefei' ? '合肥' : '上海';
  $('.qh-now').text(loc);

  function stopPropagation(e) {
    if (e.stopPropagation)
      e.stopPropagation();
    else
      e.cancelBubble = true;
  }

  $(document).bind('click', function() {
    if ($('.qh-btn').attr('class') == 'qh-btn qh-btn-active') {

      $('.qh-xz').hide();
      $('.qh-btn').removeClass('qh-btn-active');
    }
  });

  $('.qh-btn').bind('click', function(e) {
    stopPropagation(e);
    $(this).toggleClass('qh-btn-active');
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_change']);
    $('.qh-xz').toggle();
  });
  $('.qh-sh').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_change_shanghai']);

  });
  $('.qh-hf').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_change_hefei']);

  });

  $('.qh-xnhl').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_promotion']);
  });
  $('.qh-jxtc').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_feature_package']);
  });
  $('.qh-zxbj').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_online_calc']);
  });
  $('.qh-sjtt').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_design_photos']);
  });
  $('.qh-jcsc').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_material']);
  });
  $('.qh-sjh').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'input', 'commonTop_input_coupon_cellphone']);
  });
  $('.qh-tjsjh').bind('click', function() {
    _hmt.push(['_trackEvent', 'commonTop', 'submit', 'commonTop_submit_coupon_cellphone']);
  });
  $('.qh-log').bind('click', function() {
    //window.location.href='/promotion/2015-new-year.html';
    _hmt.push(['_trackEvent', 'commonTop', 'click', 'commonTop_logo']);

  });

  for (var i = 0; i < $('.qh-xz a').length; i++) {
    if ($('.qh-xz a').eq(i).text() == $('.qh-now').text())
      $('.qh-xz a').eq(i).addClass('sf-active');
  }


})
