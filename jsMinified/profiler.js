function __Profiler(){this.totalTime=0;this.barHeight=18;this.timeLabelWidth=50;this.nameLabelWidth=160;this.textSpace=this.timeLabelWidth+this.nameLabelWidth;this.spacing=1.2;this.unit=1;this.fontStyle="11.5px Arial";this.containerPadding=20;this.container=null;this.customElement=false;this.timingData=[];this.sections=[]}__Profiler.prototype.eventsOrder=["navigationStart","redirectStart","redirectStart","redirectEnd","fetchStart","domainLookupStart","domainLookupEnd","connectStart","secureConnectionStart","connectEnd","requestStart","responseStart","responseEnd","unloadEventStart","unloadEventEnd","domLoading","domInteractive","msFirstPaint","domContentLoadedEventStart","domContentLoadedEventEnd","domContentLoaded","domComplete","loadEventStart","loadEventEnd"];__Profiler.prototype.cssReset="font-size:12px;line-height:1em;z-index:99999;text-align:left;font-family:Calibri,'Lucida Grande',Arial,sans-serif;text-shadow:none;box-shadow:none;display:inline-block;color:#444;font-weight:normal;border:none;margin:0;padding:0;background:none;";__Profiler.prototype.elementCss="position:fixed;margin:0 auto;top:0;left:0;right:0;border-bottom:solid 1px #EFCEA1;box-shadow:0 2px 5px rgba(0,0,0,.1);";__Profiler.prototype.containerCss="background:#FFFDF2;background:rgba(255,253,242,.99);padding:20px;display:block;";__Profiler.prototype.headerCss="font-size:16px;font-weight:normal;margin:0 0 1em 0;width:auto";__Profiler.prototype.buttonCss="float:right;background:none;border-radius:5px;padding:3px 10px;font-size:12px;line-height:130%;width:auto;margin:-7px -10px 0 0;cursor:pointer";__Profiler.prototype.infoLinkCss="color:#1D85B8;margin:1em 0 0 0;";__Profiler.prototype._getPerfObjKeys=function(b){var a=Object.keys(b);return a.length?a:Object.keys(Object.getPrototypeOf(b))};__Profiler.prototype._setUnit=function(a){this.unit=(a.width-this.textSpace)/this.totalTime};__Profiler.prototype._getSections=function(){return Array.prototype.indexOf?[{name:"network",color:[224,84,63],firstEventIndex:this.eventsOrder.indexOf("navigationStart"),lastEventIndex:this.eventsOrder.indexOf("connectEnd"),startTime:0,endTime:0},{name:"server",color:[255,188,0],firstEventIndex:this.eventsOrder.indexOf("requestStart"),lastEventIndex:this.eventsOrder.indexOf("responseEnd"),startTime:0,endTime:0},{name:"browser",color:[16,173,171],firstEventIndex:this.eventsOrder.indexOf("unloadEventStart"),lastEventIndex:this.eventsOrder.indexOf("loadEventEnd"),startTime:0,endTime:0}]:[]};__Profiler.prototype._createContainer=function(){var a=document.createElement("div");var b=this._createHeader();a.style.cssText=this.cssReset+this.containerCss;if(!this.customElement){a.style.cssText+=this.elementCss}a.appendChild(b);return a};__Profiler.prototype._createHeader=function(){var f=document.createElement("div");var e=document.createElement("h1");var d="/ ";for(var b=0,a=this.sections.length;b<a;b++){d+='<span style="color:rgb('+this.sections[b].color.join(",")+')">'+this.sections[b].name+"</span> / "}e.innerHTML="Page Load Time Breakdown "+d;e.style.cssText=this.cssReset+this.headerCss;f.appendChild(e);return f};__Profiler.prototype._createInfoLink=function(){var b=document.createElement("a");b.href="http://kaaes.github.com/timing/info.html";b.target="_blank";b.innerHTML="What does that mean?";b.style.cssText=this.cssReset+this.infoLinkCss;return b};__Profiler.prototype._createNotSupportedInfo=function(){var a=document.createElement("p");a.innerHTML="Navigation Timing API is not supported by your browser";return a};__Profiler.prototype._createChart=function(){var a=document.createElement("div");var b=document.createElement("canvas");b.width=this.container.clientWidth-this.containerPadding*2;var c=this._createInfoLink();this._drawChart(b);a.appendChild(b);a.appendChild(c);return a};__Profiler.prototype._prepareDraw=function(a,e,c){var d=this.sections[c.sectionIndex];var b={color:d.color,sectionTimeBounds:[d.startTime,d.endTime],eventTimeBounds:[c.time,c.timeEnd],label:c.label};return this._drawBar(e,a,a.width,b)};__Profiler.prototype._drawBar=function(h,e,m,n){var b;var j;var c;var d;var i;var g=n.color;var f=n.sectionTimeBounds[0];var l=n.sectionTimeBounds[1];var k=n.label;var a=e.getContext("2d");if(h==="block"){b=n.eventTimeBounds[0];j=n.eventTimeBounds[1];d=b+"-"+j}else{b=n.eventTimeBounds[0];d=b}d+="ms";i=a.measureText(d);if(i.width>this.timeLabelWidth){this.timeLabelWidth=i.width+10;this.textSpace=this.timeLabelWidth+this.nameLabelWidth;this._setUnit(e)}return function(o){if(h==="block"){c=Math.round((j-b)*this.unit);c=c===0?1:c}else{c=1}o.strokeStyle="rgba("+g[0]+","+g[1]+","+g[2]+",.3)";o.lineWidth=1;o.fillStyle="rgba(255,255,255,0)";o.fillRect(0,0,m-this.textSpace,this.barHeight);o.fillStyle="rgba("+g[0]+","+g[1]+","+g[2]+",.05)";o.fillRect(0,0,m-this.textSpace,this.barHeight);o.shadowColor="white";o.fillStyle="rgba("+g[0]+","+g[1]+","+g[2]+",.2)";o.fillRect(Math.round(this.unit*f),2,Math.round(this.unit*(l-f)),this.barHeight-4);o.fillStyle="rgb("+g[0]+","+g[1]+","+g[2]+")";o.fillRect(Math.round(this.unit*b),2,c,this.barHeight-4);o.fillText(d,m-this.textSpace+10,2*this.barHeight/3);o.fillText(k,m-this.textSpace+this.timeLabelWidth+15,2*this.barHeight/3)}};__Profiler.prototype._drawChart=function(d){var f;var k;var q;var j=[];var m=[];var a=d.getContext("2d");a.font=this.fontStyle;this._setUnit(d);for(var h=0,g=this.eventsOrder.length;h<g;h++){var o=this.eventsOrder[h];if(!this.timingData.hasOwnProperty(o)){continue}var p=this.timingData[o];var n=o.indexOf("Start");var c=n>-1;var b=false;if(c){k=o.substr(0,n);b=this.eventsOrder.indexOf(k+"End")>-1}if(c&&b){p.label=k;p.timeEnd=this.timingData[k+"End"].time;m.push(this._prepareDraw(d,"block",p));j.push(k+"End")}else{if(j.indexOf(o)<0){p.label=o;m.push(this._prepareDraw(d,"point",p))}}}d.height=this.spacing*this.barHeight*m.length;a.font=this.fontStyle;var e=Math.round(this.barHeight*this.spacing);m.forEach(function(i){i.call(this,a);a.translate(0,e)},this)};__Profiler.prototype._matchEventsWithSections=function(){var d=this.timingData;var h=this.sections;for(var f=0,g=h.length;f<g;f++){var k=h[f].firstEventIndex;var a=h[f].lastEventIndex;var e=this.eventsOrder.slice(k,a+1);var c=e.filter(function(i){return d.hasOwnProperty(i)});c.sort(function(j,i){return d[j].time-d[i].time});k=c[0];a=c[c.length-1];h[f].startTime=d[k].time;h[f].endTime=d[a].time;for(var b=0,m=c.length;b<m;b++){var l=c[b];if(d[l]){d[l].sectionIndex=f}}}};__Profiler.prototype._getData=function(){if(!window.performance){return}var f=window.performance;var b=f.timing;var c=this._getPerfObjKeys(b);var k={};var d=b.navigationStart||0;var h=0;var a=0;for(var g=0,e=c.length;g<e;g++){var j=b[c[g]];if(j&&j>0){h=j-d;k[c[g]]={time:h};if(h>a){a=h}}}this.totalTime=a;return k};__Profiler.prototype._init=function(){this.timingData=this._getData();this.sections=this._getSections();this.container=this._createContainer();if(this.customElement){this.customElement.innerHTML='<h3 style="margin-top: 0;">Current page load timing results:</h3>';this.customElement.appendChild(this.container)}else{document.body.appendChild(this.container)}var a;if(this.timingData&&this.sections.length){this._matchEventsWithSections();a=this._createChart()}else{a=this._createNotSupportedInfo()}this.container.appendChild(a)};__Profiler.prototype.init=function(b,c){if(b instanceof HTMLElement){this.customElement=b}if(c&&parseInt(c,10)>0){var a=this;setTimeout(function(){a._init()},c)}else{this._init()}};