/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransitions-input-testprop-testallprops-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function w(a){i.cssText=a}function x(a,b){return w(prefixes.join(a+";")+(b||""))}function y(a,b){return typeof a===b}function z(a,b){return!!~(""+a).indexOf(b)}function A(a,b){for(var d in a){var e=a[d];if(!z(e,"-")&&i[e]!==c)return b=="pfx"?e:!0}return!1}function B(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:y(f,"function")?f.bind(d||b):f}return!1}function C(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+m.join(d+" ")+d).split(" ");return y(b,"string")||y(b,"undefined")?A(e,b):(e=(a+" "+n.join(d+" ")+d).split(" "),B(e,b,c))}function D(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)q[c[d]]=c[d]in j;return q.list&&(q.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),q}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" "))}var d="2.6.2",e={},f=b.documentElement,g="modernizr",h=b.createElement(g),i=h.style,j=b.createElement("input"),k={}.toString,l="Webkit Moz O ms",m=l.split(" "),n=l.toLowerCase().split(" "),o={},p={},q={},r=[],s=r.slice,t,u={}.hasOwnProperty,v;!y(u,"undefined")&&!y(u.call,"undefined")?v=function(a,b){return u.call(a,b)}:v=function(a,b){return b in a&&y(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=s.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(s.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(s.call(arguments)))};return e}),o.csstransitions=function(){return C("transition")};for(var E in o)v(o,E)&&(t=E.toLowerCase(),e[t]=o[E](),r.push((e[t]?"":"no-")+t));return e.input||D(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)v(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof enableClasses!="undefined"&&enableClasses&&(f.className+=" "+(b?"":"no-")+a),e[a]=b}return e},w(""),h=j=null,e._version=d,e._domPrefixes=n,e._cssomPrefixes=m,e.testProp=function(a){return A([a])},e.testAllProps=C,e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

document.documentElement.className = ''; //Remove no-js class

/*
 * debouncedresize: special jQuery event that happens once after a window resize
 *
 * latest version and complete README available on Github:
 * https://github.com/louisremi/jquery-smartresize
 *
 * Copyright 2012 @louis_remi
 * Licensed under the MIT license.
 *
 */
(function($){var $event=$.event,$special,resizeTimeout;$special=$event.special.debouncedresize={setup:function(){$(this).on("resize",$special.handler)},teardown:function(){$(this).off("resize",$special.handler)},handler:function(event,execAsap){var context=this,args=arguments,dispatch=function(){event.type="debouncedresize";$event.dispatch.apply(context,args)};if(resizeTimeout)clearTimeout(resizeTimeout);execAsap?dispatch():resizeTimeout=setTimeout(dispatch,$special.threshold)},threshold:150}})(jQuery);

var productJSON = {}; //To be filled in on collection pages

// naturalWidth() wrapper
(function(e){function t(e){var t=new Image;t.src=e;return t}if("naturalWidth"in new Image){e.fn.naturalWidth=function(){return this[0].naturalWidth};e.fn.naturalHeight=function(){return this[0].naturalHeight};return}e.fn.naturalWidth=function(){return t(this.src).width};e.fn.naturalHeight=function(){return t(this.src).height}})(jQuery);

