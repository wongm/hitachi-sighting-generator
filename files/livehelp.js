/* RP Live Help common js */

cscontrol= new Image;
popcontrol= new Image;
popcontrol2= new Image;
popcontrol3= new Image;

   keyhundreds= new Image;
   keytens= new Image;
   keyones= new Image;

   keyhundreds_value= 0;
   keytens_value= 0;
   keyones_value= 0;
place =1;
var csloaded = false;
var csTimeout = 30;
var csID = null;
var openLiveHelpalready = false;
var openDHTMLalready = false;
var openDHTMLlayer = false;

var ismac = navigator.platform.indexOf('Mac');
function aDynLayer(id,nestref,frame) {
	//bc:maybe? if (!is.ns5 && !aDynLayer.set && !frame) aDynLayerInit()
	if (!aDynLayer.set && !frame) aDynLayerInit()
	this.frame = frame || self
	//bc:if (is.ns) {
	if (is.ns4) {
		if (is.ns4) {
			if (!frame) {
				if (!nestref) var nestref = aDynLayer.nestRefArray[id]
				if (!aDynLayerTest(id,nestref)) return
				this.css = (nestref)? eval("document."+nestref+".document."+id) : document.layers[id]
			}
			else this.css = (nestref)? eval("frame.document."+nestref+".document."+id) : frame.document.layers[id]
			this.elm = this.event = this.css
			this.doc = this.css.document
		}
		//bc:else if (is.ns5) {
		//bc:	this.elm = document.getElementById(id)
		//bc:	this.css = this.elm.style
		//bc:	this.doc = document
		//bc: }
		this.x = this.css.left
		this.y = this.css.top
		this.w = this.css.clip.width
		this.h = this.css.clip.height
	}
	//bc:else if (is.ie) {
	else if (is.ie || is.ns5) {
    //bc:
    if (is.ie)
		this.elm = this.event = this.frame.document.all[id]
    //bc:
    else 
		this.elm = this.event = this.frame.document.getElementById(id)

		//bc:this.css = this.frame.document.all[id].style
		this.css = this.elm.style
		this.doc = document
		this.x = this.elm.offsetLeft
		this.y = this.elm.offsetTop
		this.w = (is.ie4)? this.css.pixelWidth : this.elm.offsetWidth
		this.h = (is.ie4)? this.css.pixelHeight : this.elm.offsetHeight
	}
	this.id = id
	this.nestref = nestref
	this.obj = id + "aDynLayer"
	eval(this.obj + "=this")
}
function aDynLayerMoveTo(x,y) {
	if (x!=null) {
		this.x = x
		//bc:if (is.ns) this.css.left = this.x
		if (is.ns4) this.css.left = this.x
		//bc:else this.css.pixelLeft = this.x
		else if (is.ie) this.css.pixelLeft = this.x
		else if (is.ns5) this.css.left = Math.floor(this.x) + 'px'
	}
	if (y!=null) {
		this.y = y
		//bc:if (is.ns) this.css.top = this.y
		if (is.ns4) this.css.top = this.y
		//bc:else this.css.pixelTop = this.y
		else if (is.ie) this.css.pixelTop = this.y
		else if (is.ns5) this.css.top = Math.floor(this.y) + 'px'
	}
}
function aDynLayerMoveBy(x,y) {
	this.moveTo(this.x+x,this.y+y)
}
function aDynLayerShow() {
	this.css.visibility = (is.ns4)? "show" : "visible"
}
function aDynLayerHide() {
	this.css.visibility = (is.ns4)? "hide" : "hidden"
}
aDynLayer.prototype.moveTo = aDynLayerMoveTo
aDynLayer.prototype.moveBy = aDynLayerMoveBy
aDynLayer.prototype.show = aDynLayerShow
aDynLayer.prototype.hide = aDynLayerHide
aDynLayerTest = new Function('return true')

