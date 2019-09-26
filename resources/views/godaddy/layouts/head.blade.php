<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<script type="text/javascript" src="https://bam.nr-data.net/1/4549d38e45?a=42733734&amp;v=1130.54e767a&amp;to=bwAAMhFZCBJSAhddX1ZKJBMNWxIIXA9MVUVMDUwQCl0REh0NAk1fTRFMEApdERIdFQZZQFQEFgM8Tg8ERFs3UV1ICQMSBm4PBERPBFFE&amp;rst=1597&amp;ref=https://sso.godaddy.com/login&amp;ap=51&amp;be=1063&amp;fe=1568&amp;dc=1567&amp;af=err,xhr,stn,ins&amp;perf=%7B%22timing%22:%7B%22of%22:1569453664116,%22n%22:0,%22u%22:906,%22ue%22:906,%22f%22:1,%22dn%22:4,%22dne%22:4,%22c%22:4,%22s%22:178,%22ce%22:420,%22rq%22:422,%22rp%22:901,%22rpe%22:1563,%22dl%22:910,%22di%22:1567,%22ds%22:1567,%22de%22:1567,%22dc%22:1568,%22l%22:1568,%22le%22:1571%7D,%22navigation%22:%7B%22ty%22:2%7D%7D&amp;fp=1236&amp;fcp=1236&amp;jsonp=NREUM.setToken">
	</script>
	<script src="https://js-agent.newrelic.com/nr-1130.min.js"></script>

	<script> type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"XAEBWFNVGwcCU1JRAAID"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(18),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(19),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var x=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof x&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof x&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(21)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(21)(r);n.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(21)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(21)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(21)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var x=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(){var t=window.NREUM,n=t.info.accountID||null,e=t.info.agentID||null,r=t.info.trustKey||null,i="btoa"in window&&"function"==typeof window.btoa;if(!n||!e||!i)return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:e,id:o.generateCatId(),tr:o.generateCatId(),ti:Date.now()}};return r&&n!==r&&(a.d.tk=r),btoa(JSON.stringify(a))}var o=t(16);n.exports={generateTraceHeader:r}},{}],11:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(l[r],this.listener,!1);n.aborted||(e.duration=s.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==n.status&&(n.status=0):a(this,t),e.cbTime=this.cbTime,d.emit("xhr-done",[t],t),c("xhr",[n,e,this.startTime]))}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return w(r)}function i(t,n){var e=f(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}function a(t,n){t.params.status=n.status;var e=o(n,t.lastSize);if(e&&(t.metrics.rxSize=e),t.sameOrigin){var r=n.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(12),u=t(10).generateTraceHeader,d=t("ee"),l=["load","error","abort","timeout"],p=l.length,h=t("id"),m=t(15),w=t(14),v=window.XMLHttpRequest;s.features.xhr=!0,t(9),d.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,n.loadCaptureCalled=!1,t.addEventListener("load",function(e){a(n,t)},!1),m&&(m>34||m<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),d.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),d.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var e=!1;if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(e=!!NREUM.init.distributed_tracing.enabled),e&&this.sameOrigin){var r=u();r&&n.setRequestHeader("newrelic",r)}}),d.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=w(r);i&&(e.txSize=i)}this.startTime=s.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{d.emit("internal-error",[e])}catch(r){}}};for(var a=0;a<p;a++)n.addEventListener(l[a],this.listener,!1)}),d.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),d.on("xhr-load-added",function(t,n){var e=""+h(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),d.on("xhr-load-removed",function(t,n){var e=""+h(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),d.on("addEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&d.emit("xhr-load-added",[t[1],t[2]],n)}),d.on("removeEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&d.emit("xhr-load-removed",[t[1],t[2]],n)}),d.on("fn-start",function(t,n,e){n instanceof v&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=s.now()))}),d.on("fn-end",function(t,n){this.xhrCbStart&&d.emit("xhr-cb-time",[s.now()-this.xhrCbStart,this.onload,n],n)})}},{}],12:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],13:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(18),s=t(19),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t,n){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,n])}},{}],14:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],15:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],16:[function(t,n,e){function r(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(n=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(n=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}n.exports={generateUuid:r,generateCatId:o}},{}],17:[function(t,n,e){function r(t,n){if(!o)return!1;if(t!==o)return!1;if(!n)return!0;if(!i)return!1;for(var e=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==e[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}n.exports={agent:o,version:i,match:r}},{}],18:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],19:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],20:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],21:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(19),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=m(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[g[e]];return d&&d.push([x,e,r,a]),a}}function p(t,n){y[t]=m(t).concat(n)}function h(t,n){var e=y[t];if(e)for(var r=0;r<e.length;r++)e[r]===n&&e.splice(r,1)}function m(t){return y[t]||[]}function w(t){return d[t]=d[t]||o(e)}function v(t,n){f(t,function(t,e){n=n||"feature",g[e]=n,n in u||(u[n]=[])})}var y={},g={},x={on:p,addEventListener:p,removeEventListener:h,emit:e,get:w,listeners:m,context:n,buffer:v,abort:a,aborted:!1};return x}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(18),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!E++){var t=b.info=NREUM.info,n=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(g,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=p.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return R.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(18),u=t("ee"),d=t(17),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var y=""+location,g={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1130.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:x,userAgent:d};t(13),p[h]?(p[h]("DOMContentLoaded",i,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",o),l[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,R=t(20)},{}]},{},["loader",2,11,4,3]);</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"4549d38e45","applicationID":"42733734","transactionName":"bwAAMhFZCBJSAhddX1ZKJBMNWxIIXA9MVUVMDUwQCl0REh0NAk1fTRFMEApdERIdFQZZQFQEFgM8Tg8ERFs3UV1ICQMSBm4PBERPBFFE","queueTime":0,"applicationTime":51,"agent":""}
</script>
<meta name="google" content="notranslate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign In</title>
<link rel="preload" href="//img1.wsimg.com/ux/fonts/uxfont/1.5/uxfont.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="//img1.wsimg.com/ux/fonts/boing/1.0/Boing-Bold.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="//img1.wsimg.com/ux/fonts/gd-sage/1.0/gd-sage-bold.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-bold.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-regular.woff2" as="font" type="font/woff2" crossorigin="">
<style>
@font-face {
  font-family: uxfont;
  src: url(//img1.wsimg.com/ux/fonts/uxfont/1.5/uxfont.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/uxfont/1.5/uxfont.woff) format("woff");
  font-display: block;
}
@font-face {
  font-family: Boing-Bold;
  src: url(//img1.wsimg.com/ux/fonts/boing/1.0/Boing-Bold.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/boing/1.0/Boing-Bold.woff) format("woff");
  font-display: swap;
}
@font-face {
  font-family: gd-sage;
  src: url(//img1.wsimg.com/ux/fonts/gd-sage/1.0/gd-sage-bold.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/gd-sage/1.0/gd-sage-bold.woff) format("woff");
  font-weight: 700;
  font-display: swap;
}
@font-face {
  font-family: gdsherpa;
  src: url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-bold.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-bold.woff) format("woff");
  font-weight: 700;
  font-display: swap;
}
@font-face {
  font-family: gdsherpa;
  src: url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-regular.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-regular.woff) format("woff");
  font-display: swap;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/wrhs/83f8841ad9b44a6c10f5d404bd2e64c6/uxcore2.min.css" media="all"><link rel="stylesheet" href="https://img1.wsimg.com/wrhs/5f409f8de2794d7e8a8710da35442be6/utilityheader.min.css" media="all"><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/ux/favicon/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/ux/favicon/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/ux/favicon/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="//img1.wsimg.com/ux/favicon/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/ux/favicon/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/ux/favicon/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/ux/favicon/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/ux/favicon/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/ux/favicon/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="//img1.wsimg.com/ux/favicon/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="//img1.wsimg.com/ux/favicon/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="//img1.wsimg.com/ux/favicon/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="//img1.wsimg.com/ux/favicon/favicon-16x16.png"><link rel="mask-icon" href="//img1.wsimg.com/ux/favicon/favicon-16x16.svg" color="black"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="//img1.wsimg.com/ux/favicon/ms-icon-144x144.png"><meta name="msapplication-config" content="//img1.wsimg.com/ux/favicon/browserconfig.xml"><meta name="theme-color" content="#ffffff"><link rel="manifest" href="//img1.wsimg.com/ux/favicon/manifest.json"><style>#left-col{display:none !important}body{min-height:0 !important}body.ux-app.uxf-flex.market-selector-open{overflow:scroll}html{background-size:0;background-position:top center;background-repeat:no-repeat}.lg-container{margin:0 auto}#login-container{margin-top:0}@media screen and (min-width:520px){#login-container{margin-top:10px}}@media screen and (min-width:768px){#login-container-row{display:flex}#login-container-col{margin-bottom:10px}#left-col{display:block !important}}@media screen and (min-width:992px){.lg-container{width:980px}#login-container-parent{display:table}#login-container-col{width:460px}#login-container{margin-top:40px}html{background-size:cover !important}body{background-color:transparent !important}}@media screen and (min-width:1200px){#login-container-col{width:565px}.lg-container{width:1150px}}</style><style>#pass-bg{position:absolute;top:20%;width:50%;display:none}@media screen and (min-width:992px){#pass-bg{display:block}}</style><link href="https://img1.wsimg.com/auth/v1/static/2652/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"><style>
      
        html {
          background-position-x: left;
        }
      

      

      

      
      

    </style><script>
    //bfcache handling for safari on ipad
    window.onpageshow = function (event) {
        if (event.persisted) {
            window.location.reload()
        }
    };

    window.sso = window.sso || {};
    window.sso.status =  undefined ;
    window.sso.version = 'v1';
    window.sso.host = "godaddy.com";
    window.sso.plid = 1;
    window.sso.auth_type = "";
    window.sso.app = "";
    window.sso.path = "";
    window.sso.market = "en_US";
    window.sso.traffic_prefix = "";
    window.sso.is_china = "False" == "True";
    window.sso.url_params = {'app': 'email', 'realm': 'pass'};
    window.sso.realm = "pass"
    window.sso.locale_static_url = "https://img1.wsimg.com/auth/v1/static/2652/react/locale/en_US.json"
    window.sso.splits = {};
    window.sso.consent_show_button =  undefined ;
    window.sso.consent_show_checkbox =  undefined ;
    window.sso.iframe =  false ;
    window.sso.agent_theme_prop =  "light" ;

    // iterate over active plits and pass to experimentation traffic
    for (split in window.sso.splits) {
        var _expDataLayer = window._expDataLayer || [];
        _expDataLayer.push({
            'schema': 'add_experiment_assignment',
            'type': 'abn',
            'version': 'v1',
            'data': {
                'experiment_id': window.sso.splits[split].experiment_id,
                'variant_id': window.sso.splits[split].treatment,
                'experiment_source': 'SplitIO'
            }
        });
    }
</script><script>
        window.sso.default_app_for_realm = "email"
        window.sso.social_site = "";
        window.sso.login_info_username =  undefined ;
        window.sso.login_info_remember_me =  false ;
        window.sso.is_wechat_market = ""=="True";
        window.sso.defaults_by_market = "False"=="True";
        window.sso.enable_deepsee =  false ;

       var ux = ux || {};
       ux.eldorado = ux.eldorado || {};
       ux.eldorado.page = {
         domain: 'godaddy.com',     // Domain page is loaded on.
         shopperId: '',        // ID of the logged in shopper.                           //
         version: 'v1',              // Version of your Application.
         server: 'a2plcauth022',       // Hostname of server that handled this request.
         sso: {                   // (Optional)
           app: 'sso',    // Custom SSO app name if different from UX Platform app name.
           page: '/login'  // HTTP path to the current page (Used by SSO for redirects).
        },
        currentPage: 'v1%2Flogin',
        urlArgs: {'app': 'email', 'realm': 'pass'},
        disableDeprecationBanner: true,
        hideAccountDelegationBanner: true
       };

       // AUTH-5729 Include realm so that the PASS traffic can be filtered out by EXP team

        ux.gaconfig = ux.gaconfig || [];
        ux.gaconfig.push({ 'tcc.realm': 'pass' });

    </script>
    <meta name="google-site-verification" content="t7JT1iH2iscenNr74R-kgXPljL_ru6OPiT9RE8zDk04">
    <script src="https://img1.wsimg.com/wrhs/2895492640297534a9363cb246382ef3/tcc.min.js"></script>
    <script src="https://img1.wsimg.com/poly/v3/polyfill.min.js?features=Promise,Promise.prototype.finally,fetch,AbortController,Intl.~locale.en-US&amp;rum=0&amp;unknown=polyfill&amp;flags=gated"></script>
    <script src="https://img1.wsimg.com/wrhs/8cb36bd60ad5db1a5950fb0863a1627c/vendor.min.js"></script>
    <script src="https://img1.wsimg.com/wrhs/952f5a2aeb12052b1656876eb13991ff/uxcore2.min.js"></script>
    <script src="https://img1.wsimg.com/wrhs/4a3e8d4a329e0cbc5c9e16996cb9b3f7/heartbeat.min.js"></script>
    <script src="https://img1.wsimg.com/wrhs/69c91f975c1ed48b2045b1b0d40d2ecd/utilityheader.min.js"></script>
    <style type="text/css">.round-key-cls-1 {
  fill:#2b2b2b;
  stroke:#000;
  stroke-linecap:round;
  stroke-linejoin:round;
  stroke-width:4px;
}
.round-key-cls-2 {
  fill:#757575;
}
.round-key-cls-3{
  fill:#999;
}
#round-security-key-svg {
  min-width: 100px;
  min-height: 100px;
}

@media screen and (max-width: 330px) {
  #round-security-key-svg {
    height: 50px;
    width: 50px;
  }
}</style><style type="text/css">/******************* All buttons *******************/
.alternative-login-button {
  min-height: 40px;
}

#social-login-buttons-container .ux-btn-set {
  flex-direction: unset;
}

#social-login-buttons-container .ux-btn-set.ux-btn-split .ux-btn-set-item {
  width: 100%;
}

#social-login-buttons-container .ux-btn-set .ux-btn-set-item, .modal-footer .ux-btn-set .ux-btn-set-item + .ux-btn-set-item {
  margin-bottom: 0;
}

#social-login-buttons-container.icon-only .ux-btn-set {
  justify-content: center;
}