//willFillParent
(function(e){e.fn.willFillParent=function(t){var n=e.extend({closest:false,windowEvent:false,loadingHTML:"",changeURL:false},t);e(this).each(function(){var t=e(this);if(n.changeURL!==false&&n.changeURL!=t.attr("src")){var r=t.data("fillcont");var i=e('<span class="loading"/>').html(n.loadingHTML).appendTo(r);t.fadeOut(500,function(){e(this).remove()});t=e("<img/>").attr("src",n.changeURL).appendTo(r).data("fillcont",r)}if(t.data("willloaded")){var r=t.data("fillcont");r.css({position:r.css("position")=="static"?"relative":null,overflow:"hidden"});var s=r.outerWidth();var o=r.css("min-height")=="1px"?screen.height:r.outerHeight();var u=s/o;t.css({position:"absolute",maxWidth:"none"});if(u>t.data("nr")){var a=s/t.data("nr");t.css({width:s,height:a,left:0,top:(o-a)/2})}else{var f=o*t.data("nr");t.css({width:f,height:o,left:(s-f)/2,top:0})}}else{if(typeof t.data("fillcont")==="undefined"){if(n.closest){t.data("fillcont",t.closest(n.closest))}else{t.data("fillcont",t.parent())}}if(t.is("img")){t.imagesLoaded(function(){t.data("nw",t.width()).data("nh",t.height()).data("nr",t.data("nw")/t.data("nh")).data("willloaded",true).addClass("loaded").willFillParent();t.on("load",function(){t.css({height:"",width:""}).data("nw",t.width()).data("nh",t.height()).data("nr",t.data("nw")/t.data("nh")).willFillParent()});t.data("fillcont").find(".loading").stop().fadeOut(250,function(){e(this).remove()})})}else{var l=t.attr("width");var c=t.attr("height");t.data("nw",l).data("nh",c).data("nr",l/c).data("doFitRatherThanFill",n.doFitRatherThanFill).data("willloaded",true).willFillParent()}}});if(n.windowEvent&&n.windowEvent!=null){var r=e(this);var i=n.windowEvent+".willFillParent";e(window).on(i,function(){r.willFillParent()})}return e(this)}})(jQuery)

