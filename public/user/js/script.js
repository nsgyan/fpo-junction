var MINIMALDOG=MINIMALDOG||{};!function(a){"use strict";var t=a(window),e=a(document),i=a(".js-go-top-el"),s=a(".js-overlay-bg");a(".single-body").fitVids(),MINIMALDOG.ajaxLazyload={lazyload_start:function(){var t=a(".site-wrapper");imagesLoaded(t,function(){a(".post__thumb").find("img").each(function(){var t=a(this);if(t.data("src"))var e=setInterval(function(){t.addClass("atbs-animation-lazyload"),t.removeAttr("srcset").attr("srcset",t.data("srcset")),t.removeAttr("src").attr("src",t.data("src")),t.removeAttr("data-src"),t.removeAttr("data-srcset"),clearInterval(e)},500)})})}},MINIMALDOG.header={init:function(){MINIMALDOG.header.pagiButton(),MINIMALDOG.header.ajaxSearch(),MINIMALDOG.header.ajaxMegamenu(),MINIMALDOG.header.loginForm(),MINIMALDOG.header.offCanvasMenu(),MINIMALDOG.header.priorityNavInit(),MINIMALDOG.header.searchToggle(),MINIMALDOG.header.smartAffix.init({fixedHeader:".js-sticky-header",headerPlaceHolder:".js-sticky-header-holder"})},stickyNavbarPadding:function(){var t=a.fn.modal.Constructor.prototype.setScrollbar,e=a(".sticky-header .navigation-bar");a.fn.modal.Constructor.prototype.setScrollbar=function(){t.apply(this),this.bodyIsOverflowing&&this.scrollbarWidth&&e.css("padding-right",this.scrollbarWidth)};var i=a.fn.modal.Constructor.prototype.resetScrollbar;a.fn.modal.Constructor.prototype.resetScrollbar=function(){i.apply(this),e.css("padding-right","")}},searchToggle:function(){var i=a("#header-search-dropdown"),s=a(".js-search-dropdown-toggle"),n=a("#atbssuga-mobile-header"),o=a("#atbssuga-sticky-header").find(".navigation-bar__inner"),r=a(".site-header").find(".navigation-bar__inner"),l=i.find(".search-form__input");i.on("click",function(a){a.stopPropagation()}),s.on("click",function(t){t.stopPropagation();var e=a(this),s="";switch(s=e.hasClass("mobile-header-btn")?"mobile":e.parents(".sticky-header").length?"sticky":"navbar",!i.hasClass("is-in-"+s)&&i.hasClass("is-active")||i.toggleClass("is-active"),s){case"mobile":i.hasClass("is-in-mobile")||(i.addClass("is-in-mobile"),i.removeClass("is-in-sticky"),i.removeClass("is-in-navbar"),i.appendTo(n));break;case"sticky":i.hasClass("is-in-sticky")||(i.addClass("is-in-sticky"),i.removeClass("is-in-mobile"),i.removeClass("is-in-navbar"),i.insertAfter(o));break;default:i.hasClass("is-in-navbar")||(i.addClass("is-in-navbar"),i.removeClass("is-in-sticky"),i.removeClass("is-in-mobile"),i.insertAfter(r))}i.hasClass("is-active")&&setTimeout(function(){l.focus()},200)}),e.on("click",function(a){switch(a.which){case 1:i.removeClass("is-active")}}),t.on("stickyHeaderHidden",function(){i.hasClass("is-in-sticky")&&i.removeClass("is-active")})},ajaxSearch:function(){var t=null,e=a(".js-ajax-search"),i="",s='<span class="noresult-text">There is no result.</span>',n='<span class="error-text">There was some error.</span>';e.each(function(){var e=a(this),o=e.find(".search-form__input"),r=e.find(".search-results"),l=e.find(".search-results__inner"),c="",d="";o.on("input",a.debounce(800,function(){(c=o.val()).length>0?(r.addClass("is-active"),a(".atbssuga-search-full").addClass("active"),c==d&&"failed"!==i||(r.removeClass("is-error").addClass("is-loading"),d=c,function(e,o,r){var l=ajax_buff.suga_security.suga_security_code.content,c=a.ajax({url:ajaxurl,type:"post",dataType:"html",data:{action:"suga_ajax_search",searchTerm:e,securityCheck:l}});c.done(function(e){t=a.parseJSON(e),i="success",t.length||(t=s),r.html(t).css("opacity",0).animate({opacity:1},500)}),c.fail(function(){i="failed",o.addClass("is-error"),t=n,r.html(t).css("opacity",0).animate({opacity:1},500)}),c.always(function(){o.removeClass("is-loading"),MINIMALDOG.ajaxLazyload.lazyload_start()})}(c,r,l))):r.removeClass("is-active")}))})},ajaxMegamenu:function(){var t=null;a(".atbssuga-mega-menu ul.sub-categories > li").on("click",function(e){e.preventDefault();var i=a(this);if(!a(this).hasClass("active")){a(this).parents(".sub-categories").find("li").removeClass("active");var s=i.parents(".atbssuga-mega-menu__inner").find(".posts-list"),n=i.attr("class").split("-"),o=n[n.length-1],r=0;s.append('<div class="bk-preload-wrapper"></div>'),s.find("article").addClass("bk-preload-blur"),r=s.find("li:first-child").hasClass("big-post")?1:0,i.addClass("active");var l=ajax_buff.megamenu[o].html;""==l?function(e,i,s){var n=ajax_buff.suga_security.suga_security_code.content,o={action:"suga_ajax_megamenu",thisCatID:e,hasBigPost:i,securityCheck:n};a.post(ajaxurl,o,function(i){t=a.parseJSON(i),ajax_buff.megamenu[e].html=t,s.html(t).css("opacity",0).animate({opacity:1},500),s.find(".bk-preload-wrapper").remove(),s.find("article").removeClass("bk-preload-blur"),MINIMALDOG.ajaxLazyload.lazyload_start()})}(o,r,s):function(a,t,e){a.html(e).css("opacity",0).animate({opacity:1},500),a.find(".bk-preload-wrapper").remove(),a.find("article").removeClass("bk-preload-blur"),MINIMALDOG.ajaxLazyload.lazyload_start()}(s,0,l)}})},pagiButton:function(){var t,e,i,s='<span class="atbssuga-pagination__item atbssuga-pagination__dots atbssuga-pagination__dots-next">&hellip;</span>',n='<span class="atbssuga-pagination__item atbssuga-pagination__dots atbssuga-pagination__dots-prev">&hellip;</span>',o='<a class="atbssuga-pagination__item" href="#">##PAGENUMBER##</a>',r=null;a("body").on("click",".atbssuga-module-pagination .atbssuga-pagination__links > a",function(l){l.preventDefault();var c=a(this);if(!c.hasClass("disable-click")&&!c.hasClass("atbssuga-pagination__item-current")){var d=c.parent().children(),u=parseInt(a(d[d.length-2]).text()),h=c.parent().find(".atbssuga-pagination__item-current").index(),f=parseInt(a(d[h]).text()),m=c.parent().find(".atbssuga-pagination__item-next"),p=c.parent().find(".atbssuga-pagination__item-prev"),g=c.parent().find(".atbssuga-pagination__item-current"),v=c.parent().find(".atbssuga-pagination__item-current");c.siblings().removeClass("atbssuga-pagination__item-current"),c.hasClass("atbssuga-pagination__item-prev")?v.prev().addClass("atbssuga-pagination__item-current"):c.hasClass("atbssuga-pagination__item-next")?v.next().addClass("atbssuga-pagination__item-current"):c.addClass("atbssuga-pagination__item-current");var _=c.parent().find(".atbssuga-pagination__item-current"),b=c.parent().find(".atbssuga-pagination__item-current").index(),w=parseInt(a(d[b]).text());if(1==w?(a(p).addClass("disable-click"),a(m).removeClass("disable-click")):w==u?(a(p).removeClass("disable-click"),a(m).addClass("disable-click")):(a(p).removeClass("disable-click"),a(m).removeClass("disable-click")),u>5){if(t=c.parent().find(".atbssuga-pagination__dots").hasClass("atbssuga-pagination__dots-next")?c.parent().find(".atbssuga-pagination__dots-next").index():-1,e=c.parent().find(".atbssuga-pagination__dots").hasClass("atbssuga-pagination__dots-prev")?c.parent().find(".atbssuga-pagination__dots-prev").index():-1,isNaN(w))if(c.hasClass("atbssuga-pagination__item-prev"))w=parseInt(a(d[b+1]).text())-1;else{if(!c.hasClass("atbssuga-pagination__item-next"))return;w=parseInt(a(d[b-1]).text())+1}if("up"==(i=w>f?"up":"down")){if(b==t-1||b==t||w==u){for(c.parent().find(".atbssuga-pagination__dots").remove(),b==t&&(a(o.replace("##PAGENUMBER##",w)).insertAfter(g),g.next().addClass("atbssuga-pagination__item-current"),_=c.parent().find(".atbssuga-pagination__item-current"));parseInt(c.parent().find("a:nth-child(3)").text())!=w;)c.parent().find("a:nth-child(3)").remove();a(n).insertBefore(_),w<u-3?(a(s).insertAfter(_),a(o.replace("##PAGENUMBER##",w+2)).insertAfter(_),a(o.replace("##PAGENUMBER##",w+1)).insertAfter(_)):w<u-2?(a(o.replace("##PAGENUMBER##",w+2)).insertAfter(_),a(o.replace("##PAGENUMBER##",w+1)).insertAfter(_)):w<u-1&&a(o.replace("##PAGENUMBER##",w+1)).insertAfter(_),w==u?(a(o.replace("##PAGENUMBER##",w-3)).insertBefore(_),a(o.replace("##PAGENUMBER##",w-2)).insertBefore(_),a(o.replace("##PAGENUMBER##",w-1)).insertBefore(_)):w==u-1?(a(o.replace("##PAGENUMBER##",w-2)).insertBefore(_),a(o.replace("##PAGENUMBER##",w-1)).insertBefore(_)):w==u-2&&a(o.replace("##PAGENUMBER##",w-1)).insertBefore(_)}}else if("down"==i&&(b==e+1||b==e||1==w&&b<e)){if(c.parent().find(".atbssuga-pagination__dots").remove(),b==e)for(a(o.replace("##PAGENUMBER##",w)).insertBefore(g),g.prev().addClass("atbssuga-pagination__item-current"),_=c.parent().find(".atbssuga-pagination__item-current");parseInt(c.parent().find("a:nth-child("+(b+2)+")").text())!=u;)c.parent().find("a:nth-child("+(b+2)+")").remove();else if(1==w&&b<e)for(;parseInt(c.parent().find("a:nth-child("+(b+2)+")").text())!=u;)c.parent().find("a:nth-child("+(b+2)+")").remove();else for(;parseInt(c.parent().find("a:nth-child("+(b+1)+")").text())!=u;)c.parent().find("a:nth-child("+(b+1)+")").remove();a(s).insertAfter(_),w>4?(a(n).insertBefore(_),a(o.replace("##PAGENUMBER##",w-2)).insertBefore(_),a(o.replace("##PAGENUMBER##",w-1)).insertBefore(_)):w>3?(a(o.replace("##PAGENUMBER##",w-2)).insertBefore(_),a(o.replace("##PAGENUMBER##",w-1)).insertBefore(_)):w>2&&a(o.replace("##PAGENUMBER##",w-1)).insertBefore(_),1==w?(a(o.replace("##PAGENUMBER##",4)).insertAfter(_),a(o.replace("##PAGENUMBER##",3)).insertAfter(_),a(o.replace("##PAGENUMBER##",2)).insertAfter(_)):2==w?(a(o.replace("##PAGENUMBER##",4)).insertAfter(_),a(o.replace("##PAGENUMBER##",3)).insertAfter(_)):3==w&&a(o.replace("##PAGENUMBER##",4)).insertAfter(_)}}1!=w?c.siblings(".atbssuga-pagination__item-prev").css("display","inline-block"):c.hasClass("atbssuga-pagination__item-prev")?c.css("display","none"):c.siblings(".atbssuga-pagination__item-prev").css("display","none"),w==u?c.hasClass("atbssuga-pagination__item-next")?c.css("display","none"):c.siblings(".atbssuga-pagination__item-next").css("display","none"):c.siblings(".atbssuga-pagination__item-next").css("display","inline-block"),function(t,e){var i=t.closest(".atbssuga-block").attr("id"),s=i.split("-")[0],n=ajax_buff.query[i].args;if("suga_author_results"==s)var o=(e-1)*n.number+parseInt(n.offset),l=t.closest(".atbssuga-block").find(".authors-list"),c="";else var o=(e-1)*n.posts_per_page+parseInt(n.offset),l=t.closest(".atbssuga-block").find(".posts-list"),c=ajax_buff.query[i].moduleInfo;var d={moduleName:s,args:n,moduleInfo:c,postOffset:o};l.css("height",l.height()+"px"),l.append('<div class="bk-preload-wrapper"></div>'),l.find("article").addClass("bk-preload-blur"),function(t,e){var i=ajax_buff.suga_security.suga_security_code.content,s={action:t.moduleName,args:t.args,moduleInfo:t.moduleInfo,postOffset:t.postOffset,securityCheck:i};a.post(ajaxurl,s,function(t){r=a.parseJSON(t),e.html(r).css("opacity",0).animate({opacity:1},500),e.find(".bk-preload-wrapper").remove(),e.find("article").removeClass("bk-preload-blur"),MINIMALDOG.ajaxLazyload.lazyload_start()})}(d,l);var u=t.parents(".atbssuga-main-col");if(u.length>0){var h=u.siblings(".atbssuga-sub-col");h.css("min-height","1px")}var f=t.parents(".atbssuga-block");a("body,html").animate({scrollTop:f.offset().top},1100),setTimeout(function(){l.css("height","auto")},1100)}(c,w)}})},loginForm:function(){a(".js-login-form-tabs").find("a").on("click",function(t){t.preventDefault(),a(this).tab("show")})},offCanvasMenu:function(){var t=a('<div class="atbssuga-offcanvas-backdrop"></div>'),e=a(".js-atbssuga-offcanvas"),i=a(".js-atbssuga-offcanvas-toggle"),s=a(".js-atbssuga-offcanvas-close"),n=a(".navigation--offcanvas").find("li.menu-item-has-children > a"),o=!1;t.on("click",function(){var t=e.find(".btn-nav-show_full i");a(this).fadeOut(0,function(){a(this).detach()});var i=e;a(i).hasClass("show-full")?(a(i).removeClass("animation"),setTimeout(function(){a(i).removeClass("show-full"),a(i).removeClass("is-active")},400)):(a(i).removeClass("show-full"),a(i).removeClass("is-active")),setTimeout(function(){a(i).removeClass("animation"),a(i).removeClass("show-full"),a(i).removeClass("is-active")},400),o=!1,t.attr("class","mdicon mdicon-chevron-thin-right")}),i.on("click",function(e){e.preventDefault();var i=a(this).attr("href");a(i).toggleClass("is-active"),t.hide().appendTo(document.body).fadeIn(200)}),s.on("click",function(i){i.preventDefault();var s=e.find(".btn-nav-show_full i");t.fadeOut(200,function(){a(this).detach()}),o=!1;var n=e;a(n).hasClass("show-full")?(a(n).removeClass("animation"),setTimeout(function(){a(n).removeClass("show-full"),a(n).removeClass("is-active")},400)):(a(n).removeClass("show-full"),a(n).removeClass("is-active")),s.attr("class","mdicon mdicon-chevron-thin-right")}),n.append(function(){return a('<div class="submenu-toggle"><i class="mdicon mdicon-expand_more"></i></div>').on("click",function(t){t.preventDefault(),a(this).parent().siblings(".sub-menu").slideToggle(200)})}),a(window).on("resize",function(e){var i=setInterval(function(){var e=a("#atbssuga-offcanvas-primary"),s=a("#atbssuga-offcanvas-mobile");e.hasClass("is-active")&&("none"==e.css("display")&&(t.css("display","none"),clearInterval(i)));s.hasClass("is-active")&&("none"==s.css("display")&&(t.css("display","none"),clearInterval(i)));(e.hasClass("is-active")&&"none"!=e.css("display")||s.hasClass("is-active")&&"none"!=s.css("display"))&&(t.css("display","block"),clearInterval(i)),clearInterval(i)},100)});var r=a(".btn-nav-show_full");a(r).click(function(){var t=a(this).parents(".atbssuga-offcanvas"),e=a(this).find("i");a(this).fadeOut(500),0==o?(a(t).addClass("animation"),setTimeout(function(){a(t).addClass("show-full"),e.attr("class","mdicon mdicon-chevron-thin-left"),a(r).fadeIn(50)},600),o=!0):(a(t).removeClass("show-full"),a(this).fadeOut(1e3),setTimeout(function(){a(t).removeClass("animation"),a(r).fadeIn(50),e.attr("class","mdicon mdicon-chevron-thin-right")},200),o=!1)})},priorityNavInit:function(){a(".js-priority-nav").each(function(){MINIMALDOG.priorityNav(a(this))})},smartAffix:{$headerPlaceHolder:null,$fixedHeader:null,isDestroyed:!1,isDisabled:!1,isFixed:!1,isShown:!1,windowScrollTop:0,lastWindowScrollTop:0,offCheckpoint:0,onCheckpoint:0,breakpoint:992,init:function(t){this.$fixedHeader=a(t.fixedHeader),this.$headerPlaceHolder=a(t.headerPlaceHolder),this.$fixedHeader.length&&this.$headerPlaceHolder.length?(!this.$fixedHeader.length||!this.$headerPlaceHolder.length||MINIMALDOG.documentOnResize.windowWidth<=MINIMALDOG.header.smartAffix.breakpoint)&&(this.isDisabled=!0):this.isDestroyed=!0},compute:function(){MINIMALDOG.header.smartAffix.isDestroyed||MINIMALDOG.header.smartAffix.isDisabled||(this.$headerPlaceHolder.length?this.offCheckpoint=a(this.$headerPlaceHolder).offset().top+400:this.offCheckpoint=400,this.onCheckpoint=this.offCheckpoint+500,this.windowScrollTop=MINIMALDOG.documentOnScroll.windowScrollTop,this.offCheckpoint<this.windowScrollTop&&(this.isFixed=!0))},updateState:function(){this.isFixed?this.$fixedHeader.addClass("is-fixed"):(this.$fixedHeader.removeClass("is-fixed"),t.trigger("stickyHeaderHidden")),this.isShown?this.$fixedHeader.addClass("is-shown"):this.$fixedHeader.removeClass("is-shown")},eventScroll:function(a){var t="",e=0;a!=this.lastWindowScrollTop&&(t=a>this.lastWindowScrollTop?"down":"up",e=Math.abs(a-this.lastWindowScrollTop),this.lastWindowScrollTop=a,this.offCheckpoint<a?this.isFixed=!0:this.isFixed=!1,this.isFixed?"down"===t&&e>14?this.isShown&&(this.isShown=!1):!this.isShown&&e>14&&this.onCheckpoint<a&&(this.isShown=!0):this.isShown=!1,this.updateState())},eventResize:function(a){MINIMALDOG.documentOnResize.windowWidth<MINIMALDOG.header.smartAffix.breakpoint?this.isDisabled=!0:(this.isDisabled=!1,MINIMALDOG.header.smartAffix.compute())}}},MINIMALDOG.documentOnScroll={ticking:!1,windowScrollTop:0,init:function(){window.addEventListener("scroll",function(a){MINIMALDOG.documentOnScroll.ticking||window.requestAnimationFrame(function(){MINIMALDOG.documentOnScroll.windowScrollTop=t.scrollTop(),MINIMALDOG.header.smartAffix.isDisabled||MINIMALDOG.header.smartAffix.isDestroyed||MINIMALDOG.header.smartAffix.eventScroll(MINIMALDOG.documentOnScroll.windowScrollTop),MINIMALDOG.documentOnScroll.goToTopScroll(MINIMALDOG.documentOnScroll.windowScrollTop),MINIMALDOG.documentOnScroll.ticking=!1}),MINIMALDOG.documentOnScroll.ticking=!0})},goToTopScroll:function(a){i.length&&(a>800?i.hasClass("is-active")||i.addClass("is-active"):i.removeClass("is-active"))}},MINIMALDOG.documentOnResize={ticking:!1,windowWidth:t.width(),init:function(){window.addEventListener("resize",function(a){MINIMALDOG.documentOnResize.ticking||window.requestAnimationFrame(function(){MINIMALDOG.documentOnResize.windowWidth=t.width(),MINIMALDOG.header.smartAffix.isDestroyed||MINIMALDOG.header.smartAffix.eventResize(MINIMALDOG.documentOnResize.windowWidth),MINIMALDOG.clippedBackground(),MINIMALDOG.documentOnResize.ticking=!1}),MINIMALDOG.documentOnResize.ticking=!0})}},MINIMALDOG.documentOnReady={init:function(){MINIMALDOG.header.init(),MINIMALDOG.header.smartAffix.compute(),MINIMALDOG.documentOnScroll.init(),MINIMALDOG.documentOnReady.ajaxLoadPost(),MINIMALDOG.documentOnReady.carousel_1i(),MINIMALDOG.documentOnReady.carousel_1i_loopdot(),MINIMALDOG.documentOnReady.carousel_only_1i_loopdot(),MINIMALDOG.documentOnReady.carousel_1i_get_background(),MINIMALDOG.documentOnReady.carousel_1i_dot_number(),MINIMALDOG.documentOnReady.carousel_1i_stage_padding(),MINIMALDOG.documentOnReady.carousel_1i_dot_number_effect(),MINIMALDOG.documentOnReady.carousel_1i30m(),MINIMALDOG.documentOnReady.carousel_2i4m(),MINIMALDOG.documentOnReady.carousel_2i30m(),MINIMALDOG.documentOnReady.carousel_2i20m(),MINIMALDOG.documentOnReady.carousel_3i4m(),MINIMALDOG.documentOnReady.carousel_3i4m_small(),MINIMALDOG.documentOnReady.carousel_3i20m(),MINIMALDOG.documentOnReady.carousel_3i30m(),MINIMALDOG.documentOnReady.carousel_headingAside_3i(),MINIMALDOG.documentOnReady.carousel_4i(),MINIMALDOG.documentOnReady.carousel_4i4m(),MINIMALDOG.documentOnReady.carousel_4i20m(),MINIMALDOG.documentOnReady.carousel_overlap(),MINIMALDOG.documentOnReady.customCarouselNav(),MINIMALDOG.documentOnReady.countdown(),MINIMALDOG.documentOnReady.goToTop(),MINIMALDOG.documentOnReady.newsTicker(),MINIMALDOG.documentOnReady.lightBox(),MINIMALDOG.documentOnReady.perfectScrollbarInit(),MINIMALDOG.documentOnReady.tooltipInit(),MINIMALDOG.documentOnReady.suga_search_button(),MINIMALDOG.documentOnReady.suga_share(),MINIMALDOG.documentOnReady.ATBSNavDetectEdgeBrowser(),MINIMALDOG.documentOnReady.widget_owl_dot()},ATBSNavDetectEdgeBrowser:function(){a("#main-menu li").on("mouseenter mouseleave",function(t){if(a("ul",this).length){var e=a("ul:first",this),i=e.offset().left;i+e.width()<=a(".site-wrapper").width()?a(this).removeClass("atbs-submenu-to-left"):a(this).addClass("atbs-submenu-to-left"),i<0?a(this).addClass("atbs-submenu-to-right"):a(this).removeClass("atbs-submenu-to-right")}})},widget_owl_dot:function(){a(".widget-slide").each(function(){var t=a(this).find(".owl-dot"),e=parseInt(t.css("padding-left").replace("px",""))+t.find("span").width(),i=t.size()*e,s=(a(this).find(".owl-prev").width(),a(this).find(".owl-next").width()),n=i+s+2;if(t.size()>3||a(window).resize()&&t.size()>3){n=i+s+2*e+2;a(this).find(".owl-prev").css("right",n+"px"),t.css("right",e/2+s+"px")}else(t.size()<3||a(window).resize()&&t.size()<3)&&a(this).find(".owl-prev").css("right",n+"px")})},suga_search_button:function(){if(a(".js-search-popup").on("click",function(){a(".atbssuga-search-full").toggleClass("On")}),a("#atbssuga-search-remove").on("click",function(){a(".atbssuga-search-full").removeClass("On"),a(".atbssuga-search-full").removeClass("active"),a(".search-form__input").val("")}),a(window).resize()||a(window).load()){a(window).height();var t=a(".atbssuga-search-full--form form").height()+parseInt(a(".atbssuga-search-full--form form").css("margin-bottom")),e=a(window).height()-parseInt(a(".atbssuga-search-full").css("padding-bottom"))-parseInt(a(".atbssuga-search-full").css("padding-top"))-t;a(".result-default").css("max-height",e),a(".atbssuga-search-full--result").css("max-height",e+t)}},suga_share:function(){a(".post--single").length&&a(document).scroll(function(){var t=a(window),e=(t.height(),t.scrollTop());e+100>=a(".post--single").offset().top?(a(".single-suga.single-17 .share-box-1").css({visibility:"hidden"}),a(".single-suga.single-17 .share-box-2").css({transition:"0.5s",visibility:"visible"})):e<a(".post--single").offset().top&&(a(".single-suga.single-17 .share-box-1").css("visibility","visible"),a(".single-suga.single-17 .share-box-2").css({transition:"0s",visibility:"hidden"}))})},ajaxLoadPost:function(){var e,i=null;a(".js-ajax-load-post").each(function(){var s=(e=a(this)).closest(".atbssuga-block").attr("id"),n=s.split("-")[0],o=e.find(".js-ajax-load-post-trigger"),r=ajax_buff.query[s].args,l=e.find(".posts-list"),c=ajax_buff.query[s].moduleInfo;o.on("click",function(){if(!(e=a(this).closest(".js-ajax-load-post")).hasClass("disable-click")){e.addClass("suga_loading");var s=parseInt(r.offset)+e.find("article").length;if(e.closest(".atbssuga-block").hasClass("suga_latest_blog_posts"))s-=r.post__not_in.length;var o=e.find("article").length;l.append('<div class="bk-preload-wrapper"></div>'),l.find("article").addClass("bk-preload-blur"),function(s,n){var o=ajax_buff.suga_security.suga_security_code.content,r=a.ajax({url:ajaxurl,type:"post",dataType:"html",data:{action:s.action,args:s.args,postOffset:s.postOffset,type:s.type,moduleInfo:s.moduleInfo,the__lastPost:s.the__lastPost,securityCheck:o}});r.done(function(e){if("no-result"==(i=a.parseJSON(e)))return n.closest(".js-ajax-load-post").addClass("disable-click"),n.closest(".js-ajax-load-post").find(".js-ajax-load-post-trigger").addClass("hidden"),void n.closest(".js-ajax-load-post").find(".suga-no-more-button").removeClass("hidden");i&&n.append(i).css("opacity",0).animate({opacity:1},500),a("html, body").animate({scrollTop:t.scrollTop()+1},0).animate({scrollTop:t.scrollTop()-1},0)}),r.fail(function(){}),r.always(function(){n.find(".bk-preload-wrapper").remove(),n.find("article").removeClass("bk-preload-blur"),e.removeClass("suga_loading"),MINIMALDOG.ajaxLazyload.lazyload_start()})}({action:n,args:r,postOffset:s,type:"loadmore",moduleInfo:c,the__lastPost:o},l)}})})},carousel_1i_stage_padding:function(){a(".carousel_1i_stage_padding").each(function(){a(this).owlCarousel({dots:!0,center:!0,items:1,loop:!0,margin:0,responsive:{1201:{items:2,margin:60}},navText:['<svg xmlns="http://www.w3.org/2000/svg" width="25" height="17" fill="#fff" viewBox="0 0 32 17"><path id="slider-prev" data-name="Slider Prev" class="slider_arrow_path" d="M8.158,0.007L8.835,0.685,1.5,8.019H32V8.979H1.5l7.338,7.334-0.677.679L0,8.839V8.16Z"></path></svg>','<svg xmlns="http://www.w3.org/2000/svg" width="25" height="17"  fill="#fff" viewBox="0 0 32 17"><path id="slider-next" data-name="Slider Next" class="slider_arrow_path" d="M23.842,0.007l-0.677.678L30.5,8.019H0V8.979H30.5l-7.338,7.334,0.677,0.679L32,8.839V8.16Z"></path></svg>'],smartSpeed:500})})},carousel_only_1i_loopdot:function(){a(".js-atbssuga-carousel-only-1i-loopdot").each(function(){a(this).owlCarousel({items:1,margin:0,loop:!0,nav:!0,dots:!0,autoHeight:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],smartSpeed:500,responsive:{0:{items:1}}})})},carousel_1i_dot_number:function(){function t(t){if(0!==a(t.target).closest(".atbssuga-featured-slider-3-layout").length){var e=a(t.target).closest(".atbssuga-featured-slider-3-layout"),i=t.item.index+1;e.find("#numberSlide").html(i+' <span class="slide-seperated">/</span> '+t.item.count)}}a(".js-atbssuga-carousel-1i-dot-number").each(function(){a(this).owlCarousel({items:1,margin:0,nav:!1,loop:!1,dots:!0,lazyLoad:!0,autoHeight:!0,onInitialized:t,onTranslated:t,navText:['<svg xmlns="http://www.w3.org/2000/svg" width="25" height="17" fill="#fff" viewBox="0 0 32 17"><path id="slider-prev" data-name="Slider Prev" class="slider_arrow_path" d="M8.158,0.007L8.835,0.685,1.5,8.019H32V8.979H1.5l7.338,7.334-0.677.679L0,8.839V8.16Z"></path></svg>','<svg xmlns="http://www.w3.org/2000/svg" width="25" height="17"  fill="#fff" viewBox="0 0 32 17"><path id="slider-next" data-name="Slider Next" class="slider_arrow_path" d="M23.842,0.007l-0.677.678L30.5,8.019H0V8.979H30.5l-7.338,7.334,0.677,0.679L32,8.839V8.16Z"></path></svg>'],smartSpeed:500,responsive:{0:{items:1},768:{items:1}}})})},carousel_1i:function(){a(".js-atbssuga-carousel-1i").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({items:1,loop:t,margin:0,nav:!0,dots:!0,autoHeight:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],smartSpeed:500})})},carousel_1i_loopdot:function(){a(".js-atbssuga-carousel-1i-loopdot").each(function(){a(this).owlCarousel({items:1,margin:0,loop:!0,nav:!0,dots:!0,autoHeight:!0,navText:['<i class="mdicon mdicon-navigate_before"></i>','<i class="mdicon mdicon-navigate_next"></i>'],smartSpeed:500,responsive:{0:{items:1},576:{items:2,margin:30},992:{items:1}}})})},carousel_1i_get_background:function(){a(".js-atbssuga-carousel-1i-get-background").each(function(){var t=a(this);a(this).owlCarousel({items:1,margin:30,nav:!0,loop:!0,dots:!0,lazyLoad:!0,smartSpeed:450,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1,margin:30},768:{items:1}}}),t.on("translate.owl.carousel",function(t){var e=t.target,i=a(e).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img"),s=a(e).find(".owl-item.active").find(".post__thumb > a > img").attr("src");i.each(function(){a(this).hasClass("active")?a(this).removeClass("active"):(a(this).removeAttr("src").attr("src",s),a(this).addClass("active"))}),a(e).parents(".atbssuga-block__inner").children(".owl-background img").hasClass("active");var n=setInterval(function(){a(e).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img.active").attr("srcset",a(e).find(".owl-item.active").find(".post__thumb > a > img").attr("srcset")),a(e).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img.active").attr("href",a(e).find(".owl-item.active").find("h3 > a").attr("href")),a(e).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img.active").attr("src",a(e).find(".owl-item.active").find(".post__thumb > a > img").attr("src")),clearInterval(n)},100)}),a(window).resize(function(){!function(a){var t=parseFloat(a.find(".owl-nav .owl-next").css("width")),e=parseFloat(a.find(".owl-dots").css("width")),i=t+25,s=t+25+e+25,n=parseFloat(a.find(".owl-nav .owl-next").css("height")),o=parseFloat(a.find(".owl-dots").css("height")),r=parseFloat(n/2-o/2);window.matchMedia("(max-width: 768px)").matches&&(t=parseFloat(a.find(".owl-nav .owl-next").css("width")),e=parseFloat(a.find(".owl-dots").css("width")),i=t+15,s=t+15+e+15,n=parseFloat(a.find(".owl-nav .owl-next").css("height")),o=parseFloat(a.find(".owl-dots").css("height")),r=parseFloat(n/2-o/2));a.find(".owl-dots").css({left:i}),a.find(".owl-dots").css({bottom:r}),a.find(".owl-nav .owl-next").css({left:s})}(t)})})},carousel_1i_dot_number_effect:function(){function t(t){var e=t.target,i=t.item.count,s=t.item.index,n=a(e).find(".owl-stage").children().length,o=n-i,r=s-parseInt(o/2)+1;s<parseInt(o/2)?r=n-o:r>i&&(r-=i),a(e).parent().find(".owl-number").html(r+' <span class="slide-seperated">/</span> '+i)}a(".js-atbssuga-carousel-1i-dot-number-effect").each(function(){a(this).owlCarousel({items:1,margin:0,nav:!1,loop:!0,dots:!0,lazyLoad:!0,autoHeight:!0,smartSpeed:450,animateOut:"fadeOut",onInitialized:t,onTranslate:t,navText:['<svg xmlns="http://www.w3.org/2000/svg" width="25" height="17" fill="#fff" viewBox="0 0 32 17"><path id="slider-prev" data-name="Slider Prev" class="slider_arrow_path" d="M8.158,0.007L8.835,0.685,1.5,8.019H32V8.979H1.5l7.338,7.334-0.677.679L0,8.839V8.16Z"></path></svg>','<svg xmlns="http://www.w3.org/2000/svg" width="25" height="17"  fill="#fff" viewBox="0 0 32 17"><path id="slider-next" data-name="Slider Next" class="slider_arrow_path" d="M23.842,0.007l-0.677.678L30.5,8.019H0V8.979H30.5l-7.338,7.334,0.677,0.679L32,8.839V8.16Z"></path></svg>'],responsive:{0:{items:1,margin:30},768:{items:1}}}),a(this).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img.active").attr("srcset",a(this).find(".owl-item.active").find(".post__thumb > a > img").attr("srcset")),a(this).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img.active").attr("src",a(this).find(".owl-item.active").find(".post__thumb > a > img").attr("src")),a(this).on("translate.owl.carousel",function(t){var e=t.target,i=a(e).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img"),s=a(e).find(".owl-item.active").find(".post__thumb > a > img").attr("src");i.each(function(){a(this).hasClass("active")?a(this).removeClass("active"):(a(this).removeAttr("src").attr("src",s),a(this).addClass("active"))}),a(e).parents(".atbssuga-block__inner").children(".owl-background img").hasClass("active");var n=setInterval(function(){a(e).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img.active").attr("srcset",a(e).find(".owl-item.active").find(".post__thumb > a > img").attr("srcset")),a(e).parents(".atbssuga-block__inner").find(".owl-background .owl-background-img.active").attr("src",a(e).find(".owl-item.active").find(".post__thumb > a > img").attr("src")),clearInterval(n)},100)})})},carousel_1i30m:function(){a(".js-carousel-1i30m").each(function(){a(this).owlCarousel({items:1,margin:30,loop:!0,nav:!0,dots:!0,autoHeight:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],smartSpeed:700})})},carousel_overlap:function(){a(".js-atbssuga-carousel-overlap").each(function(){var t=a(this);t.flickity({wrapAround:!0}),t.on("staticClick.flickity",function(a,e,i,s){"number"==typeof s&&t.data("flickity").selectedIndex!=s&&t.flickity("selectCell",s)})})},carousel_2i30m:function(){a(".js-carousel-2i30m").each(function(){a(this).owlCarousel({items:2,margin:30,loop:!0,nav:!0,autoHeight:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2}}})})},carousel_2i4m:function(){a(".js-carousel-2i4m").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({items:2,margin:4,loop:t,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2}}})})},carousel_3i:function(){a(".js-carousel-3i").each(function(){a(this).owlCarousel({loop:!0,nav:!0,dots:!1,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2},992:{items:3}}})})},carousel_3i4m:function(){a(".js-carousel-3i4m").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({margin:4,loop:t,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2},992:{items:3}}})})},carousel_3i4m_small:function(){a(".js-carousel-3i4m-small").each(function(){a(this).owlCarousel({margin:4,loop:!1,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],autoHeight:!0,responsive:{0:{items:1},768:{items:2},1200:{items:3}}})})},carousel_2i20m:function(){a(".js-carousel-2i20m").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({margin:20,loop:t,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2}}})})},carousel_3i20m:function(){a(".js-carousel-3i20m").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({margin:20,loop:t,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2},992:{items:3}}})})},carousel_3i30m:function(){a(".js-carousel-3i30m").each(function(){a(this).data("carousel-loop");a(this).owlCarousel({margin:30,loop:!0,items:3,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},481:{items:2,margin:15},768:{items:2},992:{items:3,margin:20},1200:{items:3,margin:30}}})})},carousel_headingAside_3i:function(){a(".js-atbssuga-carousel-heading-aside-3i").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({margin:20,nav:!1,dots:!1,loop:t,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1,margin:10,stagePadding:40,loop:!1},768:{items:2},992:{items:3}}})})},customCarouselNav:function(){a.isFunction(a.fn.owlCarousel)&&(a(".js-carousel-next").each(function(){var t=a(this),e=t.parent(".atbssuga-carousel-nav-custom-holder").attr("data-carouselID"),i=a("#"+e);t.on("click",function(){i.trigger("next.owl.carousel")})}),a(".js-carousel-prev").each(function(){var t=a(this),e=t.parent(".atbssuga-carousel-nav-custom-holder").attr("data-carouselID"),i=a("#"+e);t.on("click",function(){i.trigger("prev.owl.carousel")})}))},carousel_4i:function(){a(".js-carousel-4i").each(function(){a(this).owlCarousel({loop:!0,nav:!0,dots:!1,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2},992:{items:4}}})})},carousel_4i4m:function(){a(".js-carousel-4i4m").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({margin:4,loop:t,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2},992:{items:4}}})})},carousel_4i20m:function(){a(".js-carousel-4i20m").each(function(){var t=a(this).data("carousel-loop");a(this).owlCarousel({items:4,margin:20,loop:t,nav:!0,dots:!0,navText:['<i class="mdicon mdicon-chevron-thin-left"></i>','<i class="mdicon mdicon-chevron-thin-right"></i>'],responsive:{0:{items:1},768:{items:2},992:{items:3},1199:{items:4}}})})},countdown:function(){a.isFunction(a.fn.countdown)&&a(".js-countdown").each(function(){var t=a(this),e=t.data("countdown");t.countdown(e,function(t){a(this).html(t.strftime('<div class="countdown__section"><span class="countdown__digit">%-D</span><span class="countdown__text meta-font">day%!D</span></div><div class="countdown__section"><span class="countdown__digit">%H</span><span class="countdown__text meta-font">hr</span></div><div class="countdown__section"><span class="countdown__digit">%M</span><span class="countdown__text meta-font">min</span></div><div class="countdown__section"><span class="countdown__digit">%S</span><span class="countdown__text meta-font">sec</span></div>'))})})},goToTop:function(){i.length&&i.on("click",function(){return a("html,body").stop(!0).animate({scrollTop:0},400),!1})},newsTicker:function(){a(".js-atbssuga-news-ticker").each(function(){var t=a(this),e=t.siblings(".atbssuga-news-ticker__control").find(".atbssuga-news-ticker__next"),i=t.siblings(".atbssuga-news-ticker__control").find(".atbssuga-news-ticker__prev");t.addClass("initialized").vTicker("init",{speed:300,pause:3e3,showItems:1}),e.on("click",function(){t.vTicker("next",{animate:!0})}),i.on("click",function(){t.vTicker("prev",{animate:!0})})})},lightBox:function(){if(a.isFunction(a.fn.magnificPopup)){var t=a(".js-atbssuga-lightbox-image"),e=a(".js-atbssuga-lightbox-gallery");t.magnificPopup({type:"image",mainClass:"mfp-zoom-in",removalDelay:80}),e.each(function(){a(this).magnificPopup({delegate:".gallery-icon > a",type:"image",gallery:{enabled:!0},mainClass:"mfp-zoom-in",removalDelay:80})})}},perfectScrollbarInit:function(){a(".js-perfect-scrollbar").each(function(a,t){new PerfectScrollbar(t)})},stickySidebar:function(){setTimeout(function(){var t=a(".js-sticky-sidebar"),e=a(".js-sticky-header"),i=e.length?e.outerHeight()+20:0;a(document.body).hasClass("admin-bar")&&(i+=32),a.isFunction(a.fn.theiaStickySidebar)&&t.theiaStickySidebar({additionalMarginTop:i,additionalMarginBottom:20})},250)},tooltipInit:function(){a('[data-toggle="tooltip"]').tooltip()}},MINIMALDOG.documentOnLoad={init:function(){MINIMALDOG.clippedBackground(),MINIMALDOG.header.smartAffix.compute(),MINIMALDOG.header.smartAffix.updateState(),MINIMALDOG.header.stickyNavbarPadding(),MINIMALDOG.documentOnReady.stickySidebar(),MINIMALDOG.ajaxLazyload.lazyload_start()}},MINIMALDOG.clippedBackground=function(){s.length&&s.each(function(){var t=a(this).find(".js-overlay-bg-main-area");t.length||(t=a(this));var e=a(this).find(".js-overlay-bg-sub-area"),i=a(this).find(".js-overlay-bg-sub"),s=t.offset().left-e.offset().left,n=t.offset().top-e.offset().top;i.css("display","block"),i.css("position","absolute"),i.css("width",t.outerWidth()+"px"),i.css("height",t.outerHeight()+"px"),i.css("left",s+"px"),i.css("top",n+"px")})},MINIMALDOG.priorityNav=function(e){e.find("button");var i=e.find(".navigation"),s=(i.children("li"),!1);function n(){if(0!==i[0].getBoundingClientRect().width){var t=0;if(i.children("li").each(function(){t+=a(this)[0].getBoundingClientRect().width}),s){var n=(u=e.find(".priority-nav__more"))[0].getBoundingClientRect().width,o=e[0].getBoundingClientRect().width;if(o-=parseInt(e.css("padding-left"),10)+parseInt(e.css("padding-right"),10),o-=e.outerWidth(!1)-e.innerWidth(),t>o){var r=i.children("li:not(.priority-nav__more)"),l=1;a(r.get().reverse()).each(function(e){if(!((t-=a(this)[0].getBoundingClientRect().width)>o))return!1;l++}),(h=i.children("li:not(.priority-nav__more)").slice(-l)).each(function(t){a(this).attr("data-width",a(this)[0].getBoundingClientRect().width)}),h.prependTo(u.children("ul"))}else{var c=u.children("ul").children("li"),d=0;if(1===c.length?o>=t-n+c.first().data("width")&&(d=1):c.each(function(e){if(!((t+=a(this).data("width"))<=o))return!1;d++}),d>0)c.slice(0,d).insertBefore(i.children(".priority-nav__more")),(c=u.children("ul").children("li")).length<=0&&(u.remove(),s=!1)}}else{var u=a('<li class="priority-nav__more"><a href="#"><span>More</span><i class="mdicon mdicon-more_vert"></i></a><ul class="sub-menu"></ul></li>');o=e[0].getBoundingClientRect().width;if(o-=parseInt(e.css("padding-left"),10)+parseInt(e.css("padding-right"),10),o-=e.outerWidth(!1)-e.innerWidth(),t>o){var h;r=i.children("li"),l=1;a(r.get().reverse()).each(function(e){if(!((t-=a(this)[0].getBoundingClientRect().width)>o))return!1;l++}),(h=i.children("li:not(.priority-nav__more)").slice(-l)).each(function(t){a(this).attr("data-width",a(this)[0].getBoundingClientRect().width)}),h.prependTo(u.children("ul")),u.appendTo(i),s=!0}}}}i.length&&(t.on("load webfontLoaded",n),t.on("resize",a.throttle(50,n)))},e.ready(MINIMALDOG.documentOnReady.init),t.on("load",MINIMALDOG.documentOnLoad.init),t.on("resize",MINIMALDOG.documentOnResize.init)}(jQuery);