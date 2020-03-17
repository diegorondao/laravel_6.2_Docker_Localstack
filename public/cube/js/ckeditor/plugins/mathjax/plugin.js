﻿/*
 Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
(function(){CKEDITOR.plugins.add("mathjax",{lang:"en",requires:"widget,dialog",icons:"mathjax",hidpi:!0,init:function(a){var c=a.config.mathJaxClass||"math-tex";a.widgets.add("mathjax",{inline:!0,dialog:"mathjax",button:a.lang.mathjax.button,mask:!0,allowedContent:"span(!"+c+")",template:'<span class="'+c+'" style="display:inline-block"><iframe style="border:0;width:0;height:0" scrolling="no" frameborder="0" allowTransparency="true"></iframe></span>',parts:{iframe:"iframe"},defaults:{math:"\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)"},
init:function(){this.once("ready",function(){this.frameWrapper=new CKEDITOR.plugins.mathjax.frameWrapper(this.parts.iframe,a);this.frameWrapper.setValue(this.data.math)})},data:function(){this.frameWrapper&&this.frameWrapper.setValue(this.data.math)},upcast:function(b,a){if("span"==b.name&&b.hasClass(c)&&!(1<b.children.length||b.children[0].type!=CKEDITOR.NODE_TEXT)){a.math=b.children[0].value;var d=b.attributes;d.style=d.style?d.style+";display:inline-block":"display:inline-block";b.children[0].replaceWith(new CKEDITOR.htmlParser.element("iframe",
{style:"border:0;width:0;height:0",scrolling:"no",frameborder:0,allowTransparency:!0}));return b}},downcast:function(b){b.children[0].replaceWith(new CKEDITOR.htmlParser.text(this.data.math));var a=b.attributes;a.style=a.style.replace(/display:\s?inline-block;?\s?/,"");""===a.style&&delete a.style;return b}});CKEDITOR.dialog.add("mathjax",this.path+"dialogs/mathjax.js");a.on("contentPreview",function(b){b.data.dataValue=b.data.dataValue.replace(/<\/head>/,'<script src="'+(a.config.mathJaxLib?CKEDITOR.getUrl(a.config.mathJaxLib):
"http://cdn.mathjax.org/mathjax/2.2-latest/MathJax.js?config=TeX-AMS_HTML")+'"><\/script></head>')})}});CKEDITOR.plugins.mathjax={};CKEDITOR.plugins.mathjax.frameWrapper=function(a,c){function b(){k=!0;h=i;j.setHtml(h);c.fire("lockSnapshot");a.setStyles({height:0,width:0,"vertical-align":"middle"});c.fire("unlockSnapshot");e.getWindow().$.update(h)}for(var j,d,h,i,e=a.getFrameDocument(),l=!1,k=!1,p=CKEDITOR.tools.addFunction(function(){d=e.getById("preview");j=e.getById("buffer");l=!0;i&&b();a.fire("mathJaxLoaded")}),
q=CKEDITOR.tools.addFunction(function(){d.setHtml(j.getHtml());var f=Math.max(e.$.body.offsetHeight,e.$.documentElement.offsetHeight),g=Math.max(d.$.offsetWidth,e.$.body.scrollWidth);c.fire("lockSnapshot");a.setStyles({height:f+"px",width:g+"px",display:"inline"});c.fire("unlockSnapshot");a.fire("mathJaxUpdateDone");h!=i?b():k=!1}),m="color font-family font-style font-weight font-variant font-size".split(" "),f="",g=0;g<m.length;g++){var n=m[g],o=a.getComputedStyle(n);o&&(f+=n+": "+o+";")}e.write('<!DOCTYPE html><html><head><meta charset="utf-8"><style type="text/css">span#preview {'+
f+"}</style><script type=\"text/x-mathjax-config\">MathJax.Hub.Config( {showMathMenu: false,messageStyle: \"none\"} );function getCKE() {if ( typeof window.parent.CKEDITOR == 'object' ) {return window.parent.CKEDITOR;} else {return window.parent.parent.CKEDITOR;}}function update() {MathJax.Hub.Queue(['Typeset',MathJax.Hub,this.buffer],function() {getCKE().tools.callFunction( "+q+" );});}MathJax.Hub.Queue( function() {getCKE().tools.callFunction("+p+');} );<\/script><script src="'+(c.config.mathJaxLib||
"http://cdn.mathjax.org/mathjax/2.2-latest/MathJax.js?config=TeX-AMS_HTML")+'"><\/script></head><body style="padding:0;margin:0;background:transparent;overflow:hidden"><span id="preview"></span><span id="buffer" style="display:none"></span></body></html>');return{setValue:function(a){i=a;l&&!k&&b()}}}})();