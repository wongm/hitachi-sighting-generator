function SXBB_IsIEMac() {
var ua = String(navigator.userAgent).toLowerCase();
if( document.all && ua.indexOf("mac") >= 0 )
	return true;
return false;
}
function SXBB_IsOverflowAble() {
if( document.getElementById && document.childNodes && !SXBB_IsIEMac() )
	return true;
return false;
}
function _SXBB(id) { this.id=id;this.size=this.min=65;this.extra=5;this.margin=20;this.T=[]; }
_SXBB.prototype.genCmd = function(cmd, txt) { return '&nbsp;‹&nbsp;<a class="genmed" style="text-decoration:none;" href="javascript:void(0)" onclick="SXBB[\''+this.id+'\'].'+cmd+'(\''+txt+'\');" onfocus="this.blur();"><b>'+txt+'</b></a>&nbsp;›'; }
_SXBB.prototype.writeCmd = function() { var s='';
if( SXBB_IsOverflowAble() ) s += '<span id="'+this.id+'x"></span>';
document.write(s); }
_SXBB.prototype.writeDiv = function() { var s = ( SXBB_IsOverflowAble() ? 'style="overflow:visible"' : '' );
document.write('<div id="'+this.id+'" '+s+'>'); }
_SXBB.prototype.getObj = function(id) {	return ( document.getElementById ? document.getElementById(id) : null ); }
_SXBB.prototype.resize = function(cmd)
{
var o=this.getObj(this.id);if(!o) return;
var x=this.getObj(this.id+'x');if(!x) return;
if(cmd=='onload'||cmd=='onresize') { if( o.scrollHeight <= this.min ) { x.innerHTML = ''; return; }
if(x.innerHTML!='') return;
if(cmd=='onload') { x.innerHTML=this.genCmd('resize', this.T['contract']);
this.size=o.scrollHeight+this.extra;o.style.height='auto';o.style.overflow='visible';return; }
cmd=this.T['expand'];	}
if(cmd==this.T['expand']) { this.size=o.scrollHeight+this.extra;
o.style.height='auto';o.style.overflow='visible';x.innerHTML=((o.scrollHeight-this.margin) > this.min ? this.genCmd('resize', this.T['contract']) : ''); } else {
this.size=this.min;o.style.height=this.size+'px';o.style.overflow='auto';x.innerHTML=this.genCmd('resize', this.T['expand']); }
if(cmd!='onresize') { if(o.parentNode) for(o=o.parentNode;o.parentNode;o=o.parentNode) {
if(o.tagName&&o.tagName=='DIV'&&o.id&&o.id.indexOf('SXBB')==0) {
if(!document.all) SXBB[o.id].resize(this.T['contract']);SXBB[o.id].resize(this.T['expand']); }
}
}
return false;
}
if(typeof(SXBB)=='undefined') { var SXBB = [];
if(SXBB_IsOverflowAble()) {var SXBB_oldOnLoad=null;var SXBB_oldOnResize=null;
function SXBB_onLoad() {
if(SXBB_oldOnLoad) { SXBB_oldOnLoad();SXBB_oldOnLoad=null; }
SXBB_evalSize('onload'); }
function SXBB_onResize() {
if(SXBB_oldOnResize) { SXBB_oldOnResize();SXBB_oldOnResize=null; }
SXBB_evalSize('onresize'); }
function SXBB_evalSize(cmd) {
for(var id in SXBB) SXBB[id].resize(cmd); }

if(window.addEventListener) { window.addEventListener('load',SXBB_onLoad,false);window.addEventListener('resize',SXBB_onResize,false); } else if( window.attachEvent ) {
window.attachEvent('onload',SXBB_onLoad);window.attachEvent('onresize',SXBB_onResize); } else {
SXBB_oldOnLoad=window.onload;SXBB_oldOnResize=window.onresize;window.onload=SXBB_onLoad;window.onresize=SXBB_onResize; }
}
}