@media (max-width: 325px) {
    #social-login-buttons-container .ux-btn-set-item {
      padding-left: 5px;
      padding-right: 5px;
    }
}

/******************* Social Buttons *******************/

#social-login-buttons-container.default #fb_auth {
  background:#4267B2!important;
  border-color:#4267B2!important;
  font-family: gdsherpa, Helvetica, Arial, sans-serif; 
}

#social-login-buttons-container.default #wechat_auth {
  background: #1AAD19!important;
  border-color:#1AAD19!important;
  font-family: gdsherpa, Helvetica, Arial, sans-serif; 
}

#social-login-buttons-container.default #amazon_auth {
  background: #F0C556!important;
  border-color:#F0C556!important;
  font-family: gdsherpa, Helvetica, Arial, sans-serif;
}

#social-logo {
  position: relative;
  top: 2px;
  height: 20px;
  margin-right: 8px;
}

#amazon-btn-txt {
  color: black!important;
}

#social-login-buttons-container.default #social-logo.fb-logo {
  fill: white;
}

#social-login-buttons-container.deepsee #social-logo.fb-logo {
  fill: #4267B2;
}

#social-login-buttons-container.deepsee #fb-btn-txt {
  color: #4267B2 !important;
}

.alternative-login-button-icon-only {
  min-width: 48px !important;
  max-width: 48px !important;
  padding-left: 2px !important;
  padding-right: 2px !important;
}