function aDynLayerInit(nestref) {
	if (!aDynLayer.set) aDynLayer.set = true
	//bc:if (is.ns) {
	if (is.ns4) {
		if (nestref) ref = eval('document.'+nestref+'.document')
		else {nestref = ''; ref = document;}
		for (var i=0; i<ref.layers.length; i++) {
			var divname = ref.layers[i].name
			aDynLayer.nestRefArray[divname] = nestref
			var index = divname.indexOf("Div")
			if (index > 0) {
				eval(divname.substr(0,index)+' = new aDynLayer("'+divname+'","'+nestref+'")')
			}
			if (ref.layers[i].document.layers.length > 0) {
				aDynLayer.refArray[aDynLayer.refArray.length] = (nestref=='')? ref.layers[i].name : nestref+'.document.'+ref.layers[i].name
			}
		}
		if (aDynLayer.refArray.i < aDynLayer.refArray.length) {
			aDynLayerInit(aDynLayer.refArray[aDynLayer.refArray.i++])
		}
	}
	else if (is.ie) {
		for (var i=0; i<document.all.tags("DIV").length; i++) {
			var divname = document.all.tags("DIV")[i].id
			var index = divname.indexOf("Div")
			if (index > 0) {
				eval(divname.substr(0,index)+' = new aDynLayer("'+divname+'")')
			}
		}
	}
  //bc:
	else if (is.ns5) {
    var nodeList = document.getElementsByTagName('div');
		for (var i=0; i<nodeList.length; i++) {
			var divname = nodeList[i].id
			var index = divname.indexOf("Div")
			if (index > 0) {
				eval(divname.substr(0,index)+' = new aDynLayer("'+divname+'")')
			}
		}
	}
	return true
}
aDynLayer.nestRefArray = new Array()
aDynLayer.refArray = new Array()
aDynLayer.refArray.i = 0
aDynLayer.set = false

function aDynLayerSlideTo(endx,endy,inc,speed,fn) {
	if (endx==null) endx = this.x
	if (endy==null) endy = this.y
	var distx = endx-this.x
	var disty = endy-this.y
	this.slideStart(endx,endy,distx,disty,inc,speed,fn)
}
function aDynLayerSlideBy(distx,disty,inc,speed,fn) {
	var endx = this.x + distx
	var endy = this.y + disty
	this.slideStart(endx,endy,distx,disty,inc,speed,fn)
}
function aDynLayerSlideStart(endx,endy,distx,disty,inc,speed,fn) {
	if (this.slideActive) return
	if (!inc) inc = 10
	if (!speed) speed = 20
	var num = Math.sqrt(Math.pow(distx,2) + Math.pow(disty,2))/inc
	if (num==0) return
	var dx = distx/num
	var dy = disty/num
	if (!fn) fn = null
	this.slideActive = true
	this.slide(dx,dy,endx,endy,num,1,speed,fn)
}
function aDynLayerSlide(dx,dy,endx,endy,num,i,speed,fn) {
	if (!this.slideActive) return
	if (i++ < num) {
		this.moveBy(dx,dy)
		this.onSlide()
		if (this.slideActive) setTimeout(this.obj+".slide("+dx+","+dy+","+endx+","+endy+","+num+","+i+","+speed+",\""+fn+"\")",speed)
		else this.onSlideEnd()
	}
	else {
		this.slideActive = false
		this.moveTo(endx,endy)
		this.onSlide()
		this.onSlideEnd()
		eval(fn)
	}
}
function aDynLayerSlideInit() {}
aDynLayer.prototype.slideInit = aDynLayerSlideInit
aDynLayer.prototype.slideTo = aDynLayerSlideTo
aDynLayer.prototype.slideBy = aDynLayerSlideBy
aDynLayer.prototype.slideStart = aDynLayerSlideStart
aDynLayer.prototype.slide = aDynLayerSlide
aDynLayer.prototype.onSlide = new Function()
aDynLayer.prototype.onSlideEnd = new Function()

