function revslider_showDoubleJqueryError(e){var t="Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";t+="<br> This includes make eliminates the revolution slider libraries, and make it not work.";t+="<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";t+="<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";t="<span style='font-size:16px;color:#BC0C06;'>"+t+"</span>";jQuery(e).show().html(t)}(function(e){function r(e){if(e in t.style)return e;var n=["Moz","Webkit","O","ms"];var r=e.charAt(0).toUpperCase()+e.substr(1);if(e in t.style){return e}for(var i=0;i<n.length;++i){var s=n[i]+r;if(s in t.style){return s}}}function i(){t.style[n.transform]="";t.style[n.transform]="rotateY(90deg)";return t.style[n.transform]!==""}function f(e){if(typeof e==="string"){this.parse(e)}return this}function l(e,t,n){if(t===true){e.queue(n)}else if(t){e.queue(t,n)}else{n()}}function c(t){var n=[];e.each(t,function(t){t=e.camelCase(t);t=e.transit.propertyMap[t]||e.cssProps[t]||t;t=d(t);if(e.inArray(t,n)===-1){n.push(t)}});return n}function h(t,n,r,i){var s=c(t);if(e.cssEase[r]){r=e.cssEase[r]}var o=""+m(n)+" "+r;if(parseInt(i,10)>0){o+=" "+m(i)}var u=[];e.each(s,function(e,t){u.push(t+" "+o)});return u.join(", ")}function p(t,r){if(!r){e.cssNumber[t]=true}e.transit.propertyMap[t]=n.transform;e.cssHooks[t]={get:function(n){var r=e(n).css("transit:transform");return r.get(t)},set:function(n,r){var i=e(n).css("transit:transform");i.setFromString(t,r);e(n).css({"transit:transform":i})}}}function d(e){return e.replace(/([A-Z])/g,function(e){return"-"+e.toLowerCase()})}function v(e,t){if(typeof e==="string"&&!e.match(/^[\-0-9\.]+$/)){return e}else{return""+e+t}}function m(t){var n=t;if(typeof n==="string"&&!n.match(/^[\-0-9\.]+/)){n=e.fx.speeds[n]||e.fx.speeds._default}return v(n,"ms")}e.transit={version:"0.9.9",propertyMap:{marginLeft:"margin",marginRight:"margin",marginBottom:"margin",marginTop:"margin",paddingLeft:"padding",paddingRight:"padding",paddingBottom:"padding",paddingTop:"padding"},enabled:true,useTransitionEnd:false};var t=document.createElement("div");var n={};var s=navigator.userAgent.toLowerCase().indexOf("chrome")>-1;n.transition=r("transition");n.transitionDelay=r("transitionDelay");n.transform=r("transform");n.transformOrigin=r("transformOrigin");n.transform3d=i();var o={transition:"transitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",WebkitTransition:"webkitTransitionEnd",msTransition:"MSTransitionEnd"};var u=n.transitionEnd=o[n.transition]||null;for(var a in n){if(n.hasOwnProperty(a)&&typeof e.support[a]==="undefined"){e.support[a]=n[a]}}t=null;e.cssEase={_default:"ease","in":"ease-in",out:"ease-out","in-out":"ease-in-out",snap:"cubic-bezier(0,1,.5,1)",easeInCubic:"cubic-bezier(.55, .055, .675, .19)",easeOutCubic:"cubic-bezier(.215,.61,.355,1)",easeInOutCubic:"cubic-bezier(.645,.045,.355,1)",easeInCirc:"cubic-bezier(.6,.04,.98,.335)",easeOutCirc:"cubic-bezier(.075,.82,.165,1)",easeInOutCirc:"cubic-bezier(.785,.135,.15,.86)",easeInExpo:"cubic-bezier(.95,.05,.795,.035)",easeOutExpo:"cubic-bezier(.19,1,.22,1)",easeInOutExpo:"cubic-bezier(1,0,0,1)",easeInQuad:"cubic-bezier(.55,.085,.68,.53)",easeOutQuad:"cubic-bezier(.25,.46,.45,.94)",easeInOutQuad:"cubic-bezier(.455,.03,.515,.955)",easeInQuart:"cubic-bezier(.895,.03,.685,.22)",easeOutQuart:"cubic-bezier(.165,.84,.44,1)",easeInOutQuart:"cubic-bezier(.77,0,.175,1)",easeInQuint:"cubic-bezier(.755,.05,.855,.06)",easeOutQuint:"cubic-bezier(.23,1,.32,1)",easeInOutQuint:"cubic-bezier(.86,0,.07,1)",easeInSine:"cubic-bezier(.47,0,.745,.715)",easeOutSine:"cubic-bezier(.39,.575,.565,1)",easeInOutSine:"cubic-bezier(.445,.05,.55,.95)",easeInBack:"cubic-bezier(.6,-.28,.735,.045)",easeOutBack:"cubic-bezier(.175, .885,.32,1.275)",easeInOutBack:"cubic-bezier(.68,-.55,.265,1.55)"};e.cssHooks["transit:transform"]={get:function(t){return e(t).data("transform")||new f},set:function(t,r){var i=r;if(!(i instanceof f)){i=new f(i)}if(n.transform==="WebkitTransform"&&!s){t.style[n.transform]=i.toString(true)}else{t.style[n.transform]=i.toString()}e(t).data("transform",i)}};e.cssHooks.transform={set:e.cssHooks["transit:transform"].set};if(e.fn.jquery<"1.8"){e.cssHooks.transformOrigin={get:function(e){return e.style[n.transformOrigin]},set:function(e,t){e.style[n.transformOrigin]=t}};e.cssHooks.transition={get:function(e){return e.style[n.transition]},set:function(e,t){e.style[n.transition]=t}}}p("scale");p("translate");p("rotate");p("rotateX");p("rotateY");p("rotate3d");p("perspective");p("skewX");p("skewY");p("x",true);p("y",true);f.prototype={setFromString:function(e,t){var n=typeof t==="string"?t.split(","):t.constructor===Array?t:[t];n.unshift(e);f.prototype.set.apply(this,n)},set:function(e){var t=Array.prototype.slice.apply(arguments,[1]);if(this.setter[e]){this.setter[e].apply(this,t)}else{this[e]=t.join(",")}},get:function(e){if(this.getter[e]){return this.getter[e].apply(this)}else{return this[e]||0}},setter:{rotate:function(e){this.rotate=v(e,"deg")},rotateX:function(e){this.rotateX=v(e,"deg")},rotateY:function(e){this.rotateY=v(e,"deg")},scale:function(e,t){if(t===undefined){t=e}this.scale=e+","+t},skewX:function(e){this.skewX=v(e,"deg")},skewY:function(e){this.skewY=v(e,"deg")},perspective:function(e){this.perspective=v(e,"px")},x:function(e){this.set("translate",e,null)},y:function(e){this.set("translate",null,e)},translate:function(e,t){if(this._translateX===undefined){this._translateX=0}if(this._translateY===undefined){this._translateY=0}if(e!==null&&e!==undefined){this._translateX=v(e,"px")}if(t!==null&&t!==undefined){this._translateY=v(t,"px")}this.translate=this._translateX+","+this._translateY}},getter:{x:function(){return this._translateX||0},y:function(){return this._translateY||0},scale:function(){var e=(this.scale||"1,1").split(",");if(e[0]){e[0]=parseFloat(e[0])}if(e[1]){e[1]=parseFloat(e[1])}return e[0]===e[1]?e[0]:e},rotate3d:function(){var e=(this.rotate3d||"0,0,0,0deg").split(",");for(var t=0;t<=3;++t){if(e[t]){e[t]=parseFloat(e[t])}}if(e[3]){e[3]=v(e[3],"deg")}return e}},parse:function(e){var t=this;e.replace(/([a-zA-Z0-9]+)\((.*?)\)/g,function(e,n,r){t.setFromString(n,r)})},toString:function(e){var t=[];for(var r in this){if(this.hasOwnProperty(r)){if(!n.transform3d&&(r==="rotateX"||r==="rotateY"||r==="perspective"||r==="transformOrigin")){continue}if(r[0]!=="_"){if(e&&r==="scale"){t.push(r+"3d("+this[r]+",1)")}else if(e&&r==="translate"){t.push(r+"3d("+this[r]+",0)")}else{t.push(r+"("+this[r]+")")}}}}return t.join(" ")}};e.fn.transition=e.fn.transit=function(t,r,i,s){var o=this;var a=0;var f=true;var c=e.extend(true,{},t);if(typeof r==="function"){s=r;r=undefined}if(typeof r==="object"){i=r.easing;a=r.delay||0;f=r.queue||true;s=r.complete;r=r.duration}if(typeof i==="function"){s=i;i=undefined}if(typeof c.easing!=="undefined"){i=c.easing;delete c.easing}if(typeof c.duration!=="undefined"){r=c.duration;delete c.duration}if(typeof c.complete!=="undefined"){s=c.complete;delete c.complete}if(typeof c.queue!=="undefined"){f=c.queue;delete c.queue}if(typeof c.delay!=="undefined"){a=c.delay;delete c.delay}if(typeof r==="undefined"){r=e.fx.speeds._default}if(typeof i==="undefined"){i=e.cssEase._default}r=m(r);var p=h(c,r,i,a);var d=e.transit.enabled&&n.transition;var v=d?parseInt(r,10)+parseInt(a,10):0;if(v===0){var g=function(e){o.css(c);if(s){s.apply(o)}if(e){e()}};l(o,f,g);return o}var y={};var b=function(r){var i=false;var a=function(){if(i){o.unbind(u,a)}if(v>0){o.each(function(){this.style[n.transition]=y[this]||null})}if(typeof s==="function"){s.apply(o)}if(typeof r==="function"){r()}};if(v>0&&u&&e.transit.useTransitionEnd){i=true;o.bind(u,a)}else{window.setTimeout(a,v)}o.each(function(){if(v>0){this.style[n.transition]=p}e(this).css(t)})};var w=function(e){this.offsetWidth;b(e)};l(o,f,w);return this};e.transit.getTransitionValue=h})(jQuery);(function(e,t){jQuery.easing["jswing"]=jQuery.easing["swing"];jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,t,n,r,i){return jQuery.easing[jQuery.easing.def](e,t,n,r,i)},easeInQuad:function(e,t,n,r,i){return r*(t/=i)*t+n},easeOutQuad:function(e,t,n,r,i){return-r*(t/=i)*(t-2)+n},easeInOutQuad:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t+n;return-r/2*(--t*(t-2)-1)+n},easeInCubic:function(e,t,n,r,i){return r*(t/=i)*t*t+n},easeOutCubic:function(e,t,n,r,i){return r*((t=t/i-1)*t*t+1)+n},easeInOutCubic:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t*t+n;return r/2*((t-=2)*t*t+2)+n},easeInQuart:function(e,t,n,r,i){return r*(t/=i)*t*t*t+n},easeOutQuart:function(e,t,n,r,i){return-r*((t=t/i-1)*t*t*t-1)+n},easeInOutQuart:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t*t*t+n;return-r/2*((t-=2)*t*t*t-2)+n},easeInQuint:function(e,t,n,r,i){return r*(t/=i)*t*t*t*t+n},easeOutQuint:function(e,t,n,r,i){return r*((t=t/i-1)*t*t*t*t+1)+n},easeInOutQuint:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t*t*t*t+n;return r/2*((t-=2)*t*t*t*t+2)+n},easeInSine:function(e,t,n,r,i){return-r*Math.cos(t/i*(Math.PI/2))+r+n},easeOutSine:function(e,t,n,r,i){return r*Math.sin(t/i*(Math.PI/2))+n},easeInOutSine:function(e,t,n,r,i){return-r/2*(Math.cos(Math.PI*t/i)-1)+n},easeInExpo:function(e,t,n,r,i){return t==0?n:r*Math.pow(2,10*(t/i-1))+n},easeOutExpo:function(e,t,n,r,i){return t==i?n+r:r*(-Math.pow(2,-10*t/i)+1)+n},easeInOutExpo:function(e,t,n,r,i){if(t==0)return n;if(t==i)return n+r;if((t/=i/2)<1)return r/2*Math.pow(2,10*(t-1))+n;return r/2*(-Math.pow(2,-10*--t)+2)+n},easeInCirc:function(e,t,n,r,i){return-r*(Math.sqrt(1-(t/=i)*t)-1)+n},easeOutCirc:function(e,t,n,r,i){return r*Math.sqrt(1-(t=t/i-1)*t)+n},easeInOutCirc:function(e,t,n,r,i){if((t/=i/2)<1)return-r/2*(Math.sqrt(1-t*t)-1)+n;return r/2*(Math.sqrt(1-(t-=2)*t)+1)+n},easeInElastic:function(e,t,n,r,i){var s=1.70158;var o=0;var u=r;if(t==0)return n;if((t/=i)==1)return n+r;if(!o)o=i*.3;if(u<Math.abs(r)){u=r;var s=o/4}else var s=o/(2*Math.PI)*Math.asin(r/u);return-(u*Math.pow(2,10*(t-=1))*Math.sin((t*i-s)*2*Math.PI/o))+n},easeOutElastic:function(e,t,n,r,i){var s=1.70158;var o=0;var u=r;if(t==0)return n;if((t/=i)==1)return n+r;if(!o)o=i*.3;if(u<Math.abs(r)){u=r;var s=o/4}else var s=o/(2*Math.PI)*Math.asin(r/u);return u*Math.pow(2,-10*t)*Math.sin((t*i-s)*2*Math.PI/o)+r+n},easeInOutElastic:function(e,t,n,r,i){var s=1.70158;var o=0;var u=r;if(t==0)return n;if((t/=i/2)==2)return n+r;if(!o)o=i*.3*1.5;if(u<Math.abs(r)){u=r;var s=o/4}else var s=o/(2*Math.PI)*Math.asin(r/u);if(t<1)return-.5*u*Math.pow(2,10*(t-=1))*Math.sin((t*i-s)*2*Math.PI/o)+n;return u*Math.pow(2,-10*(t-=1))*Math.sin((t*i-s)*2*Math.PI/o)*.5+r+n},easeInBack:function(e,t,n,r,i,s){if(s==undefined)s=1.70158;return r*(t/=i)*t*((s+1)*t-s)+n},easeOutBack:function(e,t,n,r,i,s){if(s==undefined)s=1.70158;return r*((t=t/i-1)*t*((s+1)*t+s)+1)+n},easeInOutBack:function(e,t,n,r,i,s){if(s==undefined)s=1.70158;if((t/=i/2)<1)return r/2*t*t*(((s*=1.525)+1)*t-s)+n;return r/2*((t-=2)*t*(((s*=1.525)+1)*t+s)+2)+n},easeInBounce:function(e,t,n,r,i){return r-jQuery.easing.easeOutBounce(e,i-t,0,r,i)+n},easeOutBounce:function(e,t,n,r,i){if((t/=i)<1/2.75){return r*7.5625*t*t+n}else if(t<2/2.75){return r*(7.5625*(t-=1.5/2.75)*t+.75)+n}else if(t<2.5/2.75){return r*(7.5625*(t-=2.25/2.75)*t+.9375)+n}else{return r*(7.5625*(t-=2.625/2.75)*t+.984375)+n}},easeInOutBounce:function(e,t,n,r,i){if(t<i/2)return jQuery.easing.easeInBounce(e,t*2,0,r,i)*.5+n;return jQuery.easing.easeOutBounce(e,t*2-i,0,r,i)*.5+r*.5+n}});e.waitForImages={hasImageProperties:["backgroundImage","listStyleImage","borderImage","borderCornerImage"]};e.expr[":"].uncached=function(t){var n=document.createElement("img");n.src=t.src;return e(t).is('img[src!=""]')&&!n.complete};e.fn.waitForImages=function(t,n,r){if(e.isPlainObject(arguments[0])){n=t.each;r=t.waitForAll;t=t.finished}t=t||e.noop;n=n||e.noop;r=!!r;if(!e.isFunction(t)||!e.isFunction(n)){throw new TypeError("An invalid callback was supplied.")}return this.each(function(){var i=e(this),s=[];if(r){var o=e.waitForImages.hasImageProperties||[],u=/url\((['"]?)(.*?)\1\)/g;i.find("*").each(function(){var t=e(this);if(t.is("img:uncached")){s.push({src:t.attr("src"),element:t[0]})}e.each(o,function(e,n){var r=t.css(n);if(!r){return true}var i;while(i=u.exec(r)){s.push({src:i[2],element:t[0]})}})})}else{i.find("img:uncached").each(function(){s.push({src:this.src,element:this})})}var a=s.length,f=0;if(a==0){t.call(i[0])}e.each(s,function(r,s){var o=new Image;e(o).bind("load error",function(e){f++;n.call(s.element,f,a,e.type=="load");if(f==a){t.call(i[0]);return false}});o.src=s.src})})};e.fn.swipe=function(t){if(!this)return false;var n={fingers:1,threshold:75,swipe:null,swipeLeft:null,swipeRight:null,swipeUp:null,swipeDown:null,swipeStatus:null,click:null,triggerOnTouchEnd:true,allowPageScroll:"auto"};var r="left";var i="right";var s="up";var o="down";var u="none";var a="horizontal";var f="vertical";var l="auto";var c="start";var h="move";var p="end";var d="cancel";var v="ontouchstart"in window,m=v?"touchstart":"mousedown",g=v?"touchmove":"mousemove",y=v?"touchend":"mouseup",b="touchcancel";var w="start";if(t.allowPageScroll==undefined&&(t.swipe!=undefined||t.swipeStatus!=undefined))t.allowPageScroll=u;if(t)e.extend(n,t);return this.each(function(){function t(){var e=S();if(e<=45&&e>=0)return r;else if(e<=360&&e>=315)return r;else if(e>=135&&e<=225)return i;else if(e>45&&e<135)return o;else return s}function S(){var e=P.x-H.x;var t=H.y-P.y;var n=Math.atan2(t,e);var r=Math.round(n*180/Math.PI);if(r<0)r=360-Math.abs(r);return r}function x(){return Math.round(Math.sqrt(Math.pow(H.x-P.x,2)+Math.pow(H.y-P.y,2)))}function T(e,t){if(n.allowPageScroll==u){e.preventDefault()}else{var c=n.allowPageScroll==l;switch(t){case r:if(n.swipeLeft&&c||!c&&n.allowPageScroll!=a)e.preventDefault();break;case i:if(n.swipeRight&&c||!c&&n.allowPageScroll!=a)e.preventDefault();break;case s:if(n.swipeUp&&c||!c&&n.allowPageScroll!=f)e.preventDefault();break;case o:if(n.swipeDown&&c||!c&&n.allowPageScroll!=f)e.preventDefault();break}}}function N(e,t){if(n.swipeStatus)n.swipeStatus.call(M,e,t,direction||null,distance||0);if(t==d){if(n.click&&(D==1||!v)&&(isNaN(distance)||distance==0))n.click.call(M,e,e.target)}if(t==p){if(n.swipe){n.swipe.call(M,e,direction,distance)}switch(direction){case r:if(n.swipeLeft)n.swipeLeft.call(M,e,direction,distance);break;case i:if(n.swipeRight)n.swipeRight.call(M,e,direction,distance);break;case s:if(n.swipeUp)n.swipeUp.call(M,e,direction,distance);break;case o:if(n.swipeDown)n.swipeDown.call(M,e,direction,distance);break}}}function C(e){D=0;P.x=0;P.y=0;H.x=0;H.y=0;B.x=0;B.y=0}function k(e){e.preventDefault();distance=x();direction=t();if(n.triggerOnTouchEnd){w=p;if((D==n.fingers||!v)&&H.x!=0){if(distance>=n.threshold){N(e,w);C(e)}else{w=d;N(e,w);C(e)}}else{w=d;N(e,w);C(e)}}else if(w==h){w=d;N(e,w);C(e)}O.removeEventListener(g,L,false);O.removeEventListener(y,k,false)}function L(e){if(w==p||w==d)return;var r=v?e.touches[0]:e;H.x=r.pageX;H.y=r.pageY;direction=t();if(v){D=e.touches.length}w=h;T(e,direction);if(D==n.fingers||!v){distance=x();if(n.swipeStatus)N(e,w,direction,distance);if(!n.triggerOnTouchEnd){if(distance>=n.threshold){w=p;N(e,w);C(e)}}}else{w=d;N(e,w);C(e)}}function A(e){var t=v?e.touches[0]:e;w=c;if(v){D=e.touches.length}distance=0;direction=null;if(D==n.fingers||!v){P.x=H.x=t.pageX;P.y=H.y=t.pageY;if(n.swipeStatus)N(e,w)}else{C(e)}O.addEventListener(g,L,false);O.addEventListener(y,k,false)}var O=this;var M=e(this);var _=null;var D=0;var P={x:0,y:0};var H={x:0,y:0};var B={x:0,y:0};try{this.addEventListener(m,A,false);this.addEventListener(b,C)}catch(j){}})}})(jQuery)