.alternative-login-button-icon-only #social-logo {
  margin-right: 0;
}

#wechat_auth.alternative-login-button-icon-only {
  margin-left: 25px !important;
  margin-right: 25px !important;
}

/******************* End of Social buttons *******************/


/******************* 'Or' labeled divider for buttons *******************/
#labeled-divider {
  overflow: hidden;
  text-align: center;
  padding: 10px !important;
  font-size:18px !important;
}

#labeled-divider > span {
  position: relative;
  display:
  inline-block;
}

#labeled-divider > span:before, #labeled-divider > span:after {
  position: absolute;
  top: 51%;
  width: 44%;
  height: 1px;
  content: '\A0';
  background-color: #E2E2E2;
}

#labeled-divider > span:before {
  right: 53%;
  margin-right:15px;
}

#labeled-divider > span:after {
  left: 53%;
  margin-left:15px;
}
/***************** End of 'Or' labeled divider for buttons *****************/
</style><style type="text/css">.st0 {
  fill: #EF6C0F
}
.st1 {
  fill: #111111
}
.st2 {
  fill: #FFFFFF
}
.st3 {
  fill: #02C54C
}
.st4 {
  fill: #FEDC45
}
.st5 {
  fill: none
}
</style><style type="text/css">/******************* General Panel Spacing *******************/