function aDynLayerClipInit(clipTop,clipRight,clipBottom,clipLeft) {
	//bc:if (is.ie) {
	if (is.ie||is.ns5) {
		if (arguments.length==4) this.clipTo(clipTop,clipRight,clipBottom,clipLeft)
		else if (is.ie4) this.clipTo(0,this.css.pixelWidth,this.css.pixelHeight,0)
    //bc:
		else if (is.ns5) this.clipTo(0,this.elm.offsetWidth,this.elm.offsetHeight,0)
	}
}
function aDynLayerClipTo(t,r,b,l) {
	if (t==null) t = this.clipValues('t')
	if (r==null) r = this.clipValues('r')
	if (b==null) b = this.clipValues('b')
	if (l==null) l = this.clipValues('l')
	//bc:if (is.ns) {
	if (is.ns4) {
		this.css.clip.top = t
		this.css.clip.right = r
		this.css.clip.bottom = b
		this.css.clip.left = l
	}
	//bc:else if (is.ie) this.css.clip = "rect("+t+"px "+r+"px "+b+"px "+l+"px)"
	else if (is.ie||is.ns5) this.css.clip = "rect("+t+"px "+r+"px "+b+"px "+l+"px)"
}
function aDynLayerClipBy(t,r,b,l) {
	this.clipTo(this.clipValues('t')+t,this.clipValues('r')+r,this.clipValues('b')+b,this.clipValues('l')+l)
}
function aDynLayerClipValues(which) {
	//bc:if (is.ie) var clipv = this.css.clip.split("rect(")[1].split(")")[0].split("px")
	if (is.ie||is.ns5) var clipv = this.css.clip.split("rect(")[1].split(")")[0].split("px")
	//bc:if (which=="t") return (is.ns)? this.css.clip.top : Number(clipv[0])
	if (which=="t") return (is.ns4)? this.css.clip.top : Number(clipv[0])
	//bc:if (which=="r") return (is.ns)? this.css.clip.right : Number(clipv[1])
	if (which=="r") return (is.ns4)? this.css.clip.right : Number(clipv[1])
	//bc:if (which=="b") return (is.ns)? this.css.clip.bottom : Number(clipv[2])
	if (which=="b") return (is.ns4)? this.css.clip.bottom : Number(clipv[2])
	//bc:if (which=="l") return (is.ns)? this.css.clip.left : Number(clipv[3])
	if (which=="l") return (is.ns4)? this.css.clip.left : Number(clipv[3])
}
aDynLayer.prototype.clipInit = aDynLayerClipInit
aDynLayer.prototype.clipTo = aDynLayerClipTo
aDynLayer.prototype.clipBy = aDynLayerClipBy
aDynLayer.prototype.clipValues = aDynLayerClipValues

function aDynLayerWrite(html) {
	//bc:if (is.ns) {
	if (is.ns4) {
		this.doc.open()
		this.doc.write(html)
		this.doc.close()
	}
	//bc:else if (is.ie) {
	else if (is.ie||is.ns5) {
		this.event.innerHTML = html
	}
}
aDynLayer.prototype.write = aDynLayerWrite

function BrowserCheck() {
	var b = navigator.appName
	if (b=="Netscape") this.b = "ns"
	else if (b=="Microsoft Internet Explorer") this.b = "ie"
	else this.b = b
	this.version = navigator.appVersion
	this.v = parseInt(this.version)
	this.ns = (this.b=="ns" && this.v>=4)
	this.ns4 = (this.b=="ns" && this.v==4)
	this.ns5 = (this.b=="ns" && this.v==5)
	this.ie = (this.b=="ie" && this.v>=4)
	this.ie4 = (this.version.indexOf('MSIE 4')>0)
	this.ie5 = (this.version.indexOf('MSIE 5')>0)
	this.min = (this.ns||this.ie)
}
is = new BrowserCheck()

