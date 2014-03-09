(function(){var t,e,n,r,o,u,i,c,a,l,d,s,f,h,p,m,v,g,y,w,b,x,T,k,A,E,L,S,H,C,M,R,D,N,q,O,X,j,K,P,$,G,Q,Y,F,z,B,I,J,U,_,V,W,Z,te,ee,ne,re,oe,ue,ie=[].indexOf||function(t){for(var e=0,n=this.length;n>e;e++)if(e in this&&this[e]===t)return e;return-1},ce=[].slice;X={},d=10,te=!1,m=null,D=null,E=["html"],Q=null,h=null,oe=null,b=function(t){var e;return I(),l(),Y(t),te&&(e=ee(t))?(x(e),T(t)):T(t,W)},ee=function(t){var e;return e=X[t],e&&!e.transitionCacheDisabled?e:void 0},v=function(t){return null==t&&(t=!0),te=t},T=function(t,e){return null==e&&(e=function(){return function(){}}(this)),ne("page:fetch",{url:t}),null!=oe&&oe.abort(),oe=new XMLHttpRequest,oe.open("GET",U(t),!0),oe.setRequestHeader("Accept","text/html, application/xhtml+xml, application/xml"),oe.setRequestHeader("X-XHR-Referer",Q),oe.onload=function(){var n;return ne("page:receive"),(n=$())?(s.apply(null,w(n)),F(),e(),ne("page:load")):document.location.href=t},oe.onloadend=function(){return oe=null},oe.onerror=function(){return document.location.href=t},oe.send()},x=function(t){return null!=oe&&oe.abort(),s(t.title,t.body),G(t),ne("page:restore")},l=function(){return X[m.url]={url:document.location.href,body:document.body,title:document.title,positionY:window.pageYOffset,positionX:window.pageXOffset,cachedAt:(new Date).getTime(),transitionCacheDisabled:null!=document.querySelector("[data-no-transition-cache]")},f(d)},K=function(t){return null==t&&(t=d),/^[\d]+$/.test(t)?d=parseInt(t):void 0},f=function(t){var e,n,r,o,u,i;for(r=Object.keys(X),e=r.map(function(t){return X[t].cachedAt}).sort(function(t,e){return e-t}),i=[],o=0,u=r.length;u>o;o++)n=r[o],X[n].cachedAt<=e[t]&&(ne("page:expire",X[n]),i.push(delete X[n]));return i},s=function(e,n,r,o){return document.title=e,document.documentElement.replaceChild(n,document.body),null!=r&&t.update(r),o&&g(),m=window.history.state,ne("page:change"),ne("page:update")},g=function(){var t,e,n,r,o,u,i,c,a,l,d,s;for(u=Array.prototype.slice.call(document.body.querySelectorAll('script:not([data-turbolinks-eval="false"])')),i=0,a=u.length;a>i;i++)if(o=u[i],""===(d=o.type)||"text/javascript"===d){for(e=document.createElement("script"),s=o.attributes,c=0,l=s.length;l>c;c++)t=s[c],e.setAttribute(t.name,t.value);e.appendChild(document.createTextNode(o.innerHTML)),r=o.parentNode,n=o.nextSibling,r.removeChild(o),r.insertBefore(e,n)}},_=function(t){return t.innerHTML=t.innerHTML.replace(/<noscript[\S\s]*?<\/noscript>/gi,""),t},Y=function(t){return t!==Q?window.history.pushState({turbolinks:!0,url:t},"",t):void 0},F=function(){var t,e;return(t=oe.getResponseHeader("X-XHR-Redirected-To"))?(e=J(t)===t?document.location.hash:"",window.history.replaceState(m,"",t+e)):void 0},I=function(){return Q=document.location.href},B=function(){return window.history.replaceState({turbolinks:!0,url:document.location.href},"",document.location.href)},z=function(){return m=window.history.state},G=function(t){return window.scrollTo(t.positionX,t.positionY)},W=function(){return document.location.hash?document.location.href=document.location.href:window.scrollTo(0,0)},U=function(t){return J(t)},J=function(t){var e;return e=t,null==t.href&&(e=document.createElement("A"),e.href=t),e.href.replace(e.hash,"")},P=function(t){var e,n;return e=(null!=(n=document.cookie.match(new RegExp(t+"=(\\w+)")))?n[1].toUpperCase():void 0)||"",document.cookie=t+"=; expires=Thu, 01-Jan-70 00:00:01 GMT; path=/",e},ne=function(t,e){var n;return n=document.createEvent("Events"),e&&(n.data=e),n.initEvent(t,!0,!0),document.dispatchEvent(n)},j=function(){return!ne("page:before-change")},$=function(){var t,e,n,r,o,u;return e=function(){var t;return 400<=(t=oe.status)&&600>t},u=function(){return oe.getResponseHeader("Content-Type").match(/^(?:text\/html|application\/xhtml\+xml|application\/xml)(?:;|$)/)},r=function(t){var e,n,r,o,u;for(o=t.head.childNodes,u=[],n=0,r=o.length;r>n;n++)e=o[n],null!=("function"==typeof e.getAttribute?e.getAttribute("data-turbolinks-track"):void 0)&&u.push(e.getAttribute("src")||e.getAttribute("href"));return u},t=function(t){var e;return D||(D=r(document)),e=r(t),e.length!==D.length||o(e,D).length!==D.length},o=function(t,e){var n,r,o,u,i;for(t.length>e.length&&(u=[e,t],t=u[0],e=u[1]),i=[],r=0,o=t.length;o>r;r++)n=t[r],ie.call(e,n)>=0&&i.push(n);return i},!e()&&u()&&(n=h(oe.responseText),n&&!t(n))?n:void 0},w=function(e){var n;return n=e.querySelector("title"),[null!=n?n.textContent:void 0,_(e.body),t.get(e).token,"runScripts"]},t={get:function(t){var e;return null==t&&(t=document),{node:e=t.querySelector('meta[name="csrf-token"]'),token:null!=e?"function"==typeof e.getAttribute?e.getAttribute("content"):void 0:void 0}},update:function(t){var e;return e=this.get(),null!=e.token&&null!=t&&e.token!==t?e.node.setAttribute("content",t):void 0}},r=function(){var t,e,n,r,o,u;e=function(t){return(new DOMParser).parseFromString(t,"text/html")},t=function(t){var e;return e=document.implementation.createHTMLDocument(""),e.documentElement.innerHTML=t,e},n=function(t){var e;return e=document.implementation.createHTMLDocument(""),e.open("replace"),e.write(t),e.close(),e};try{if(window.DOMParser)return o=e("<html><body><p>test"),e}catch(i){return r=i,o=t("<html><body><p>test"),t}finally{if(1!==(null!=o?null!=(u=o.body)?u.childNodes.length:void 0:void 0))return n}},H=function(t){return t.defaultPrevented?void 0:(document.removeEventListener("click",k,!1),document.addEventListener("click",k,!1))},k=function(t){var e;return t.defaultPrevented||(e=y(t),"A"!==e.nodeName||L(t,e))?void 0:(j()||re(e.href),t.preventDefault())},y=function(t){var e;for(e=t.target;e.parentNode&&"A"!==e.nodeName;)e=e.parentNode;return e},p=function(t){return location.protocol!==t.protocol||location.host!==t.host},n=function(t){return(t.hash&&J(t))===J(location)||t.href===location.href+"#"},q=function(t){var e;return e=J(t),e.match(/\.[a-z]+(\?.*)?$/g)&&!e.match(new RegExp("\\.(?:"+E.join("|")+")?(\\?.*)?$","g"))},N=function(t){for(var e;!e&&t!==document;)e=null!=t.getAttribute("data-no-turbolink"),t=t.parentNode;return e},Z=function(t){return 0!==t.target.length},O=function(t){return t.which>1||t.metaKey||t.ctrlKey||t.shiftKey||t.altKey},L=function(t,e){return p(e)||n(e)||q(e)||N(e)||Z(e)||O(t)},e=function(){var t,e,n,r;for(e=1<=arguments.length?ce.call(arguments,0):[],n=0,r=e.length;r>n;n++)t=e[n],E.push(t);return E},a=function(t){return setTimeout(t,500)},C=function(){return document.addEventListener("DOMContentLoaded",function(){return ne("page:change"),ne("page:update")},!0)},R=function(){return"undefined"!=typeof jQuery?jQuery(document).on("ajaxSuccess",function(t,e){return jQuery.trim(e.responseText)?ne("page:update"):void 0}):void 0},M=function(t){var e,n;return(null!=(n=t.state)?n.turbolinks:void 0)?(e=X[t.state.url])?(l(),x(e)):re(t.target.location.href):void 0},S=function(){return B(),z(),h=r(),document.addEventListener("click",H,!0),a(function(){return window.addEventListener("popstate",M,!1)})},A=void 0!==window.history.state||navigator.userAgent.match(/Firefox\/2[6|7]/),i=window.history&&window.history.pushState&&window.history.replaceState&&A,o=!navigator.userAgent.match(/CriOS\//),V="GET"===(ue=P("request_method"))||""===ue,c=i&&o&&V,u=document.addEventListener&&document.createEvent,u&&(C(),R()),c?(re=b,S()):re=function(t){return document.location.href=t},this.Turbolinks={visit:re,pagesCached:K,enableTransitionCache:v,allowLinkExtensions:e,supported:c}}).call(this);