#login-panel .form-group {
  margin-bottom: 10px;
}

#login-panel .form-text {
  margin-bottom: 10px;
}

#login-panel .modal-footer {
  justify-content: flex-start
}

#login-panel .card,
#login-panel .ux-card {
    margin-bottom: 0;
}

@media screen and (max-width: 767px) {
  #login-panel #new-ux.card.ux-card.idp .card-block.idp,
  #login-panel #new-ux.card.ux-card.reseller .card-block.reseller {
    padding-top: 8px !important;
  }
}

/***************** End of General Panel Spacing *****************/
/***************** Form Header *****************/
#login-panel .idp #form-header {
  margin-bottom: 15px;
}

#login-panel .idp-form-header,
#login-panel #form-header #godaddy-template {
  justify-content: center;
  align-items: flex-end;
  flex-wrap: wrap;
  padding-top: 0px;
}

#login-panel #new-ux #form-header #godaddy-template {
  display: flex;
}

#login-panel #new-ux #form-header #godaddy-template .logo {
  max-width: 30px;
  max-height: 45px;
}

#login-panel #form-header #godaddy-template #head-logo-container {
  width: 35px;
}

#login-panel #new-ux #godaddy-template #head-logo-container {
  margin: 0;
}

#login-panel #form-header h2 {
  margin-bottom: 0px;
}

