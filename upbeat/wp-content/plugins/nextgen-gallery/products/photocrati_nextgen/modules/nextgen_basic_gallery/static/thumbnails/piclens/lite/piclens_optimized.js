/* PicLens Lite: version 1.3.1 (14221)
 * Copyright (c) 2008 Cooliris, Inc.  All Rights Reserved.
 * 
 * The JavaScript part of PicLens Lite (i.e., this file) is BSD licensed (see: http://lite.piclens.com/bsdlicense)
 * This launcher includes and interacts with SWFObject (MIT), BrowserDetect (BSD Compatible), and Lytebox (CC Attribution 3.0).
 * 
 * There are two versions of this JS: 
 * http://lite.piclens.com/current/piclens.js               full commented file         (~39KB)
 * http://lite.piclens.com/current/piclens_optimized.js     lighter deployment file     (~21KB)
 */
var PicLensLite={start:function(B){this.determineBrowserParams();clearTimeout(this.REMOVE_TIMER_ID);clearTimeout(this.AUTO_CLOSE_TIMER_ID);this.ARGS={};if(typeof B!=="undefined"&&B!==null){this.ARGS=B;if(B.feedUrl){this.THE_FEED_URL=B.feedUrl;if(this.checkForPluginAndLaunchIfPossible(B.feedUrl,B.guid)){return }if(B.loadFeedInFlash){this.showFlashUI("")}else{this.loadViaXHR(B.feedUrl)}}if(typeof B.feedData!=="undefined"){this.showFlashUI(B.feedData)}}else{var A=this.indexFeeds();if(A.length!==0){var C=A[0];this.THE_FEED_URL=C.url;if(this.checkForPluginAndLaunchIfPossible(C.url)){return }this.loadViaXHR(C.url)}}},isRunning:function(){return this.LITE_IS_RUNNING},hasClient:function(){return this.hasCooliris()},addCustomButton:function(C,B,A){this.CUSTOM_BUTTON={targetURL:C,labelText:B,iconImage:A}},setCallbacks:function(A){if(A.onNoPlugins){this.ON_NO_PLUGINS=A.onNoPlugins}if(A.onExit){this.ON_EXIT=A.onExit}},setLiteURLs:function(A){if(!this.LITE_URL){if(A.swf){this.LITE_URL=A.swf}else{if(A.lite){this.LITE_URL=A.lite+"PicLensLite.swf"}}}if(!this.BUTTON_URL){if(A.button){this.BUTTON_URL=A.button}else{if(A.lite){this.BUTTON_URL=A.lite+"NoFlash.jpg"}}}var B="";if(A.lbox){B=A.lbox}else{if(A.lite){B=A.lite+"../lytebox/"}}if(!this.LBOX_CSS_URL){if(A.lboxcss){this.LBOX_CSS_URL=A.lboxcss}else{if(B!=""){this.LBOX_CSS_URL=B+"lytebox.css"}}}if(!this.LBOX_JS_URL){if(A.lboxjs){this.LBOX_JS_URL=A.lboxjs}else{if(B!=""){this.LBOX_JS_URL=B+"lytebox.js"}}}},ARGS:{},DEBUG_NOCLIENT:false,DEBUG_NOFLASH:false,HPAD:60,VPAD:20,LITE_BG_DIV:null,LITE_FG_DIV:null,LITE_URL:null,BUTTON_URL:null,LBOX_CSS_URL:null,LBOX_JS_URL:null,LBOX_COUNT:0,SHOW_LBOX:false,OS_WIN:false,OS_MAC:false,BROWSER_FFX:false,BROWSER_SAF:false,BROWSER_IE:false,BROWSER_IE6:false,OLD_B_MARGIN:null,OLD_B_OVERFLOW:null,OLD_B_HEIGHT:null,OLD_H_OVERFLOW:null,OLD_H_HEIGHT:null,THE_FEED:"",THE_FEED_URL:"",LITE_IS_RUNNING:false,piclensIsRunning_:false,FLASH_ID_1:"pllflash1",FLASH_ID_2:"pllflash2",FLASH_VER:null,FLASH_URL:"http://www.adobe.com/go/getflashplayer",PL_URL:"http://download.piclens.com/partner/",PLC:null,LEARN_PL_URL:"http://affiliate.piclens.com/partner/",FONT:"font-family: Lucida Grande, Myriad Pro, Verdana, Helvetica, Arial, sans-serif;",KEY_HANDLERS:"",ON_NO_PLUGINS:null,ON_EXIT:null,AUTO_CLOSE_TIMER_ID:0,REMOVE_TIMER_ID:0,RESIZE_TIMER_IE6:null,RESIZE_HANDLER_EXISTS:false,CUSTOM_BUTTON:null,addKeyHandlers:function(){var A=this;if(typeof document.onkeydown!=="undefined"){this.KEY_HANDLERS=document.onkeydown}document.onkeydown=function(C){var B;if(typeof C==="undefined"||C===null){B=window.event.keyCode}else{B=C.which}var D=A.handleKeyPress(B);if(typeof C!="undefined"&&C!=null){C.returnValue=D}return D}},addMouseHandlers:function(){if(window.addEventListener){window.addEventListener("DOMMouseScroll",this.handleMouseWheel,false)}else{if(document.attachEvent){document.attachEvent("onmousewheel",this.handleMouseWheel)}}window.onmousewheel=document.onmousewheel=this.handleMouseWheel},appendElementsToDocument:function(){if(this.BROWSER_FFX&&this.OS_MAC){this.LITE_BG_DIV.style.display="none"}document.body.appendChild(this.LITE_BG_DIV);document.body.appendChild(this.LITE_FG_DIV)},autoResize:function(){if(!this.isRunning()){clearInterval(this.RESIZE_TIMER_IE6);return }var C=this.getPageSize();var B=this.LITE_BG_DIV;if(B){B.style.height=C.h+"px";B.style.width=C.w+"px"}if(this.LITE_FG_DIV){var A=this.LITE_FG_DIV.style;this.resizeToPaddedBox(A);this.resizeToFitPaddedBox(A,C);this.resizeFlashToFitPaddedBox()}},checkForPluginAndLaunchIfPossible:function(B,A){if(this.hasCooliris()){if(typeof (A)!="undefined"){this.PLC.launch(B,"uid",A)}else{this.PLC.launch(B,"","")}return true}return false},createBackgroundOverlay:function(){var D=document.createElement("div");this.LITE_BG_DIV=D;D.id="lite_bg_div";var E=D.style;E.position="fixed";E.width=E.height="100%";if(this.BROWSER_IE6){var A=document.body;var C=A.currentStyle;var H=document.documentElement;var G=H.currentStyle;this.OLD_B_MARGIN=C.margin;this.OLD_B_OVERFLOW=C.overflow;this.OLD_B_HEIGHT=C.height;this.OLD_H_OVERFLOW=G.overflow;this.OLD_H_HEIGHT=G.height;this.OLD_SCROLL_Y=H.scrollTop;A.style.margin="0";A.style.overflow="auto";A.style.height="100%";H.style.overflow="auto";H.style.height="100%";E.position="absolute";var F=this.getPageSize();E.height=F.h+"px";E.width=F.w+"px"}E.left=E.right=E.top=E.bottom="0";E.backgroundColor="#000";E.zIndex=1000;E.opacity="0.5";E.filter="alpha(opacity=50)";var B=this;D.onclick=function(){B.exitPicLensLite()}},createForegroundFlashComponent:function(){var B=document.createElement("div");this.LITE_FG_DIV=B;B.id="lite_fg_div";var A=B.style;A.backgroundColor="#000";A.position="fixed";A.border="2px solid #555";A.zIndex=1001;this.resizeToPaddedBox(A);if(this.BROWSER_IE6){A.position="absolute";this.resizeToFitPaddedBox(A)}},closeFlashUI:function(C){var B=document;B.onkeydown=this.KEY_HANDLERS;window.onmousewheel=B.onmousewheel="";if(window.removeEventListener){window.removeEventListener("DOMMouseScroll",this.handleMouseWheel,false)}if(B.detachEvent){B.detachEvent("onmousewheel",this.handleMouseWheel)}this.LITE_BG_DIV.style.display=this.LITE_FG_DIV.style.display="none";this.REMOVE_TIMER_ID=setTimeout(function(){PicLensLite.removeChildren()},150);if(this.BROWSER_IE6){var A=document.body;var D=document.documentElement;A.style.margin=this.OLD_B_MARGIN;A.style.overflow=this.OLD_B_OVERFLOW;A.style.height=this.OLD_B_HEIGHT;D.style.overflow=this.OLD_H_OVERFLOW;D.style.height=this.OLD_H_HEIGHT;window.scrollTo(0,this.OLD_SCROLL_Y)}if(this.ON_EXIT!==null){this.ON_EXIT(C)}this.setRunningFlag(false)},determineBrowserParams:function(){var B=BrowserDetect.OS;var A=BrowserDetect.browser;this.OS_MAC=(B=="Mac");this.OS_WIN=(B=="Windows");this.BROWSER_FFX=(A=="Firefox");this.BROWSER_SAF=(A=="Safari");this.BROWSER_IE=(A=="Explorer");this.BROWSER_IE6=(this.BROWSER_IE&&BrowserDetect.version=="6");this.FLASH_VER=swfobjlite.getFlashPlayerVersion()},exitPicLensLite:function(){var A=this.getFlash();if(A!==null&&A.fl_exitPicLensLite){A.fl_exitPicLensLite();this.AUTO_CLOSE_TIMER_ID=setTimeout(function(){if(PicLensLite.isRunning()){PicLensLite.closeFlashUI()}},500)}else{this.closeFlashUI()}},findScriptLocation:function(){var E=document.getElementsByTagName("script");for(var C=0;C!=E.length;++C){var A=E[C];var D=A.getAttribute("type");if(D=="text/javascript"){var F=A.getAttribute("src");if(F===null){continue}var B=F.indexOf("piclens.js");if(B!=-1){this.setLiteURLs({lite:F.substring(0,B)});return }else{B=F.indexOf("piclens_optimized.js");if(B!=-1){this.setLiteURLs({lite:F.substring(0,B)});return }}}}},getPageSize:function(){var J,F,G,C;var I=document;var E=I.body;var D;if(window.innerHeight&&window.scrollMaxY){J=I.scrollWidth;F=(this.isFrame?parent.innerHeight:self.innerHeight)+(this.isFrame?parent.scrollMaxY:self.scrollMaxY)}else{if(E.scrollHeight>E.offsetHeight){J=E.scrollWidth;F=E.scrollHeight}else{D=I.getElementsByTagName("html").item(0);J=D.offsetWidth;F=D.offsetHeight;J=(J<E.offsetWidth)?E.offsetWidth:J;F=(F<E.offsetHeight)?E.offsetHeight:F}}var A=I.documentElement;if(self.innerHeight){G=(this.isFrame)?parent.innerWidth:self.innerWidth;C=(this.isFrame)?parent.innerHeight:self.innerHeight}else{if(A&&A.clientHeight){G=A.clientWidth;C=A.clientHeight}else{if(E){D=I.getElementsByTagName("html").item(0);G=D.clientWidth;C=D.clientHeight;G=(G==0)?E.clientWidth:G;C=(C==0)?E.clientHeight:C}}}var B=(F<C)?C:F;var H=(J<G)?G:J;return{pw:H,ph:B,w:G,h:C}},getElementsFromXMLFeed:function(){var B;if(window.ActiveXObject){B=new ActiveXObject("Microsoft.XMLDOM");B.async=false;B.loadXML(PicLensLite.THE_FEED)}else{var C=new DOMParser();B=C.parseFromString(PicLensLite.THE_FEED,"text/xml")}var A=B.getElementsByTagName("*");return A},getBasicSlideShowHTML:function(){if(!this.LBOX_JS_URL||!this.LBOX_CSS_URL){return""}var D=document.getElementsByTagName("head").item(0);var A=document.createElement("script");A.src=this.LBOX_JS_URL;A.type="text/javascript";D.appendChild(A);var G=document.createElement("link");G.rel="stylesheet";G.href=this.LBOX_CSS_URL;G.type="text/css";G.media="screen";D.appendChild(G);var F=this.getElementsFromXMLFeed();var C;var H="";for(C=0;C<F.length;C++){if(F[C].nodeName=="media:content"){var B=F[C].getAttribute("url");if(B.indexOf(".flv")==-1){H+='<a id="lboxImage" href="'+B+'" rel="lytebox[lite]"></a> '}}}var E="<div id='lightbox_images' align='center' style='display: none; padding-top:10px; color:#FFFFFF; font-size:.8em; "+this.FONT+" color:#999999;'>";E+='( Alternatively, <a onclick="javascript:PicLensLite.invokeLytebox();return false;" href="#" style="color:#656588">click here for a basic slideshow</a>. )';E+=H;E+="</div><br/>";return E},generateAlternativeContent:function(){var J='<div id="altContent" style="text-align:center; margin: 0 0 0 0; padding: 0 0 0 0; background-color: #000; min-width:860px;">';J+='<div align="center" style="width: 100%; padding-top:60px; '+this.FONT+'">';var I=this.FLASH_VER;var G;if(I.major>0){G="update your Flash Player from version "+I.major+"."+I.minor+"."+I.release+" to version 9.0.28 or newer"}else{G="install the most recent Flash Player"}var D="";if(this.THE_FEED!==""){D=this.getBasicSlideShowHTML()}var A=this.PL_URL;var E=this.LEARN_PL_URL;var F=this.ARGS.pid;if(F){A+=F+"/";E+=F+"/"}else{var H="000000000001/";A+=H;E+=H}if(this.SHOW_LBOX){}else{var C="<span style='padding-left:25px; color:#C6C6C6; font-size:";J+="<div style='padding:10px;'>"+C+"1.5em; font-weight: bold; "+this.FONT+"'>You're clicks away from going full screen!</span><br/>"+C+".9em; padding-bottom: 15px; "+this.FONT+"'>You must get the <a href='"+A+"' style='color:#656588'>Cooliris</a> browser plugin, or "+G+".</span></div>";if(!this.BUTTON_URL){J+='<a href="'+A+'" style="color:#ACD">Get Cooliris Now!</a>'}else{var B='<area shape="rect" coords=';J+='<img src="'+this.BUTTON_URL+'" alt="" border="0" usemap="#Map"><map name="Map" id="Map">'+B+'"0,0,33,33" href="#" onclick="javascript:PicLensLite.closeFlashUI();" />'+B+'"35,35,325,325" href="'+A+'" />'+B+'"593,209,825,301" href="'+this.FLASH_URL+'" />'+B+'"327,148,448,178" href="'+E+'" /></map>'}}J+="</div>";J+=D;J+='<div align="center" style="color:#666666; font-size:11px; '+this.FONT+'">&copy; 2008 Cooliris, Inc. All trademarks are property of their respective holders.<br/><br/><br/></div>';J+="</div>";return J},generateFlashVars:function(){var C="";var B=this.ARGS;if(typeof B.guid!=="undefined"){C+="&startItemGUID="+B.guid}if(B.loadFeedInFlash){C+="&feedURL="+encodeURIComponent(this.THE_FEED_URL)}if(B.paused){C+="&paused="+B.paused}if(B.loop){C+="&loop="+B.loop}if(B.delay){C+="&delay="+B.delay}if(B.pid){C+="&pid="+B.pid}if(typeof B.maxScale!="undefined"){C+="&maxScale="+B.maxScale}if(typeof B.overlayToolbars!="undefined"){C+="&overlayToolbars="+B.overlayToolbars}var A=this.CUSTOM_BUTTON;if(A!=null){C+="&cButtonURL="+encodeURIComponent(A.targetURL);if(A.labelText!=null){C+="&cButtonLabel="+encodeURIComponent(A.labelText)}if(A.iconImage!=null){C+="&cButtonIcon="+encodeURIComponent(A.iconImage)}}C+="&swfURL="+encodeURIComponent(this.LITE_URL);C=C.substring(1);return C},getFlash:function(){if(this.BROWSER_SAF||this.BROWSER_IE){return document.getElementById(this.FLASH_ID_1)}else{return document.getElementById(this.FLASH_ID_2)}},getWindowSize:function(){var B=document.documentElement;var D=document.body;var A=0,C=0;if(typeof (window.innerWidth)=="number"){A=window.innerWidth;C=window.innerHeight}else{if(B&&(B.clientWidth||B.clientHeight)){A=B.clientWidth;C=B.clientHeight}else{if(D&&(D.clientWidth||D.clientHeight)){A=D.clientWidth;C=D.clientHeight}}}return{w:A,h:C}},handleKeyPress:function(A){if(!this.isRunning()){return true}var B=this.getFlash();if(B!=null&&B.fl_keyPressed){B.fl_keyPressed(A)}else{if(A==27){this.closeFlashUI();return false}}if(A==9||A==13){return false}return true},handleMouseWheel:function(A){var C=0;if(!A){A=window.event}if(A.wheelDelta){C=A.wheelDelta/120;if(window.opera){C=-C}}else{if(A.detail){var B=A.detail;if(Math.abs(B)<3){C=-B}else{C=-B/3}}}if(C){PicLensLite.sendMouseScrollToFlash(C)}if(A.preventDefault){A.preventDefault()}A.returnValue=false;return false},hasPicLensClient:function(){return this.hasCooliris()},hasCooliris:function(){if(this.DEBUG_NOCLIENT){return false}var E=false;if(this.PLC){E=true}else{if(window.piclens&&window.piclens.launch){this.PLC=window.piclens;E=true}else{var B=null;if(typeof PicLensContext!="undefined"){B=new PicLensContext()}else{try{B=new ActiveXObject("PicLens.Context")}catch(D){if(navigator.mimeTypes["application/x-cooliris"]){B=document.createElement("object");B.style.display="none";B.width=0;B.height=0;B.type="application/x-cooliris";document.documentElement.appendChild(B)}else{B=null}}}this.PLC=B;if(this.PLC){E=true}}}if(E){if(this.BROWSER_SAF){return true}var A;try{A=this.PLC.version}catch(D){return false}var C=A.split(".");if(C[0]>1){return true}else{if(C[0]==1){if(C[1]>6){return true}else{if(C[1]==6){if(C[2]>0){return true}else{if(C[2]==0){if(C[3]>=824){return true}}}}}}}return false}else{return false}},invokeLytebox:function(){this.SHOW_LBOX=true;myLytebox.start(document.getElementById("lboxImage"),false,false);this.closeFlashUI()},showLyteboxLink:function(){myLytebox.updateLyteboxItems();myLytebox.doAnimations=false;var A=document.getElementById("lightbox_images");if(A!=null){A.style.display="block";if(this.SHOW_LBOX&&this.getFlash()==null){this.invokeLytebox()}}},startLytebox:function(){if(typeof myLytebox!="undefined"){this.showLyteboxLink()}else{if(typeof initLytebox!="undefined"){initLytebox();this.showLyteboxLink()}else{if(this.LBOX_COUNT>=4){return }setTimeout(function(){PicLensLite.startLytebox()},150);this.LBOX_COUNT++}}},injectFlashPlayer:function(){var A=this.LITE_FG_DIV;var D;var F;D=F="100%";if(this.BROWSER_IE6){D=F="0"}var E=this.generateFlashVars();var B=this.generateAlternativeContent();if(this.meetsReqs()){var C="<param name=";A.innerHTML='<object id="'+this.FLASH_ID_1+'" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%">'+C+'"movie" value="'+this.LITE_URL+'" />'+C+'"quality" value="high"/> '+C+'"bgcolor" value="#000000"/> '+C+'"allowScriptAccess" value="always"/> '+C+'"FlashVars" value="'+E+'"/> '+C+'"allowFullScreen" value="true"/> '+C+'"wmode" value="window"/> '+C+'"scale" value="noscale"/> <object type="application/x-shockwave-flash" data="'+this.LITE_URL+'" width="'+D+'" height="'+F+'" quality="high" bgcolor="#000000" id="'+this.FLASH_ID_2+'" quality="high" FlashVars="'+E+'" allowFullScreen="true" scale="noscale" wmode="window" allowScriptAccess="always">'+B+"</object></object>"}else{if(this.ON_NO_PLUGINS){this.ON_NO_PLUGINS()}else{A.innerHTML=B;A.style.minWidth="860px";A.style.minHeight="550px"}}if(this.BROWSER_SAF){this.resizeUI()}},indexFeeds:function(){var E=document.getElementsByTagName("link");var A=[];for(var B=0;B!=E.length;++B){var D=E[B],C=D.getAttribute("type");if(C=="application/rss+xml"||C=="text/xml"){A.push({title:D.getAttribute("title"),url:D.getAttribute("href")})}}return A},loadViaXHR:function(B){var A=this;var D=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("MSXML2.XMLHTTP.3.0");try{D.open("GET",B,true);D.onreadystatechange=function(){if(D.readyState==4){if((D.status==200||D.status==0)){if(D.responseText){A.showFlashUI(D.responseText)}}else{if(console){console.log("PicLens Lite could not load the RSS Feed: "+B)}}}};D.send("")}catch(C){this.ARGS.loadFeedInFlash=true;this.showFlashUI("")}},meetsReqs:function(){if(this.DEBUG_NOFLASH){return false}var B=(this.FLASH_VER.major==0)&&this.BROWSER_IE;var A=swfobjlite.hasFlashPlayerVersion("9.0.28");return A||B},removeChildren:function(){this.REMOVE_TIMER_ID=0;if(this.LITE_BG_DIV!==null){document.body.removeChild(this.LITE_BG_DIV);this.LITE_BG_DIV=null}if(this.LITE_FG_DIV!==null){document.body.removeChild(this.LITE_FG_DIV);this.LITE_FG_DIV=null}},resizeFlashToFitPaddedBox:function(){var B=this.getFlash();if(B){var C=this.getPageSize();var A=C.w-this.HPAD*2;var D=C.h-this.VPAD*2;B.style.width=A;B.style.height=D;B.width=A;B.height=D}},resizeToFitPaddedBox:function(B,A){if(typeof A=="undefined"){A=this.getPageSize()}B.width=(A.w-this.HPAD*2)+"px";B.height=(A.h-this.VPAD*2)+"px"},resizeToPaddedBox:function(A){A.left=A.right=this.HPAD+"px";A.top=A.bottom=this.VPAD+"px"},resizeUI:function(){if(this.LITE_FG_DIV){var A=this.LITE_FG_DIV.style;this.resizeToPaddedBox(A);this.resizeToFitPaddedBox(A);this.resizeFlashToFitPaddedBox()}},setRunningFlag:function(A){this.LITE_IS_RUNNING=A;this.piclensIsRunning_=A},setResizeHandler:function(){if(!this.RESIZE_HANDLER_EXISTS&&this.BROWSER_SAF){var A=this;window.addEventListener("resize",function(){A.resizeUI()},false);this.RESIZE_HANDLER_EXISTS=true}},setResizeTimer:function(){if(this.BROWSER_IE6){this.RESIZE_TIMER_IE6=setInterval(function(){PicLensLite.autoResize()},1000)}},showFlashUI:function(A){this.THE_FEED=A;this.findScriptLocation();this.createBackgroundOverlay();this.createForegroundFlashComponent();if(this.BROWSER_IE){this.appendElementsToDocument()}this.injectFlashPlayer();if(!this.BROWSER_IE){this.appendElementsToDocument()}this.addKeyHandlers();this.addMouseHandlers();this.setRunningFlag(true);this.setResizeTimer();this.setResizeHandler();this.startLytebox()},sendMouseScrollToFlash:function(B){if(!this.isRunning()){return }var A=this.getFlash();if(A!=null&&A.fl_mouseMoved){A.fl_mouseMoved(B)}}};var swfobjlite=function(){var UNDEF="undefined",OBJECT="object",SHOCKWAVE_FLASH="Shockwave Flash",SHOCKWAVE_FLASH_AX="ShockwaveFlash.ShockwaveFlash",win=window,doc=document,nav=navigator;var ua=function(){var w3cdom=typeof doc.getElementById!=UNDEF&&typeof doc.getElementsByTagName!=UNDEF&&typeof doc.createElement!=UNDEF&&typeof doc.appendChild!=UNDEF&&typeof doc.replaceChild!=UNDEF&&typeof doc.removeChild!=UNDEF&&typeof doc.cloneNode!=UNDEF,playerVersion=[0,0,0],d=null;if(typeof nav.plugins!=UNDEF&&typeof nav.plugins[SHOCKWAVE_FLASH]==OBJECT){d=nav.plugins[SHOCKWAVE_FLASH].description;if(d){d=d.replace(/^.*\s+(\S+\s+\S+$)/,"$1");playerVersion[0]=parseInt(d.replace(/^(.*)\..*$/,"$1"),10);playerVersion[1]=parseInt(d.replace(/^.*\.(.*)\s.*$/,"$1"),10);playerVersion[2]=/r/.test(d)?parseInt(d.replace(/^.*r(.*)$/,"$1"),10):0}}else{if(typeof win.ActiveXObject!=UNDEF){var a=null,fp6Crash=false;try{a=new ActiveXObject(SHOCKWAVE_FLASH_AX+".7")}catch(e){try{a=new ActiveXObject(SHOCKWAVE_FLASH_AX+".6");playerVersion=[6,0,21];a.AllowScriptAccess="always"}catch(e){if(playerVersion[0]==6){fp6Crash=true}}if(!fp6Crash){try{a=new ActiveXObject(SHOCKWAVE_FLASH_AX)}catch(e){}}}if(!fp6Crash&&a){try{d=a.GetVariable("$version");if(d){d=d.split(" ")[1].split(",");playerVersion=[parseInt(d[0],10),parseInt(d[1],10),parseInt(d[2],10)]}}catch(e){}}}}var u=nav.userAgent.toLowerCase(),p=nav.platform.toLowerCase(),webkit=/webkit/.test(u)?parseFloat(u.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,ie=false,windows=p?/win/.test(p):/win/.test(u),mac=p?/mac/.test(p):/mac/.test(u);
/*@cc_on
			ie = true;
			@if (@_win32)
				windows = true;
			@elif (@_mac)
				mac = true;
			@end
		@*/
return{w3cdom:w3cdom,pv:playerVersion,webkit:webkit,ie:ie,win:windows,mac:mac}}();return{hasFlashPlayerVersion:function(rv){var pv=ua.pv,v=rv.split(".");v[0]=parseInt(v[0],10);v[1]=parseInt(v[1],10);v[2]=parseInt(v[2],10);return(pv[0]>v[0]||(pv[0]==v[0]&&pv[1]>v[1])||(pv[0]==v[0]&&pv[1]==v[1]&&pv[2]>=v[2]))?true:false},getFlashPlayerVersion:function(){return{major:ua.pv[0],minor:ua.pv[1],release:ua.pv[2]}}}}();var BrowserDetect={init:function(){this.browser=this.searchString(this.dataBrowser)||"Unknown Browser";this.version=this.searchVersion(navigator.userAgent)||this.searchVersion(navigator.appVersion)||"Unknown Version";this.OS=this.searchString(this.dataOS)||"Unknown OS"},searchString:function(D){for(var A=0;A<D.length;A++){var B=D[A].string;var C=D[A].prop;this.versionSearchString=D[A].versionSearch||D[A].identity;if(B){if(B.indexOf(D[A].subString)!=-1){return D[A].identity}}else{if(C){return D[A].identity}}}},searchVersion:function(B){var A=B.indexOf(this.versionSearchString);if(A==-1){return }return parseFloat(B.substring(A+this.versionSearchString.length+1))},dataBrowser:[{string:navigator.userAgent,subString:"OmniWeb",versionSearch:"OmniWeb/",identity:"OmniWeb"},{string:navigator.vendor,subString:"Apple",identity:"Safari"},{prop:window.opera,identity:"Opera"},{string:navigator.vendor,subString:"iCab",identity:"iCab"},{string:navigator.vendor,subString:"KDE",identity:"Konqueror"},{string:navigator.userAgent,subString:"Firefox",identity:"Firefox"},{string:navigator.vendor,subString:"Camino",identity:"Camino"},{string:navigator.userAgent,subString:"Netscape",identity:"Netscape"},{string:navigator.userAgent,subString:"MSIE",identity:"Explorer",versionSearch:"MSIE"},{string:navigator.userAgent,subString:"Gecko",identity:"Mozilla",versionSearch:"rv"},{string:navigator.userAgent,subString:"Mozilla",identity:"Netscape",versionSearch:"Mozilla"}],dataOS:[{string:navigator.platform,subString:"Win",identity:"Windows"},{string:navigator.platform,subString:"Mac",identity:"Mac"},{string:navigator.platform,subString:"Linux",identity:"Linux"}]};BrowserDetect.init();