function css(id,left,top,width,height,color,vis,z,other) {
	if (id=="START") return '<STYLE TYPE="text/css">\n'
	else if (id=="END") return '</STYLE>'
	var str = (left!=null && top!=null)? '#'+id+' {position:absolute; left:'+left+'px; top:'+top+'px;' : '#'+id+' {position:relative;'
	if (arguments.length>=4 && width!=null) str += ' width:'+width+'px;'
	if (arguments.length>=5 && height!=null) {
		str += ' height:'+height+'px;'
		if (arguments.length<9 || other.indexOf('clip')==-1) str += ' clip:rect(0px '+width+'px '+height+'px 0px);'
	}
	//bc:if (arguments.length>=6 && color!=null) str += (is.ns)? ' layer-background-color:'+color+';' : ' background-color:'+color+';'
	if (arguments.length>=6 && color!=null) str += (is.ns4)? ' layer-background-color:'+color+';' : ' background-color:'+color+';'
	if (arguments.length>=7 && vis!=null) str += ' visibility:'+vis+';'
	if (arguments.length>=8 && z!=null) str += ' z-index:'+z+';'
	if (arguments.length==9 && other!=null) str += ' '+other
	str += '}\n'
	return str
}
function writeCSS(str,showAlert) {
	str = css('START')+str+css('END')
	document.write(str)
	if (showAlert) alert(str)
}

function createLayer(id,nestref,left,top,width,height,content,bgColor,visibility,zIndex) {
	//bc:if (is.ns) {
	if (is.ns4) {
		if (nestref) {
			var lyr = eval("document."+nestref+".document."+id+" = new Layer(width, document."+nestref+")")
		}
		else {
			var lyr = document.layers[id] = new Layer(width)
			eval("document."+id+" = lyr")
		}
		lyr.name = id
		lyr.left = left
		lyr.top = top
		if (height!=null) lyr.clip.height = height
		if (bgColor!=null) lyr.bgColor = bgColor
		lyr.visibility = (visibility=='hidden')? 'hide' : 'show'
		if (zIndex!=null) lyr.zIndex = zIndex
		if (content) {
			lyr.document.open()
			lyr.document.write(content)
			lyr.document.close()
		}
	}
	//bc:else if (is.ie) {
	else if (is.ie || is.ns5) {
		var str = '\n<DIV id='+id+' style="position:absolute; left:'+left+'; top:'+top+'; width:'+width
		if (height!=null) {
			str += '; height:'+height
			str += '; clip:rect(0,'+width+','+height+',0)'
		}
		if (bgColor!=null) str += '; background-color:'+bgColor		
		if (zIndex!=null) str += '; z-index:'+zIndex
		if (visibility) str += '; visibility:'+visibility
		str += ';">'+((content)?content:'')+'</DIV>'
    //bc:
    var elmref;
		if (nestref) {
			index = nestref.lastIndexOf(".")
			var nestlyr = (index != -1)? nestref.substr(index+1) : nestref
      //bc:
      if (is.ie)
			document.all[nestlyr].insertAdjacentHTML("BeforeEnd",str);
      else
      {
      elmref = document.getElementById(nestlyr);
      elmref.innerHTML += str;
      }
		}
		else {
      //bc:
      if (is.ie)
			document.body.insertAdjacentHTML("BeforeEnd",str)
      else
      {
      elmref = document.body;
      elmref.innerHTML += str;
      }
		}
	}
}
function destroyLayer(id,nestref) {
	//bc:if (is.ns) {
	if (is.ns4) {
		if (nestref) eval("document."+nestref+".document."+id+".visibility = 'hide'")
		else document.layers[id].visibility = "hide"
	}
	else if (is.ie) {
		document.all[id].innerHTML = ""
		document.all[id].outerHTML = ""
	}
  //bc:
  else if (is.ns5) {
    var elmref = document.getElementById(id);
    if (elmref)
      elmref.parentNode.removeChild(elmref);
  }
}

function csrepeat()
{
     if (csTimeout < 1)
       	return;

     csTimeout--;
     csgetimage();     
     setTimeout('csrepeat()', 7000);
}