#login-panel #new-ux #form-header #godaddy-template h2 {
  text-align: center;
}

#login-panel #new-ux #form-header #godaddy-template .country-name {
  visibility: hidden;
}

#login-panel .reseller #form-header {
  margin-bottom: 10px;
}

#login-panel #form-header #reseller-template {
  padding-top: 0px;
  margin-bottom: 0px;
}

#login-panel #form-header #reseller-template #reseller-name {
  padding-bottom: 15px;
}

#login-panel #form-header #reseller-template h2 {
  text-align: left;
  padding-top: 0px;
}

#login-panel #new-ux #reseller-template .logo {
  max-height: 36px;
  margin-bottom: 10px;
}

#login-panel .card-block.pass {
  padding: 0px;
}

#login-panel #provisioning-template {
  padding-top: 10px;
  padding-bottom: 40px;
}

#login-panel #provisioning-template .page-title{
  margin-bottom: 16px;
}

#login-panel #provisioning-template .page-subtitle{
  margin-bottom: 8px;
}

#login-panel #provisioning-template #submit-button{
  display: grid;
}

#login-panel #provisioning-template .password-confirm-pwd .form-group {
  margin-bottom: 24px !important;
}

#login-panel #provisioning-template .password-confirm-pwd {
  padding-top: 8px;
}