$(function($){
  //Staggered events on array of els
  $.fn.staggerEvent = function(ev, delay, initialDelay){
    var ev = ev, delay = delay, $els = $(this);
    if(typeof initialDelay === 'undefined') initialDelay = 0;
    setTimeout(function(){
      $els.each(function(i){
        var $this = $(this);
        setTimeout(function(){
          if(typeof ev === 'function') {
            ev($this);
          } else {
            $this.trigger(ev);
          }
        }, delay * i);
      });
    }, initialDelay);
    return $(this);
  };
  
  //Restyling select dropdowns
  $.fn.selectReplace = function(leaveLabel){
    return $(this).filter('select:not(.replaced, .noreplace)').each(function(){
      //Add formatting containers
      var $opts = $(this).find('option');
      var initialText = $opts.filter(':selected').length > 0 ? $opts.filter(':selected').text() : $opts.first().text();
      var $cont = $(this).addClass('replaced').wrap('<div class="pretty-select">').parent().addClass('id-'+$(this).attr('id'))
      .append('<span class="text"><span class="value">' + initialText + '</span></span><i class="icon-arrow3-down"></i>');
      //Label? Move inside
      if($(this).attr('id')) {
        //Find label
        var $label = $('label[for="'+$(this).attr('id')+'"]');
        //If table cells used for layout, do not move the label
        var $selectTD = $(this).closest('td');
        var $labelTD = $label.closest('td');
        if(!leaveLabel && ($selectTD.length == 0 || $labelTD.length == 0 || $selectTD[0] == $labelTD[0])) {
          //Add to dropdown
          $cont.find('.text').prepend($label);
          //Add colon, if it doesn't exist
          if($label.slice(-1) != ':') {
            $label.append(':');
          }
        }
      }
    }).on('change keyup', function(){
      $(this).siblings('.text').find('.value').html($(this).find(':selected').html());
    });
  };
  
  $('select:not(#product-select)').selectReplace().closest('.selector-wrapper').addClass('has-pretty-select');
  
  //Masonry plugin - we only have one group on each page
  var $masonry = $('.blocklayout');
  var isDoubleSized = $masonry.hasClass('double-sized');
  var isProductGrid = $masonry.find('.block:not(.product)').length == 0;
  
  function getBlockMargin() {
    var $firstBlock = $masonry.find('.block:first');
    return $firstBlock.length ? parseInt($firstBlock.css('margin-left')) : 15;
  }
  
  function columnWidth() {
    var defWidth = 250 * (isDoubleSized?2:1) + getBlockMargin() * 2;
    var cols = Math.ceil(($masonry.width() - 200) / defWidth);
    
    
    //Min two per row on mobile
    if(isProductGrid && $(window).width() < 768) {
      cols = Math.max(2, cols);
    }
    
    return Math.floor($masonry.width() / cols);
  }
  function setBlockWidths() {
    var colWidth = columnWidth();
    var marginWidth = getBlockMargin() * 2;
    $masonry.children(':not(.size-large)').css('width', colWidth - marginWidth);
    if($(window).width() < colWidth*2 + marginWidth*2) {
      $masonry.children('.size-large').css('width', colWidth - marginWidth);
    } else {
      $masonry.children('.size-large').css('width', colWidth * 2 - marginWidth);
    }
    return colWidth;
  }
  function remasonry(){
    $masonry.masonry({
      columnWidth: setBlockWidths()
    });
    $(window).trigger('reup-navbar');
  }
  //First masonry load - after images loaded
  $masonry.imagesLoaded(function(){
    $masonry.masonry({
      isResizeBound: false,
      itemSelector : '.block',
      columnWidth: setBlockWidths(),
      isLayoutInstant: true, //Built-in transforms are buggy, using CSS instead
      isAnimated: !Modernizr.csstransitions
    });
    
    $masonry.children('.block').staggerEvent(function($this){
      $this.removeClass('initially-hidden');
    }, 80);
  });
  
  //Re-up the masonry after fonts are loaded, or on resize
  $(window).on('load debouncedresize', remasonry);
  
  //An event to ensure the height of the sidebar is tall enough to avoid space
  $(window).on('reup-navbar load debouncedresize', function(){
    //Select the tallest of the window, main content, or the nav itself
    $('#navbar').css('min-height', Math.max($(window).height(), Math.max($('#content').outerHeight(), $('#navpanel').outerHeight())));
  }).trigger('reup-navbar');
  
  
  $('#reveal-header').on('click', function(){
    $('body').toggleClass('reveal-header');
    setTimeout(function(){
      //Things to change after altering the content size
      //remasonry();
      $(window).trigger('debouncedresize');
    }, 501);
    return false;
  });
  
  if(Modernizr.input.placeholder){
    //Placeholder text will vanish upon focus
    $('input[placeholder]').each(function(){
      $(this).data('placeholder', $(this).attr('placeholder'));
    });
    $(document).on('focusin', 'input[placeholder]', function(){
      $(this).attr('placeholder', '');
    }).on('focusout', 'input[placeholder]', function(){
      if($(this).val() == '' && typeof($(this).data('placeholder')) != 'undefined') {
        $(this).attr('placeholder', $(this).data('placeholder'));
      }
    });
  } else {
    //Simulate placeholder with JS
    $(document).on('focusin', 'input[placeholder]', function(){
      $(this).val('');
    }).on('focusout', 'input[placeholder]', function(){
      if($(this).val() == '' && typeof($(this).attr('placeholder')) != 'undefined') {
        $(this).val($(this).attr('placeholder'));
      }
    });
    $('input[placeholder]').trigger('focusout');
    $('input[placeholder]').parents('form').submit(function() {
      $(this).find('input[placeholder]').each(function() {
        var $input = $(this);
        if ($input.val() == $input.attr('placeholder')) {
          $input.val('');
        }
      });
    });
  }
    
  //Simple button to expand/contract a div - also toggles text from show/hide
  $(document).on('click', '.togglebutton', function(){
    $btn = $(this);
    
    //Close any other buttons within group first
    if($btn.is('[data-exclusive-group]')) {
      $('[data-exclusive-group="'+$btn.data('exclusive-group')+'"]:not([data-target="'+$btn.data('target')+'"])').each(function(){
        $($(this).data('target')).slideUp();
        $(this).trigger('eval-toggle');
      });
    }
    
    $($(this).data('target')).slideToggle($(this).data('speed'), function(){
      $btn.trigger('eval-toggle');
      
      //Reload masonry if within it
      $(this).closest('.blocklayout').each(function(){
        remasonry();
      });
    });
    return false;
  }).on('eval-toggle', '.togglebutton[data-text-hide]', function(){
    $tar = $($(this).data('target'));
    //Show/hide text
    if($tar.is(':visible')) {
      $(this).toggleClass('expanded', true).html($(this).data('text-hide'));
    } else {
      $(this).toggleClass('expanded', false).html($(this).data('text-show'));
    }
  });
  
  //Redirect dropdowns
  $(document).on('change', 'select.navdrop', function(){
    window.location = $(this).val();
  });
    
  //Scroll-to-top button for long pages
  $(window).scroll(function(){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > 500) {
      $('#scrolltotop').css('bottom', -8);
    } else {
      $('#scrolltotop').css('bottom', -100);
    }
  });
  $('#scrolltotop').click(function(){
    $('html:not(:animated),body:not(:animated)').animate({ scrollTop: 0}, 500 );
    return false;
  });
    
  //General purpose lightbox
  $('a[rel="fancybox"]').fancybox({ titleShow: false });
  
  //Main nav expanders
  $(document).on('click', '#navpanel .mainnav .title', function(){
    $(this).parent().addClass('active').siblings().removeClass('active');
    $(window).trigger('reup-navbar');
  });
  var navSpeed = 150;
  $(document).on('click', '#navpanel .mainnav button', function(){
    //Prep animation on sublist
    if($(this).parent().hasClass('expanded')) {
      $(this).html('<span class="icon-plus"></span>');
      $(this).siblings('ul').stop(true,true).css('display', 'block').slideUp(navSpeed, 'linear', function(){
        $(this).parent().toggleClass('expanded');
        $(window).trigger('reup-navbar');
      });
    } else {
      $(this).html('<span class="icon-cross"></span>');
      $(this).siblings('ul').stop(true,true).css('display', 'none').slideDown(navSpeed, 'linear', function(){
        $(window).trigger('reup-navbar');
      });
      $(this).parent().toggleClass('expanded');
    }
    $(window).trigger('reup-navbar');
  });
  $(document).on('click', '#navpanel .mainnav a[href="#"]', function(){
    $(this).siblings('button').trigger('click');
    return false;
  });
  
  //Search box, add focus class to wrapper
  $(document).on('focusin focusout','.panelinputblock .panelinputinner input.text', function(e){
    $(this).closest('.panelinputblock').toggleClass('focus', e.type == 'focusin');
  });
    
  
    //AJAX add to cart
    var shopifyAjaxAddURL = '/cart/add.js';
    var shopifyAjaxStorePageURL = '/search';
    
    $(document).on('submit', 'form[action="/cart/add"]:not(.noAJAX)', function(e) {
        var $form = $(this);
        //Disable add button
        $form.find('input[type="submit"]').attr('disabled', 'disabled').val("Adding...");
        
        //Add to cart
        $.post(shopifyAjaxAddURL, $form.serialize(), function(data) {
            //Enable add button
            $form.find('input[type="submit"]').removeAttr('disabled').val("Add to Cart");
            
            //Added, show message & update cart display
            window.showQuickPopup("Thank you! \u003cbr\u003e\u003ca class=\"button slim\" href=\"\/cart\"\u003eGo to cart \u0026rarr;\u003c\/a\u003e", $form.find('input[type="submit"]:first'));
            $.get(shopifyAjaxStorePageURL, function(data){
              var $newCartObj = $(data).find('#navpanel .cartsummary');
              var $currCart = $('#navpanel .cartsummary');
              if($currCart.length == 0) {
                $('#shoplogo').after($newCartObj);
              } else {
                $currCart.html($newCartObj.html());
              }
              
              
            });
        }, 'text').error(function(data) {
            //Enable add button
            $form.find('input[type="submit"]').removeAttr('disabled').val("Add to Cart");
            
            //Not added, show message
            if(typeof(data) != 'undefined' && typeof(data.status) != 'undefined') {
                var jsonRes = $.parseJSON(data.responseText);
                window.showQuickPopup(jsonRes.description, $form.find('input[type="submit"]:first'));
            } else {
                //Some unknown error? Disable ajax and add the old-fashioned way.
                $form.addClass('noAJAX');
                $form.submit();
            }
        });
        return false;
    });
    //Function to show a quick generic text popup above an element
    window.showQuickPopup = function(message, $origin){
      var $popup = $('<div>').addClass('simple-popup hidden');
      var offs = $origin.offset();
      $('body').append($popup);
      $popup.html(message).css({ 'left':offs.left - ($popup.outerWidth() - $origin.outerWidth()), 'top':offs.top });
      $popup.css('margin-top', - $popup.outerHeight() - 10).removeClass('hidden');
      setTimeout(function(){
        $popup.addClass('hidden');
        setTimeout(function(){
          $popup.remove();
        }, 500);
      }, 4000);
    };
    
    
    /// Collection sorting. Code courtesy of the reliably-brilliant Caroline: https://gist.github.com/carolineschnapp/11352987
    var $sortBy = $('#sort-by');
     if($sortBy.length > 0) {
       Shopify.queryParams = {};
       if (location.search.length) {
         for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
           aKeyValue = aCouples[i].split('=');
           if (aKeyValue.length > 1) {
             Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
           }
         }
       }
       $sortBy.val($sortBy.data('initval')).trigger('change').bind('change', function() {
         Shopify.queryParams.sort_by = $(this).val();
         location.search = $.param(Shopify.queryParams);
       });
     }
     
     /// Quick buy popup
     $(document).on('click', '.block.product .quick-buy', function(){
       var $prod = $(this).closest('.product');
       var prevIndex = $prod.index('.product') - 1;
       var nextIndex = $prod.index('.product') + 1;
       if(nextIndex > $prod.siblings('.product').length) {
         nextIndex = -1;
       }
       var $template = $prod.find('[id^=product-block-template-]');
       $.fancybox.showActivity();
       $($template.html()).imagesLoaded(function(){
         $.fancybox({
           padding: 0,
           showCloseButton: false,
           content: $($template.html()).prepend(
             ['<div class="action-icons">',
              '<a href="#" class="prev-item action-icon" data-idx="',prevIndex,'"><span class="icon-arrow-left"></span></a>',
              '<a href="#" class="next-item action-icon" data-idx="',nextIndex,'"><span class="icon-arrow-right"></span></a>',
              '<a href="#" class="close-box action-icon"><span class="icon-cross"></span></a>',
              '</div>'].join('')
           ),
           onComplete: function(){
             
             
             //Init product form, if required
             if($('#product-form select[name=id]').length) {
               var prodIdx = 'id' + $template.attr('id').substr('product-block-template-'.length);
               initOptionSelectors(productJSON[prodIdx]);
             }
             $('#product-gallery').imagesLoaded($.fancybox.resize);
           }
         });
       });
       return false;
     });
     $(document).on('click', '.quickbuy-form .close-box', function(){
       $.fancybox.close();
       return false;
     }).on('click', '.quickbuy-form .prev-item, .quickbuy-form .next-item', function(){
       $('.block.product:eq('+$(this).data('idx')+') .quick-buy').click();
       return false;
     });
     
  /// Product gallery
  $(document).on('click', '#product-gallery .main-image a', function(){
    if($('#thumbs').length) {
      var imgs = Array();
      $('#thumbs a').each(function(){
        imgs.push({
          href: $(this).attr('href'),
          title: $(this).attr('title')
        });
      });
      var opts = {
        index: $(this).data('index')
      };
      $.fancybox(imgs, opts);
    } else {
      $.fancybox([{href: $(this).attr('href'), title:$(this).attr('title')}]);
    }
    return false;
  });
  ///Click thumb
  $(document).on('click', '#thumbs a', function(){
    //Fix container height
    var $main = $('#product-gallery .main-image');
    $main.css({
      height: $main.height()
    });
    
    //Change to new image
    var $toChange = $main.find('a, .bip');
    $toChange.attr({
      'href': $(this).attr('href'),
      'title': $(this).attr('title')
    }).data('index', $(this).data('index'));
    $toChange.find('img').attr('src', $(this).find('img').attr('src'));
    
    //Animate height
    $main.animate({ height: $toChange.height() }, 200, function(){
      $(this).css('height', '');
    });
    
    return false;
  });
     
  ///Infinite scroll
  if($('.pagination').length == 1 && $('.blocklayout.do-infinite').length == 1) {
    var $pager = $('.pagination');
    var $moreBtn = $('<a href="'+$pager.find('a.next').attr('href')+'" class="infiniscroll" />').html("More products");
    $pager.empty().append($moreBtn);
    
    $pager.on('click', 'a.infiniscroll:not(.loading)', function(){
      $moreBtn.addClass('loading').html("Loading...");
      $.get($pager.find('a').attr('href'), function(data){
        var $data = $($.parseHTML(data));
        var $newbies = $data.find('.blocklayout .block').appendTo('.blocklayout');
        $newbies.imagesLoaded(function(){
          //Add to masonry, & reveal
          $newbies.css('visibility', 'hidden');
          $masonry.masonry('appended', $newbies);
          remasonry();
          $newbies.staggerEvent(function($this){
            $this.css('visibility', 'visible').removeClass('initially-hidden');
          }, 100);

          //Any more?
          var $next = $data.find('.pagination .next');
          if($next.length == 0) {
            //We are out of products
            $pager.html('<span class="infiniscroll no-more">'+"No more products"+'</span>').fadeOut(5000);
          } else {
            //More to show
            $moreBtn.attr('href', $next.attr('href')).removeClass('loading').html("More products");
          }
        });
      });
      return false;
    });
    
    //Scroll event
    $(window).on('scroll', function(){
      if($(window).scrollTop() + $(window).height() > $pager.offset().top) {
        $pager.find('a').trigger('click');
      }
    });
  }
     
  ///Any slideshows?
  $('.flexslider').each(function(){
    $(this).flexslider({
      animation: 'fade',
      slideshowSpeed: 7000,
      animationSpeed: 600,
      touch: false,
      controlNav: false,
      directionNav: $(this).find('img').length > 1,
      prevText: '<span class="icon-arrow-left"></span>',
      nextText: '<span class="icon-arrow-right"></span>'
    });
  });
     
  ///Overlay text to scale
  /// Text that scales down - scale it up/down based on column width
  function resizeScalingTextFromColumn() {
    $('.scaled-text').each(function(){
      var $base = $(this).closest('.scaled-text-base');
      var scale = $base.width() / 1200;
      $(this).css('font-size', (scale * 100) + '%');
    });
  }
  resizeScalingTextFromColumn(); //Now
  $(window).on('debouncedresize', resizeScalingTextFromColumn);
     
  ///Full-height slideshows
  if($('.flexslider.type-full-page').length) {
    $(window).on('debouncedresize checkfullheightsliders', function(){
      $('.flexslider.type-full-page').each(function(){
        $(this).css('height', $(window).height());
      });
    }).trigger('checkfullheightsliders');
    
    $('.flexslider.type-full-page').find('.slides, .slide').css('height', '100%');
    $('.flexslider.type-full-page').find('img').willFillParent({ closest: 'li', windowEvent: 'debouncedresize' });
  }
  
  /// Custom share buttons
  $('.sharing').on('click', 'a', function(e){
    var $parent = $(this).parent();
    if($parent.hasClass('twitter')) {
      e.preventDefault();
      var url = $(this).attr('href');
      var width  = 575,
          height = 450,
          left   = ($(window).width()  - width)  / 2,
          top    = ($(window).height() - height) / 2,
          opts   = 'status=1, toolbar=0, location=0, menubar=0, directories=0, scrollbars=0' +
          ',width='  + width  +
          ',height=' + height +
          ',top='    + top    +
          ',left='   + left;
      window.open(url, 'Twitter', opts);

    } else if($parent.hasClass('facebook')) {
      e.preventDefault();
      var url = $(this).attr('href');
      var width  = 626,
          height = 256,
          left   = ($(window).width()  - width)  / 2,
          top    = ($(window).height() - height) / 2,
          opts   = 'status=1, toolbar=0, location=0, menubar=0, directories=0, scrollbars=0' +
          ',width='  + width  +
          ',height=' + height +
          ',top='    + top    +
          ',left='   + left;
      window.open(url, 'Facebook', opts);

    } else if($parent.hasClass('pinterest')) {
      e.preventDefault();
      var url = $(this).attr('href');
      var width  = 700,
          height = 550,
          left   = ($(window).width()  - width)  / 2,
          top    = ($(window).height() - height) / 2,
          opts   = 'status=1, toolbar=0, location=0, menubar=0, directories=0, scrollbars=0' +
          ',width='  + width  +
          ',height=' + height +
          ',top='    + top    +
          ',left='   + left;
      window.open(url, 'Pinterest', opts);

    } else if($parent.hasClass('google')) {
      e.preventDefault();
      var url = $(this).attr('href');
      var width  = 550,
          height = 450,
          left   = ($(window).width()  - width)  / 2,
          top    = ($(window).height() - height) / 2,
          opts   = 'status=1, toolbar=0, location=0, menubar=0, directories=0, scrollbars=0' +
          ',width='  + width  +
          ',height=' + height +
          ',top='    + top    +
          ',left='   + left;
      window.open(url, 'Google+', opts);

    }
  });
});