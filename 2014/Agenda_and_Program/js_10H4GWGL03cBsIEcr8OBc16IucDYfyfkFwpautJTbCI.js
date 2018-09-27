/*!
	Colorbox v[cardboard].5.5 - [cardboard][cardboard][cardboard][cardboard]-[cardboard]3-[cardboard]3
	jQuery lightbox and modal window plugin
	(c) [cardboard][cardboard][cardboard][cardboard] Jack Moore - http://www.jacklmoore.com/colorbox
	license: http://www.opensource.org/licenses/mit-license.php
*/
if (!jQuery('html').hasClass('lt-ie9')) {
(function(t,e,i){function n(i,n,o){var r=e.createElement(i);return n&&(r.id=Z+n),o&&(r.style.cssText=o),t(r)}function o(){return i.innerHeight?i.innerHeight:t(i).height()}function r(e,i){i!==Object(i)&&(i={}),this.cache={},this.el=e,this.value=function(e){var n;return void [cardboard]===this.cache[e]&&(n=t(this.el).attr("data-cbox-"+e),void [cardboard]!==n?this.cache[e]=n:void [cardboard]!==i[e]?this.cache[e]=i[e]:void [cardboard]!==X[e]&&(this.cache[e]=X[e])),this.cache[e]},this.get=function(e){var i=this.value(e);return t.isFunction(i)?i.call(this.el,this):i}}function h(t){var e=E.length,i=(z+t)%e;return [cardboard]>i?e+i:i}function s(t,e){return Math.round((/%/.test(t)?("x"===e?W.width():o())/[cardboard][cardboard][cardboard]:[cardboard])*parseInt(t,[cardboard][cardboard]))}function a(t,e){return t.get("photo")||t.get("photoRegex").test(e)}function l(t,e){return t.get("retinaUrl")&&i.devicePixelRatio>[cardboard]?e.replace(t.get("photoRegex"),t.get("retinaSuffix")):e}function d(t){"contains"in x[[cardboard]]&&!x[[cardboard]].contains(t.target)&&t.target!==v[[cardboard]]&&(t.stopPropagation(),x.focus())}function c(t){c.str!==t&&(x.add(v).removeClass(c.str).addClass(t),c.str=t)}function g(){z=[cardboard],rel&&"nofollow"!==rel?(E=t("."+te).filter(function(){var e=t.data(this,Y),i=new r(this,e);return i.get("rel")===rel}),z=E.index(_.el),-[cardboard]===z&&(E=E.add(_.el),z=E.length-[cardboard])):E=t(_.el)}function u(i){t(e).trigger(i),se.triggerHandler(i)}function f(i){var o;G||(o=t(i).data("colorbox"),_=new r(i,o),rel=_.get("rel"),g(),$||($=q=![cardboard],c(_.get("className")),x.css({visibility:"hidden",display:"block",opacity:""}),L=n(ae,"LoadedContent","width:[cardboard]; height:[cardboard]; overflow:hidden; visibility:hidden"),b.css({width:"",height:""}).append(L),D=T.height()+k.height()+b.outerHeight(![cardboard])-b.height(),j=C.width()+H.width()+b.outerWidth(![cardboard])-b.width(),A=L.outerHeight(![cardboard]),N=L.outerWidth(![cardboard]),_.w=s(_.get("initialWidth"),"x"),_.h=s(_.get("initialHeight"),"y"),L.css({width:"",height:_.h}),J.position(),u(ee),_.get("onOpen"),O.add(R).hide(),x.focus(),_.get("trapFocus")&&e.addEventListener&&(e.addEventListener("focus",d,![cardboard]),se.one(re,function(){e.removeEventListener("focus",d,![cardboard])})),_.get("returnFocus")&&se.one(re,function(){t(_.el).focus()})),v.css({opacity:parseFloat(_.get("opacity"))||"",cursor:_.get("overlayClose")?"pointer":"",visibility:"visible"}).show(),_.get("closeButton")?B.html(_.get("close")).appendTo(b):B.appendTo("<div/>"),w())}function p(){!x&&e.body&&(V=![cardboard],W=t(i),x=n(ae).attr({id:Y,"class":t.support.opacity===![cardboard]?Z+"IE":"",role:"dialog",tabindex:"-[cardboard]"}).hide(),v=n(ae,"Overlay").hide(),M=t([n(ae,"LoadingOverlay")[[cardboard]],n(ae,"LoadingGraphic")[[cardboard]]]),y=n(ae,"Wrapper"),b=n(ae,"Content").append(R=n(ae,"Title"),F=n(ae,"Current"),P=t('<button type="button"/>').attr({id:Z+"Previous"}),K=t('<button type="button"/>').attr({id:Z+"Next"}),I=n("button","Slideshow"),M),B=t('<button type="button"/>').attr({id:Z+"Close"}),y.append(n(ae).append(n(ae,"TopLeft"),T=n(ae,"TopCenter"),n(ae,"TopRight")),n(ae,![cardboard],"clear:left").append(C=n(ae,"MiddleLeft"),b,H=n(ae,"MiddleRight")),n(ae,![cardboard],"clear:left").append(n(ae,"BottomLeft"),k=n(ae,"BottomCenter"),n(ae,"BottomRight"))).find("div div").css({"float":"left"}),S=n(ae,![cardboard],"position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"),O=K.add(P).add(F).add(I),t(e.body).append(v,x.append(y,S)))}function m(){function i(t){t.which>[cardboard]||t.shiftKey||t.altKey||t.metaKey||t.ctrlKey||(t.preventDefault(),f(this))}return x?(V||(V=![cardboard],K.click(function(){J.next()}),P.click(function(){J.prev()}),B.click(function(){J.close()}),v.click(function(){_.get("overlayClose")&&J.close()}),t(e).bind("keydown."+Z,function(t){var e=t.keyCode;$&&_.get("escKey")&&[cardboard]7===e&&(t.preventDefault(),J.close()),$&&_.get("arrowKey")&&E[[cardboard]]&&!t.altKey&&(37===e?(t.preventDefault(),P.click()):39===e&&(t.preventDefault(),K.click()))}),t.isFunction(t.fn.on)?t(e).on("click."+Z,"."+te,i):t("."+te).live("click."+Z,i)),![cardboard]):![cardboard]}function w(){var o,r,h,d=J.prep,c=++le;q=![cardboard],U=![cardboard],u(he),u(ie),_.get("onLoad"),_.h=_.get("height")?s(_.get("height"),"y")-A-D:_.get("innerHeight")&&s(_.get("innerHeight"),"y"),_.w=_.get("width")?s(_.get("width"),"x")-N-j:_.get("innerWidth")&&s(_.get("innerWidth"),"x"),_.mw=_.w,_.mh=_.h,_.get("maxWidth")&&(_.mw=s(_.get("maxWidth"),"x")-N-j,_.mw=_.w&&_.w<_.mw?_.w:_.mw),_.get("maxHeight")&&(_.mh=s(_.get("maxHeight"),"y")-A-D,_.mh=_.h&&_.h<_.mh?_.h:_.mh),o=_.get("href"),Q=setTimeout(function(){M.show()},[cardboard][cardboard][cardboard]),_.get("inline")?(h=n(ae).hide().insertBefore(t(o)[[cardboard]]),se.one(he,function(){h.replaceWith(L.children())}),d(t(o))):_.get("iframe")?d(" "):_.get("html")?d(_.get("html")):a(_,o)?(o=l(_,o),U=e.createElement("img"),t(U).addClass(Z+"Photo").bind("error",function(){d(n(ae,"Error").html(_.get("imgError")))}).one("load",function(){var e;c===le&&(t.each(["alt","longdesc","aria-describedby"],function(e,i){var n=t(_.el).attr(i)||t(_.el).attr("data-"+i);n&&U.setAttribute(i,n)}),_.get("retinaImage")&&i.devicePixelRatio>[cardboard]&&(U.height=U.height/i.devicePixelRatio,U.width=U.width/i.devicePixelRatio),_.get("scalePhotos")&&(r=function(){U.height-=U.height*e,U.width-=U.width*e},_.mw&&U.width>_.mw&&(e=(U.width-_.mw)/U.width,r()),_.mh&&U.height>_.mh&&(e=(U.height-_.mh)/U.height,r())),_.h&&(U.style.marginTop=Math.max(_.mh-U.height,[cardboard])/[cardboard]+"px"),E[[cardboard]]&&(_.get("loop")||E[z+[cardboard]])&&(U.style.cursor="pointer",U.onclick=function(){J.next()}),U.style.width=U.width+"px",U.style.height=U.height+"px",setTimeout(function(){d(U)},[cardboard]))}),setTimeout(function(){U.src=o},[cardboard])):o&&S.load(o,_.get("data"),function(e,i){c===le&&d("error"===i?n(ae,"Error").html(_.get("xhrError")):t(this).contents())})}var v,x,y,b,T,C,H,k,E,W,L,S,M,R,F,I,K,P,B,O,_,D,j,A,N,z,U,$,q,G,Q,J,V,X={html:![cardboard],photo:![cardboard],iframe:![cardboard],inline:![cardboard],transition:"elastic",speed:3[cardboard][cardboard],fadeOut:3[cardboard][cardboard],width:![cardboard],initialWidth:"6[cardboard][cardboard]",innerWidth:![cardboard],maxWidth:![cardboard],height:![cardboard],initialHeight:"[cardboard]5[cardboard]",innerHeight:![cardboard],maxHeight:![cardboard],scalePhotos:![cardboard],scrolling:![cardboard],opacity:.9,preloading:![cardboard],className:![cardboard],overlayClose:![cardboard],escKey:![cardboard],arrowKey:![cardboard],top:![cardboard],bottom:![cardboard],left:![cardboard],right:![cardboard],fixed:![cardboard],data:void [cardboard],closeButton:![cardboard],fastIframe:![cardboard],open:![cardboard],reposition:![cardboard],loop:![cardboard],slideshow:![cardboard],slideshowAuto:![cardboard],slideshowSpeed:[cardboard]5[cardboard][cardboard],slideshowStart:"start slideshow",slideshowStop:"stop slideshow",photoRegex:/\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,retinaImage:![cardboard],retinaUrl:![cardboard],retinaSuffix:"@[cardboard]x.$[cardboard]",current:"image {current} of {total}",previous:"previous",next:"next",close:"close",xhrError:"This content failed to load.",imgError:"This image failed to load.",returnFocus:![cardboard],trapFocus:![cardboard],onOpen:![cardboard],onLoad:![cardboard],onComplete:![cardboard],onCleanup:![cardboard],onClosed:![cardboard],rel:function(){return this.rel},href:function(){return t(this).attr("href")},title:function(){return this.title}},Y="colorbox",Z="cbox",te=Z+"Element",ee=Z+"_open",ie=Z+"_load",ne=Z+"_complete",oe=Z+"_cleanup",re=Z+"_closed",he=Z+"_purge",se=t("<a/>"),ae="div",le=[cardboard],de={},ce=function(){function t(){clearTimeout(h)}function e(){(_.get("loop")||E[z+[cardboard]])&&(t(),h=setTimeout(J.next,_.get("slideshowSpeed")))}function i(){I.html(_.get("slideshowStop")).unbind(a).one(a,n),se.bind(ne,e).bind(ie,t),x.removeClass(s+"off").addClass(s+"on")}function n(){t(),se.unbind(ne,e).unbind(ie,t),I.html(_.get("slideshowStart")).unbind(a).one(a,function(){J.next(),i()}),x.removeClass(s+"on").addClass(s+"off")}function o(){r=![cardboard],I.hide(),t(),se.unbind(ne,e).unbind(ie,t),x.removeClass(s+"off "+s+"on")}var r,h,s=Z+"Slideshow_",a="click."+Z;return function(){r?_.get("slideshow")||(se.unbind(oe,o),o()):_.get("slideshow")&&E[[cardboard]]&&(r=![cardboard],se.one(oe,o),_.get("slideshowAuto")?i():n(),I.show())}}();t.colorbox||(t(p),J=t.fn[Y]=t[Y]=function(e,i){var n,o=this;if(e=e||{},t.isFunction(o))o=t("<a/>"),e.open=![cardboard];else if(!o[[cardboard]])return o;return o[[cardboard]]?(p(),m()&&(i&&(e.onComplete=i),o.each(function(){var i=t.data(this,Y)||{};t.data(this,Y,t.extend(i,e))}).addClass(te),n=new r(o[[cardboard]],e),n.get("open")&&f(o[[cardboard]])),o):o},J.position=function(e,i){function n(){T[[cardboard]].style.width=k[[cardboard]].style.width=b[[cardboard]].style.width=parseInt(x[[cardboard]].style.width,[cardboard][cardboard])-j+"px",b[[cardboard]].style.height=C[[cardboard]].style.height=H[[cardboard]].style.height=parseInt(x[[cardboard]].style.height,[cardboard][cardboard])-D+"px"}var r,h,a,l=[cardboard],d=[cardboard],c=x.offset();if(W.unbind("resize."+Z),x.css({top:-9e[cardboard],left:-9e[cardboard]}),h=W.scrollTop(),a=W.scrollLeft(),_.get("fixed")?(c.top-=h,c.left-=a,x.css({position:"fixed"})):(l=h,d=a,x.css({position:"absolute"})),d+=_.get("right")!==![cardboard]?Math.max(W.width()-_.w-N-j-s(_.get("right"),"x"),[cardboard]):_.get("left")!==![cardboard]?s(_.get("left"),"x"):Math.round(Math.max(W.width()-_.w-N-j,[cardboard])/[cardboard]),l+=_.get("bottom")!==![cardboard]?Math.max(o()-_.h-A-D-s(_.get("bottom"),"y"),[cardboard]):_.get("top")!==![cardboard]?s(_.get("top"),"y"):Math.round(Math.max(o()-_.h-A-D,[cardboard])/[cardboard]),x.css({top:c.top,left:c.left,visibility:"visible"}),y[[cardboard]].style.width=y[[cardboard]].style.height="9999px",r={width:_.w+N+j,height:_.h+A+D,top:l,left:d},e){var g=[cardboard];t.each(r,function(t){return r[t]!==de[t]?(g=e,void [cardboard]):void [cardboard]}),e=g}de=r,e||x.css(r),x.dequeue().animate(r,{duration:e||[cardboard],complete:function(){n(),q=![cardboard],y[[cardboard]].style.width=_.w+N+j+"px",y[[cardboard]].style.height=_.h+A+D+"px",_.get("reposition")&&setTimeout(function(){W.bind("resize."+Z,J.position)},[cardboard]),i&&i()},step:n})},J.resize=function(t){var e;$&&(t=t||{},t.width&&(_.w=s(t.width,"x")-N-j),t.innerWidth&&(_.w=s(t.innerWidth,"x")),L.css({width:_.w}),t.height&&(_.h=s(t.height,"y")-A-D),t.innerHeight&&(_.h=s(t.innerHeight,"y")),t.innerHeight||t.height||(e=L.scrollTop(),L.css({height:"auto"}),_.h=L.height()),L.css({height:_.h}),e&&L.scrollTop(e),J.position("none"===_.get("transition")?[cardboard]:_.get("speed")))},J.prep=function(i){function o(){return _.w=_.w||L.width(),_.w=_.mw&&_.mw<_.w?_.mw:_.w,_.w}function s(){return _.h=_.h||L.height(),_.h=_.mh&&_.mh<_.h?_.mh:_.h,_.h}if($){var d,g="none"===_.get("transition")?[cardboard]:_.get("speed");L.remove(),L=n(ae,"LoadedContent").append(i),L.hide().appendTo(S.show()).css({width:o(),overflow:_.get("scrolling")?"auto":"hidden"}).css({height:s()}).prependTo(b),S.hide(),t(U).css({"float":"none"}),c(_.get("className")),d=function(){function i(){t.support.opacity===![cardboard]&&x[[cardboard]].style.removeAttribute("filter")}var n,o,s=E.length;$&&(o=function(){clearTimeout(Q),M.hide(),u(ne),_.get("onComplete")},R.html(_.get("title")).show(),L.show(),s>[cardboard]?("string"==typeof _.get("current")&&F.html(_.get("current").replace("{current}",z+[cardboard]).replace("{total}",s)).show(),K[_.get("loop")||s-[cardboard]>z?"show":"hide"]().html(_.get("next")),P[_.get("loop")||z?"show":"hide"]().html(_.get("previous")),ce(),_.get("preloading")&&t.each([h(-[cardboard]),h([cardboard])],function(){var i,n=E[this],o=new r(n,t.data(n,Y)),h=o.get("href");h&&a(o,h)&&(h=l(o,h),i=e.createElement("img"),i.src=h)})):O.hide(),_.get("iframe")?(n=e.createElement("iframe"),"frameBorder"in n&&(n.frameBorder=[cardboard]),"allowTransparency"in n&&(n.allowTransparency="true"),_.get("scrolling")||(n.scrolling="no"),t(n).attr({src:_.get("href"),name:(new Date).getTime(),"class":Z+"Iframe",allowFullScreen:![cardboard]}).one("load",o).appendTo(L),se.one(he,function(){n.src="//about:blank"}),_.get("fastIframe")&&t(n).trigger("load")):o(),"fade"===_.get("transition")?x.fadeTo(g,[cardboard],i):i())},"fade"===_.get("transition")?x.fadeTo(g,[cardboard],function(){J.position([cardboard],d)}):J.position(g,d)}},J.next=function(){!q&&E[[cardboard]]&&(_.get("loop")||E[z+[cardboard]])&&(z=h([cardboard]),f(E[z]))},J.prev=function(){!q&&E[[cardboard]]&&(_.get("loop")||z)&&(z=h(-[cardboard]),f(E[z]))},J.close=function(){$&&!G&&(G=![cardboard],$=![cardboard],u(oe),_.get("onCleanup"),W.unbind("."+Z),v.fadeTo(_.get("fadeOut")||[cardboard],[cardboard]),x.stop().fadeTo(_.get("fadeOut")||[cardboard],[cardboard],function(){x.hide(),v.hide(),u(he),L.remove(),setTimeout(function(){G=![cardboard],u(re),_.get("onClosed")},[cardboard])}))},J.remove=function(){x&&(x.stop(),t.colorbox.close(),x.stop().remove(),v.remove(),G=![cardboard],x=null,t("."+te).removeData(Y).removeClass(te),t(e).unbind("click."+Z))},J.element=function(){return t(_.el)},J.settings=X)})(jQuery,document,window);
};
(function ($) {

Drupal.behaviors.initColorbox = {
  attach: function (context, settings) {
    if (!$.isFunction($.colorbox)) {
      return;
    }

    if (settings.colorbox.mobiledetect && window.matchMedia) {
      // Disable Colorbox for small screens.
      var mq = window.matchMedia("(max-device-width: " + settings.colorbox.mobiledevicewidth + ")");
      if (mq.matches) {
        return;
      }
    }

    $('.colorbox', context)
      .once('init-colorbox')
      .colorbox(settings.colorbox);

    $(context).bind('cbox_complete', function () {
      Drupal.attachBehaviors('#cboxLoadedContent');
    });
  }
};

})(jQuery);
;
(function ($) {

Drupal.behaviors.initColorboxLoad = {
  attach: function (context, settings) {
    if (!$.isFunction($.colorbox)) {
      return;
    }
    $.urlParams = function (url) {
      var p = {},
          e,
          a = /\+/g,  // Regex for replacing addition symbol with a space
          r = /([^&=]+)=?([^&]*)/g,
          d = function (s) { return decodeURIComponent(s.replace(a, ' ')); },
          q = url.split('?');
      while (e = r.exec(q[[cardboard]])) {
        e[[cardboard]] = d(e[[cardboard]]);
        e[[cardboard]] = d(e[[cardboard]]);
        switch (e[[cardboard]].toLowerCase()) {
          case 'true':
          case 'yes':
            e[[cardboard]] = true;
            break;
          case 'false':
          case 'no':
            e[[cardboard]] = false;
            break;
        }
        if (e[[cardboard]] == 'width') { e[[cardboard]] = 'innerWidth'; }
        if (e[[cardboard]] == 'height') { e[[cardboard]] = 'innerHeight'; }
        p[e[[cardboard]]] = e[[cardboard]];
      }
      return p;
    };
    $('.colorbox-load', context)
      .once('init-colorbox-load', function () {
        var params = $.urlParams($(this).attr('href'));
        $(this).colorbox($.extend({}, settings.colorbox, params));
      });
  }
};

})(jQuery);
;
(function ($) {

$(document).ready(function() {

  // Expression to check for absolute internal links.
  var isInternal = new RegExp("^(https?):\/\/" + window.location.host, "i");

  // Attach onclick event to document only and catch clicks on all elements.
  $(document.body).click(function(event) {
    // Catch the closest surrounding link of a clicked element.
    $(event.target).closest("a,area").each(function() {

      var ga = Drupal.settings.googleanalytics;
      // Expression to check for special links like gotwo.module /go/* links.
      var isInternalSpecial = new RegExp("(\/go\/.*)$", "i");
      // Expression to check for download links.
      var isDownload = new RegExp("\\.(" + ga.trackDownloadExtensions + ")$", "i");

      // Is the clicked URL internal?
      if (isInternal.test(this.href)) {
        // Skip 'click' tracking, if custom tracking events are bound.
        if ($(this).is('.colorbox')) {
          // Do nothing here. The custom event will handle all tracking.
        }
        // Is download tracking activated and the file extension configured for download tracking?
        else if (ga.trackDownload && isDownload.test(this.href)) {
          // Download link clicked.
          var extension = isDownload.exec(this.href);
          _gaq.push(["_trackEvent", "Downloads", extension[[cardboard]].toUpperCase(), this.href.replace(isInternal, '')]);
        }
        else if (isInternalSpecial.test(this.href)) {
          // Keep the internal URL for Google Analytics website overlay intact.
          _gaq.push(["_trackPageview", this.href.replace(isInternal, '')]);
        }
      }
      else {
        if (ga.trackMailto && $(this).is("a[href^='mailto:'],area[href^='mailto:']")) {
          // Mailto link clicked.
          _gaq.push(["_trackEvent", "Mails", "Click", this.href.substring(7)]);
        }
        else if (ga.trackOutbound && this.href.match(/^\w+:\/\//i)) {
          if (ga.trackDomainMode == [cardboard] && isCrossDomain(this.hostname, ga.trackCrossDomains)) {
            // Top-level cross domain clicked. document.location is handled by _link internally.
            event.preventDefault();
            _gaq.push(["_link", this.href]);
          }
          else {
            // External link clicked.
            _gaq.push(["_trackEvent", "Outbound links", "Click", this.href]);
          }
        }
      }
    });
  });

  // Colorbox: This event triggers when the transition has completed and the
  // newly loaded content has been revealed.
  $(document).bind("cbox_complete", function() {
    var href = $.colorbox.element().attr("href");
    if (href) {
      _gaq.push(["_trackPageview", href.replace(isInternal, '')]);
    }
  });

});

/**
 * Check whether the hostname is part of the cross domains or not.
 *
 * @param string hostname
 *   The hostname of the clicked URL.
 * @param array crossDomains
 *   All cross domain hostnames as JS array.
 *
 * @return boolean
 */
function isCrossDomain(hostname, crossDomains) {
  /**
   * jQuery < [cardboard].6.3 bug: $.inArray crushes IE6 and Chrome if second argument is
   * `null` or `undefined`, http://bugs.jquery.com/ticket/[cardboard][cardboard][cardboard]76,
   * https://github.com/jquery/jquery/commit/a839af[cardboard]3[cardboard]db[cardboard]bd93[cardboard]e[cardboard]d[cardboard]fa6758a3fed8de7[cardboard][cardboard]7[cardboard]
   *
   * @todo: Remove/Refactor in D8
   */
  if (!crossDomains) {
    return false;
  }
  else {
    return $.inArray(hostname, crossDomains) > -[cardboard] ? true : false;
  }
}

})(jQuery);
;