#login-panel .pass #form-container {
  padding: 10px 20px 30px 20px;
}

#login-panel #form-header #pass-template .logo-container-pass-o365{
  padding-top: 0px;
  margin-bottom: 15px;
}

#login-panel .tos-text {
  color: #999999;
  display: inline;
  font-size: 13px;
}

#login-panel #success-screen #form-header {
  margin-bottom: 16px;
  margin-top: 40px;
}

#login-panel #success-screen h4 {
  margin-bottom: 0;
}

#login-panel #success-screen #finish-string-container {
  padding-top: 0;
}

#login-panel #provisioning-template {
  padding-left: 20px;
  padding-right: 20px;
}

@media (min-width: 768px) {
  #login-panel #new-ux.card.ux-card.idp,
  #login-panel #new-ux.card.ux-card.reseller {
    max-width: 454px;
  }
  #login-panel #new-ux.card.ux-card .card-block.idp,
  #login-panel #new-ux.card.ux-card .card-block.reseller {
    padding: 40px 48px !important;
  }

  #login-panel #provisioning-template {
    padding-left: 90px;
    padding-right: 90px;
  }
}

@media (min-width: 1200px) {
  #login-panel .pass #form-container {
    padding: 25px 100px 35px 100px;
  }
}

/******************* Links *******************/
#login-panel a {
  cursor: pointer;
}

#login-panel #new-ux #create-account-link {
  display: flex;
  flex-wrap: wrap;
  padding-bottom: 15px;
  justify-content: center;
}

#login-panel #new-ux #create-account-link p {
  margin-bottom: 0px;
  margin-right: 5px;
}

#login-panel #new-ux.idp #create-account-link {
  justify-content: center;
}

#login-panel #new-ux.reseller #create-account-link {
  justify-content: left;
}


/******************* Form fields *******************/
#login-panel .sso-field-danger {
    border-color: #db1802 !important;
    background-color: #fadcd9 !important;
    box-shadow: none !important;
}

/******************* Remember-me *******************/
#login-panel #remember-me-container > .form-group {
  display: inline;
}

#login-panel #remember-me-container #label-remember-me {
  margin-right: auto !important;
}

#login-panel #new-ux #remember-me-container {
  margin-bottom: 2px;
}

/***************** End Remember-me *****************/
/***************** End form fields *****************/

/******************* All Buttons *******************/
#login-panel .card-block button:not(.alternative-login-button) {
  max-height: 40px;
}

#login-panel .card-block #submitBtn {
  min-width: 100%;
}

#login-panel .card-block .modal-footer #sign-in-btn {
  margin-bottom: 0px;
}

#login-panel .card-block .modal-footer #create-with-fb-btn {
  white-space: nowrap;
}

#login-panel .modal .ux-btn-set {
  margin-bottom: 0px;
  width: 100%;
}

#login-panel #text-social-button-divider {
  margin-top: 7px;
  margin-bottom: 11px;
  text-align: center;
}

#login-panel #emailPromoButton {
  min-width: 100%;
  max-height: 40px;
}

/***************** End of All Buttons *****************/

/******************* Reseller extra footer  *******************/
#login-panel .reseller-help-info {
    text-align: center;
    margin-top: 15px;
}

#login-panel .btn-link {
    cursor: pointer;
    text-decoration: underline;
}
/***************** End reseller extra footer  *****************/

/******************* Dont have account footer *******************/
#login-panel #form-footer {
  padding: 2px 0 10px 0;
  text-align: center;
  border-bottom-left-radius: 8px;
  border-bottom-right-radius: 8px;
}

#login-panel #form-footer #account-message {
  color: #444;
  margin: 5px 0 5px 0;
  font-size: 18px;
}

/********* Email Promo Footer for PASS **********/

#login-panel #email-promo-footer {
  text-align: center;
  position: relative;
  display: flex;
  flex-direction: column;
  word-wrap: break-word;
  background-clip: border-box;
  margin-top: 20px;
  padding: 0px 20px 0px 20px;
  margin-bottom: 30px;
}

