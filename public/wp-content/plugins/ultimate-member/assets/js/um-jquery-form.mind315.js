!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):e("undefined"!=typeof jQuery?jQuery:window.Zepto)}(function(L){"use strict";var h={},t=(h.fileapi=void 0!==L("<input type='file'/>").get(0).files,h.formdata=void 0!==window.FormData,!!L.fn.prop);function r(e){var t=e.data;e.isDefaultPrevented()||(e.preventDefault(),L(e.target).ajaxSubmit(t))}function a(e){var t=e.target,r=L(t);if(!r.is("[type=submit],[type=image]")){var a=r.closest("[type=submit]");if(0===a.length)return;t=a[0]}var n=this;"image"==(n.clk=t).type&&(void 0!==e.offsetX?(n.clk_x=e.offsetX,n.clk_y=e.offsetY):"function"==typeof L.fn.offset?(a=r.offset(),n.clk_x=e.pageX-a.left,n.clk_y=e.pageY-a.top):(n.clk_x=e.pageX-t.offsetLeft,n.clk_y=e.pageY-t.offsetTop)),setTimeout(function(){n.clk=n.clk_x=n.clk_y=null},100)}function M(){var e;L.fn.ajaxSubmit.debug&&(e="[jquery.form] "+Array.prototype.join.call(arguments,""),window.console&&window.console.log?window.console.log(e):window.opera&&window.opera.postError&&window.opera.postError(e))}L.fn.attr2=function(){if(!t)return this.attr.apply(this,arguments);var e=this.prop.apply(this,arguments);return e&&e.jquery||"string"==typeof e?e:this.attr.apply(this,arguments)},L.fn.ajaxSubmit=function(u){if(!this.length)return M("ajaxSubmit: skipping submit process - no element selected"),this;var A,E=this,e=("function"==typeof u?u={success:u}:void 0===u&&(u={}),A=u.type||this.attr2("method"),e=(e=(e="string"==typeof(e=u.url||this.attr2("action"))?L.trim(e):"")||window.location.href||"")&&(e.match(/^([^#]+)/)||[])[1],u=L.extend(!0,{url:e,success:L.ajaxSettings.success,type:A||L.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},u),{});if(this.trigger("form-pre-serialize",[this,u,e]),e.veto)return M("ajaxSubmit: submit vetoed via form-pre-serialize trigger"),this;if(u.beforeSerialize&&!1===u.beforeSerialize(this,u))return M("ajaxSubmit: submit aborted via beforeSerialize callback"),this;var t=u.traditional,n=(void 0===t&&(t=L.ajaxSettings.traditional),[]),r=this.formToArray(u.semantic,n);if(u.data&&(u.extraData=u.data,l=L.param(u.data,t)),u.beforeSubmit&&!1===u.beforeSubmit(r,this,u))return M("ajaxSubmit: submit aborted via beforeSubmit callback"),this;if(this.trigger("form-submit-validate",[r,this,u,e]),e.veto)return M("ajaxSubmit: submit vetoed via form-submit-validate trigger"),this;var a,o,i,e=L.param(r,t),s=(l&&(e=e?e+"&"+l:l),"GET"==u.type.toUpperCase()?(u.url+=(0<=u.url.indexOf("?")?"&":"?")+e,u.data=null):u.data=e,[]);u.resetForm&&s.push(function(){E.resetForm()}),u.clearForm&&s.push(function(){E.clearForm(u.includeHidden)}),!u.dataType&&u.target?(a=u.success||function(){},s.push(function(e){var t=u.replaceTarget?"replaceWith":"html";L(u.target)[t](e).each(a,arguments)})):u.success&&s.push(u.success),u.success=function(e,t,r){for(var a=u.context||this,n=0,o=s.length;n<o;n++)s[n].apply(a,[e,t,r||E,E])},u.error&&(o=u.error,u.error=function(e,t,r){var a=u.context||this;o.apply(a,[e,t,r,E])}),u.complete&&(i=u.complete,u.complete=function(e,t){var r=u.context||this;i.apply(r,[e,t,E])});var c,t=0<L("input[type=file]:enabled",this).filter(function(){return""!==L(this).val()}).length,l="multipart/form-data",e=E.attr("enctype")==l||E.attr("encoding")==l,l=h.fileapi&&h.formdata;M("fileAPI :"+l),!1!==u.iframe&&(u.iframe||(t||e)&&!l)?u.closeKeepAlive?L.get(u.closeKeepAlive,function(){c=m(r)}):c=m(r):c=(t||e)&&l?function(e){for(var r=new FormData,t=0;t<e.length;t++)r.append(e[t].name,e[t].value);if(u.extraData){var a=function(e){var t,r,a=L.param(e,u.traditional).split("&"),n=a.length,o=[];for(t=0;t<n;t++)a[t]=a[t].replace(/\+/g," "),r=a[t].split("="),o.push([decodeURIComponent(r[0]),decodeURIComponent(r[1])]);return o}(u.extraData);for(t=0;t<a.length;t++)a[t]&&r.append(a[t][0],a[t][1])}u.data=null;var n=L.extend(!0,{},L.ajaxSettings,u,{contentType:!1,processData:!1,cache:!1,type:A||"POST"});u.uploadProgress&&(n.xhr=function(){var e=L.ajaxSettings.xhr();return e.upload&&e.upload.addEventListener("progress",function(e){var t=0,r=e.loaded||e.position,a=e.total;e.lengthComputable&&(t=Math.ceil(r/a*100)),u.uploadProgress(e,r,a,t)},!1),e});n.data=null;var o=n.beforeSend;return n.beforeSend=function(e,t){u.formData?t.data=u.formData:t.data=r,o&&o.call(this,e,t)},L.ajax(n)}(r):L.ajax(u),E.removeData("jqxhr").data("jqxhr",c);for(var f=0;f<n.length;f++)n[f]=null;return this.trigger("form-submit-notify",[this,u]),this;function m(e){var t,c,l,o,f,m,p,d,h,i=E[0],v=L.Deferred();if(v.abort=function(e){p.abort(e)},e)for(t=0;t<n.length;t++)L(n[t]).prop("disabled",!1);if((c=L.extend(!0,{},L.ajaxSettings,u)).context=c.context||c,o="jqFormIO"+(new Date).getTime(),c.iframeTarget?(r=(f=L(c.iframeTarget)).attr2("name"))?o=r:f.attr2("name",o):(f=L('<iframe name="'+o+'" src="'+c.iframeSrc+'" />')).css({position:"absolute",top:"-1000px",left:"-1000px"}),m=f[0],p={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(e){var t="timeout"===e?"timeout":"aborted";M("aborting upload... "+t),this.aborted=1;try{m.contentWindow.document.execCommand&&m.contentWindow.document.execCommand("Stop")}catch(e){}f.attr("src",c.iframeSrc),p.error=t,c.error&&c.error.call(c.context,p,t,e),l&&L.event.trigger("ajaxError",[p,c,t]),c.complete&&c.complete.call(c.context,p,t)}},(l=c.global)&&0==L.active++&&L.event.trigger("ajaxStart"),l&&L.event.trigger("ajaxSend",[p,c]),c.beforeSend&&!1===c.beforeSend.call(c.context,p,c))return c.global&&L.active--,v.reject(),v;if(p.aborted)return v.reject(),v;(e=i.clk)&&(r=e.name)&&!e.disabled&&(c.extraData=c.extraData||{},c.extraData[r]=e.value,"image"==e.type&&(c.extraData[r+".x"]=i.clk_x,c.extraData[r+".y"]=i.clk_y));var g=1,x=2;function b(t){var r=null;try{t.contentWindow&&(r=t.contentWindow.document)}catch(e){M("cannot get iframe.contentWindow document: "+e)}if(r)return r;try{r=t.contentDocument||t.document}catch(e){M("cannot get iframe.contentDocument: "+e),r=t.document}return r}var e=L("meta[name=csrf-token]").attr("content"),r=L("meta[name=csrf-param]").attr("content");function a(){var e=E.attr2("target"),t=E.attr2("action"),r=E.attr("enctype")||E.attr("encoding")||"multipart/form-data";i.setAttribute("target",o),A&&!/post/i.test(A)||i.setAttribute("method","POST"),t!=c.url&&i.setAttribute("action",c.url),c.skipEncodingOverride||A&&!/post/i.test(A)||E.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"}),c.timeout&&(h=setTimeout(function(){d=!0,S(g)},c.timeout));var a=[];try{if(c.extraData)for(var n in c.extraData)c.extraData.hasOwnProperty(n)&&(L.isPlainObject(c.extraData[n])&&c.extraData[n].hasOwnProperty("name")&&c.extraData[n].hasOwnProperty("value")?a.push(L('<input type="hidden" name="'+c.extraData[n].name+'">').val(c.extraData[n].value).appendTo(i)[0]):a.push(L('<input type="hidden" name="'+n+'">').val(c.extraData[n]).appendTo(i)[0]));c.iframeTarget||f.appendTo("body"),m.attachEvent?m.attachEvent("onload",S):m.addEventListener("load",S,!1),setTimeout(function e(){try{var t=b(m).readyState;M("state = "+t),t&&"uninitialized"==t.toLowerCase()&&setTimeout(e,50)}catch(e){M("Server abort: ",e," (",e.name,")"),S(x),h&&clearTimeout(h),h=void 0}},15);try{i.submit()}catch(e){document.createElement("form").submit.apply(i)}}finally{i.setAttribute("action",t),i.setAttribute("enctype",r),e?i.setAttribute("target",e):E.removeAttr("target"),L(a).remove()}}r&&e&&(c.extraData=c.extraData||{},c.extraData[r]=e),c.forceSync?a():setTimeout(a,10);var y,T,j,w=50;function S(t){if(!p.aborted&&!j){if((T=b(m))||(M("cannot access response document"),t=x),t===g&&p)return p.abort("timeout"),void v.reject(p,"timeout");if(t==x&&p)return p.abort("server abort"),void v.reject(p,"error","server abort");if(T&&T.location.href!=c.iframeSrc||d){m.detachEvent?m.detachEvent("onload",S):m.removeEventListener("load",S,!1);var r,t="success";try{if(d)throw"timeout";var e="xml"==c.dataType||T.XMLDocument||L.isXMLDoc(T);if(M("isXml="+e),!e&&window.opera&&(null===T.body||!T.body.innerHTML)&&--w)return M("requeing onLoad callback, DOM not available"),void setTimeout(S,250);var a,n,o,i=T.body||T.documentElement,s=(p.responseText=i?i.innerHTML:null,p.responseXML=T.XMLDocument||T,e&&(c.dataType="xml"),p.getResponseHeader=function(e){return{"content-type":c.dataType}[e.toLowerCase()]},i&&(p.status=Number(i.getAttribute("status"))||p.status,p.statusText=i.getAttribute("statusText")||p.statusText),(c.dataType||"").toLowerCase()),u=/(json|script|text)/.test(s);u||c.textarea?(a=T.getElementsByTagName("textarea")[0])?(p.responseText=a.value,p.status=Number(a.getAttribute("status"))||p.status,p.statusText=a.getAttribute("statusText")||p.statusText):u&&(n=T.getElementsByTagName("pre")[0],o=T.getElementsByTagName("body")[0],n?p.responseText=n.textContent||n.innerText:o&&(p.responseText=o.textContent||o.innerText)):"xml"==s&&!p.responseXML&&p.responseText&&(p.responseXML=k(p.responseText));try{y=D(p,s,c)}catch(e){t="parsererror",p.error=r=e||t}}catch(e){M("error caught: ",e),t="error",p.error=r=e||t}p.aborted&&(M("upload aborted"),t=null),"success"===(t=p.status?200<=p.status&&p.status<300||304===p.status?"success":"error":t)?(c.success&&c.success.call(c.context,y,"success",p),v.resolve(p.responseText,"success",p),l&&L.event.trigger("ajaxSuccess",[p,c])):t&&(void 0===r&&(r=p.statusText),c.error&&c.error.call(c.context,p,t,r),v.reject(p,"error",r),l&&L.event.trigger("ajaxError",[p,c,r])),l&&L.event.trigger("ajaxComplete",[p,c]),l&&!--L.active&&L.event.trigger("ajaxStop"),c.complete&&c.complete.call(c.context,p,t),j=!0,c.timeout&&clearTimeout(h),setTimeout(function(){c.iframeTarget?f.attr("src",c.iframeSrc):f.remove(),p.responseXML=null},100)}}}var k=L.parseXML||function(e,t){return window.ActiveXObject?((t=new ActiveXObject("Microsoft.XMLDOM")).async="false",t.loadXML(e)):t=(new DOMParser).parseFromString(e,"text/xml"),t&&t.documentElement&&"parsererror"!=t.documentElement.nodeName?t:null},s=L.parseJSON||function(e){return window.eval("("+e+")")},D=function(e,t,r){var a=e.getResponseHeader("content-type")||"",n="xml"===t||!t&&0<=a.indexOf("xml"),e=n?e.responseXML:e.responseText;return n&&"parsererror"===e.documentElement.nodeName&&L.error&&L.error("parsererror"),"string"==typeof(e=r&&r.dataFilter?r.dataFilter(e,t):e)&&("json"===t||!t&&0<=a.indexOf("json")?e=s(e):("script"===t||!t&&0<=a.indexOf("javascript"))&&L.globalEval(e)),e};return v}},L.fn.ajaxForm=function(e){var t;return(e=e||{}).delegation=e.delegation&&L.isFunction(L.fn.on),e.delegation||0!==this.length?e.delegation?(L(document).off("submit.form-plugin",this.selector,r).off("click.form-plugin",this.selector,a).on("submit.form-plugin",this.selector,e,r).on("click.form-plugin",this.selector,e,a),this):this.ajaxFormUnbind().bind("submit.form-plugin",e,r).bind("click.form-plugin",e,a):(t={s:this.selector,c:this.context},!L.isReady&&t.s?(M("DOM not ready, queuing ajaxForm"),L(function(){L(t.s,t.c).ajaxForm(e)})):M("terminating; zero elements found by selector"+(L.isReady?"":" (DOM not ready)")),this)},L.fn.ajaxFormUnbind=function(){return this.unbind("submit.form-plugin click.form-plugin")},L.fn.formToArray=function(e,t){var r=[];if(0===this.length)return r;var a,n,o,i,s,u,c,l,f=this[0],m=this.attr("id"),p=e?f.getElementsByTagName("*"):f.elements;if(p&&!/MSIE [678]/.test(navigator.userAgent)&&(p=L(p).get()),!(p=m&&(m=L(':input[form="'+m+'"]').get()).length?(p||[]).concat(m):p)||!p.length)return r;for(a=0,s=p.length;a<s;a++)if((l=(i=p[a]).name)&&!i.disabled)if(e&&f.clk&&"image"==i.type)f.clk==i&&(r.push({name:l,value:L(i).val(),type:i.type}),r.push({name:l+".x",value:f.clk_x},{name:l+".y",value:f.clk_y}));else if((o=L.fieldValue(i,!0))&&o.constructor==Array)for(t&&t.push(i),n=0,u=o.length;n<u;n++)r.push({name:l,value:o[n]});else if(h.fileapi&&"file"==i.type){t&&t.push(i);var d=i.files;if(d.length)for(n=0;n<d.length;n++)r.push({name:l,value:d[n],type:i.type});else r.push({name:l,value:"",type:i.type})}else null!=o&&(t&&t.push(i),r.push({name:l,value:o,type:i.type,required:i.required}));return!e&&f.clk&&(l=(c=(m=L(f.clk))[0]).name)&&!c.disabled&&"image"==c.type&&(r.push({name:l,value:m.val()}),r.push({name:l+".x",value:f.clk_x},{name:l+".y",value:f.clk_y})),r},L.fn.formSerialize=function(e){return L.param(this.formToArray(e))},L.fn.fieldSerialize=function(n){var o=[];return this.each(function(){var e=this.name;if(e){var t=L.fieldValue(this,n);if(t&&t.constructor==Array)for(var r=0,a=t.length;r<a;r++)o.push({name:e,value:t[r]});else null!=t&&o.push({name:this.name,value:t})}}),L.param(o)},L.fn.fieldValue=function(e){for(var t=[],r=0,a=this.length;r<a;r++){var n=this[r],n=L.fieldValue(n,e);null==n||n.constructor==Array&&!n.length||(n.constructor==Array?L.merge(t,n):t.push(n))}return t},L.fieldValue=function(e,t){var r=e.name,a=e.type,n=e.tagName.toLowerCase();if((t=void 0===t?!0:t)&&(!r||e.disabled||"reset"==a||"button"==a||("checkbox"==a||"radio"==a)&&!e.checked||("submit"==a||"image"==a)&&e.form&&e.form.clk!=e||"select"==n&&-1==e.selectedIndex))return null;if("select"!=n)return L(e).val();t=e.selectedIndex;if(t<0)return null;for(var o=[],i=e.options,s="select-one"==a,u=s?t+1:i.length,c=s?t:0;c<u;c++){var l=i[c];if(l.selected){var f=(f=l.value)||(l.attributes&&l.attributes.value&&!l.attributes.value.specified?l.text:l.value);if(s)return f;o.push(f)}}return o},L.fn.clearForm=function(e){return this.each(function(){L("input,select,textarea",this).clearFields(e)})},L.fn.clearFields=L.fn.clearInputs=function(r){var a=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var e=this.type,t=this.tagName.toLowerCase();a.test(e)||"textarea"==t?this.value="":"checkbox"==e||"radio"==e?this.checked=!1:"select"==t?this.selectedIndex=-1:"file"==e?/MSIE/.test(navigator.userAgent)?L(this).replaceWith(L(this).clone(!0)):L(this).val(""):r&&(!0===r&&/hidden/.test(e)||"string"==typeof r&&L(this).is(r))&&(this.value="")})},L.fn.resetForm=function(){return this.each(function(){"function"!=typeof this.reset&&("object"!=typeof this.reset||this.reset.nodeType)||this.reset()})},L.fn.enable=function(e){return void 0===e&&(e=!0),this.each(function(){this.disabled=!e})},L.fn.selected=function(t){return void 0===t&&(t=!0),this.each(function(){var e=this.type;"checkbox"==e||"radio"==e?this.checked=t:"option"==this.tagName.toLowerCase()&&(e=L(this).parent("select"),t&&e[0]&&"select-one"==e[0].type&&e.find("option").selected(!1),this.selected=t)})},L.fn.ajaxSubmit.debug=!1});