@media (min-width: 1200px) {
  #login-panel #email-promo-footer {
    padding: 0px 100px 0px 100px;
  }
}

#login-panel #email-promo-footer #email-message {
  color: #444;
  font-size: 16px;
  text-align: center;
  margin-bottom: 15px;
}

/***************** End Dont have account footer *****************/
</style>
<style type="text/css">
	/* MARGINS & PADDINGS */
.p-none {
  padding: 0 !important; }

.p-xxs {
  padding: 5px !important; }

.p-xs {
  padding: 10px !important; }

.p-sm {
  padding: 15px !important; }

.p-m {
  padding: 20px !important; }

.p-md {
  padding: 25px !important; }

.p-lg {
  padding: 30px !important; }

.p-xl {
  padding: 40px !important; }

.p-t-none {
  padding-top: 0; }

.p-t-xxs {
  padding-top: 5px; }

.p-t-xs {
  padding-top: 10px; }

.p-t-sm {
  padding-top: 15px; }

.p-t-m {
  padding-top: 20px; }

.p-t-md {
  padding-top: 25px; }

.p-t-lg {
  padding-top: 30px; }

.p-t-xl {
  padding-top: 40px; }

.m-xxs {
  margin: 2px 4px; }

.m-xs {
  margin: 5px; }

.m-sm {
  margin: 10px; }

.m {
  margin: 15px; }

.m-md {
  margin: 20px; }

.m-lg {
  margin: 30px; }

.m-xl {
  margin: 50px; }

.m-none {
  margin: 0 !important; }

.m-l-none {
  margin-left: 0; }

.m-l-xs {
  margin-left: 5px; }

.m-l-sm {
  margin-left: 10px; }

.m-l {
  margin-left: 15px; }

.m-l-md {
  margin-left: 20px; }

.m-l-lg {
  margin-left: 30px; }

.m-l-xl {
  margin-left: 40px; }

.m-l-n-xxs {
  margin-left: -1px; }

.m-l-n-xs {
  margin-left: -5px; }

.m-l-n-sm {
  margin-left: -10px; }

.m-l-n {
  margin-left: -15px; }

.m-l-n-md {
  margin-left: -20px; }

.m-l-n-lg {
  margin-left: -30px; }

.m-l-n-xl {
  margin-left: -40px; }

.m-t-none {
  margin-top: 0; }

.m-t-xxs {
  margin-top: 1px; }

.m-t-xs {
  margin-top: 5px; }

.m-t-sm {
  margin-top: 10px; }

.m-t {
  margin-top: 15px; }

.m-t-md {
  margin-top: 20px; }

.m-t-lg {
  margin-top: 30px; }

.m-t-xl {
  margin-top: 40px; }

.m-t-xxl {
  margin-top: 50px; }

.m-t-xxxl {
  margin-top: 60px; }

.m-t-n-xxs {
  margin-top: -1px; }

.m-t-n-xs {
  margin-top: -5px; }

.m-t-n-sm {
  margin-top: -10px; }

.m-t-n {
  margin-top: -15px; }

.m-t-n-md {
  margin-top: -20px; }

.m-t-n-lg {
  margin-top: -30px; }

.m-t-n-xl {
  margin-top: -40px; }

.m-r-none {
  margin-right: 0; }

.m-r-xxs {
  margin-right: 1px; }

.m-r-xs {
  margin-right: 5px; }

.m-r-sm {
  margin-right: 10px; }

.m-r {
  margin-right: 15px; }

.m-r-md {
  margin-right: 20px; }

.m-r-lg {
  margin-right: 30px; }

.m-r-xl {
  margin-right: 40px; }

.m-r-n-xxs {
  margin-right: -1px; }

.m-r-n-xs {
  margin-right: -5px; }

.m-r-n-sm {
  margin-right: -10px; }

.m-r-n {
  margin-right: -15px; }

.m-r-n-md {
  margin-right: -20px; }

.m-r-n-lg {
  margin-right: -30px; }

.m-r-n-xl {
  margin-right: -40px; }

.m-b-none {
  margin-bottom: 0 !important; }

.m-b-xxs {
  margin-bottom: 1px; }

.m-b-xs {
  margin-bottom: 5px; }

.m-b-sm {
  margin-bottom: 10px; }

.m-b {
  margin-bottom: 15px; }

.m-b-md {
  margin-bottom: 20px; }

.m-b-lg {
  margin-bottom: 30px; }

.m-b-xl {
  margin-bottom: 40px; }

.m-b-n-xxs {
  margin-bottom: -1px; }

.m-b-n-xs {
  margin-bottom: -5px; }

.m-b-n-sm {
  margin-bottom: -10px; }

.m-b-n {
  margin-bottom: -15px; }

.m-b-n-md {
  margin-bottom: -20px; }

.m-b-n-lg {
  margin-bottom: -30px; }

.m-b-n-xl {
  margin-bottom: -40px; }

.space-15 {
  margin: 15px 0; }

.space-20 {
  margin: 20px 0; }

.space-25 {
  margin: 25px 0; }

.space-30 {
  margin: 30px 0; }

#headless-logo-container svg {
  max-height: 24px; }

#form-header {
  width: 100%;
  margin-bottom: 0px;
  padding-bottom: 0px; }
  #form-header .top-spacer {
    padding-top: 10px; }
  #form-header .logo-container {
    position: relative;
    width: 100%;
    margin: auto; }
  #form-header .logo {
    max-width: 150px;
    max-height: 50px; }
  #form-header .leftAligned {
    text-align: left; }
  #form-header .white-override {
    color: white; }
  #form-header #godaddy-template #default-logo-container {
    width: 150px;
    margin: auto; }
    #form-header #godaddy-template #default-logo-container .country-name {
      z-index: 100;
      position: absolute;
      font-size: 11px;
      right: 12px;
      top: 3px;
      white-space: nowrap; }
  #form-header #godaddy-template #head-logo-container {
    width: 36px;
    margin: auto; }
    #form-header #godaddy-template #head-logo-container .country-name {
      z-index: 100;
      position: absolute;
      font-size: 11px;
      left: 35px;
      top: 38px;
      white-space: nowrap; }
  #form-header #pass-template .logo-container-pass {
    background: #333;
    padding: 30px 0;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px; }
  #form-header #pass-template .logo-container-pass-o365 {
    width: 150px;
    margin: auto; }
  #form-header #pass-template .logo-container-pass-o365-sign-in {
    margin: auto;
    background: #E74225;
    padding: 30px 0;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px; }
  #form-header #reseller-template .reseller-logo-container {
    width: 150px;
    margin: auto; }

@media (min-width: 768px) {
  #headless-logo-container svg {
    max-height: 32px; }
  #form-header .top-spacer {
    padding-top: 20px; }
  #form-header #reseller-template .logo {
    max-height: 36px !important; }
  #form-header .logo {
    max-width: 275px;
    max-height: 75px; }
  #form-header #godaddy-template #default-logo-container {
    width: 275px;
    margin: auto; }
    #form-header #godaddy-template #default-logo-container .country-name {
      font-size: 15px !important;
      right: 40px;
      top: 5px;
      white-space: nowrap; }
  #form-header #godaddy-template #head-logo-container {
    width: 55px;
    margin: auto; }
    #form-header #godaddy-template #head-logo-container .country-name {
      font-size: 15px !important;
      left: 50px;
      top: 58px;
      white-space: nowrap; }
  #form-header #pass-template .logo-container-pass-o365 {
    width: 175px;
    margin: auto; }
  #form-header #reseller-template .reseller-logo-container {
    width: 275px;
    margin: auto; } }

#form-header #title .headline-brand {
  margin-top: 12px;
  margin-bottom: 0; }

@media (min-width: 768px) {
  #form-header #title .headline-brand {
    margin-top: 0;
    margin-bottom: 0; } }
</style>
</head>