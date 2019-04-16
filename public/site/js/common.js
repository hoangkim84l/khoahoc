(function(){
	function $(id){
		return document.getElementById(id);	
	}

	/*function addEvent(elm, evType, fn, useCapture){
		if (elm.addEventListener){
			elm.addEventListener(evType, fn, useCapture);
			return true;
		} else if (elm.attachEvent) {
			var r = elm.attachEvent('on' + evType, fn);
			return r;
		} else {
			elm['on' + evType] = fn;
		}
	}*/
	function addEvent(elm, evType, fn, useCapture){
		if(!elm)return;
		if (typeof elm.addEventListener != 'undefined'){
			elm.addEventListener(evType, fn, useCapture);
			return true;
		} else if (typeof elm.attachEvent != 'undefined') {
			var r = elm.attachEvent('on' + evType, fn);
			return r;
		} else {
			elm['on' + evType] = fn;
		}
	} 
	function css(a,o,c1,c2){
		switch (a){
			case 'swap':
				o.className=!css('check',o,c1)?o.className.replace(c2,c1):o.className.replace(c1,c2);
			break;
			case 'add':
				if(!css('check',o,c1)){o.className+=o.className?' '+c1:c1;}
			break;
			case 'remove':
				var rep=o.className.match(' '+c1)?' '+c1:c1;
				o.className=o.className.replace(rep,'');
			break;
			case 'check':
				var found=false;
				var temparray=o.className.split(' ');
				for(var i=0;i<temparray.length;i++){
					if(temparray[i]==c1){found=true;}
				}
				return found;
			break;
		}
	}
	
	function getNext(elem){
		do{
			elem = elem.nextSibling;
		}while(elem && elem.nodeType != 1);
		return elem;
	}
	/*===changeLanguage===*/
	function changeLanguage(){
		var tempObj = $('languageBtn');
		var languageList = $('languageList');
		if(!tempObj || !languageList) return;
		//var olis = languageList.getElementsByTagName('li');
		//olis[olis.length-1].style.fontSize = '12px';
		//showLang(tempObj,languageList);
		//showLang(languageList,languageList);
		addEvent(tempObj,'mouseover',function(){
			languageList.style.display = 'block';	
			addEvent(languageList,'mouseover',function(){
				languageList.style.display = 'block';	
			  })
			  addEvent(languageList,'mouseout',function(){
					languageList.style.display = 'none';	
			  })							  
		})
		addEvent(tempObj,'mouseout',function(){
			languageList.style.display = 'none';								  
		})
	}
	//function showLang(temp,langList){
		//addEvent(temp,'mouseover',function(){
			//langList.style.display = 'block';								  
		//})
		//addEvent(temp,'mouseout',function(){
			//setTimeout(function(){langList.style.display = 'none';},1000);								  
		//})
	//}
	addEvent(window,'load',changeLanguage);
	
	/*===oneHeight===*/
	function oneHeight(){
		var sideLeft = $('sideLeft');
		var mainContent = $('mainContent');
		if(sideLeft && mainContent){
			if(navigator.userAgent.indexOf('MSIE 6.0') > 0){
				if(sideLeft.offsetHeight > mainContent.offsetHeight){
						mainContent.style.height = sideLeft.offsetHeight - 50 + 'px';
				}else{
					sideLeft.style.height = mainContent.offsetHeight - 20 + 'px';	
				}
			}else{
				if(sideLeft.offsetHeight > mainContent.offsetHeight){
						mainContent.style.minHeight = sideLeft.offsetHeight - 50 + 'px';
				}else{
					sideLeft.style.minHeight = mainContent.offsetHeight - 20 + 'px';	
				}
			}
		}
	}
	addEvent(window,'load',oneHeight);
	
	/*function sameHeight(){
		var height = [];
		for(var i = 0; i<arguments.length; i++){
			 var tempObj = document.getElementById(arguments[i])
				if(!tempObj) return;
				height.push(tempObj.offsetHeight);
		}
		var maxHeight = Math.max.apply(height,null);
		for(var i = 0; i<arguments.length; i++){
				var tempObj2 = document.getElementById(arguments[i])
				if(navigator.userAgent.indexOf('MSIE 6.0') > 0){
						tempObj2.style.height = maxHeight + 'px';
				}else{
						tempObj2.style.minHeight = maxHeight + 'px';
				}
		}
	}
	addEvent(window,'load',function(){
		sameHeight('prodList','sidebar');	
	})*/
	
	/*===showSubMenu===*/
	var inter = null;
	/*function showNextNode(node){
			var submenu = getNext(node);
			if(submenu){
				node.onmouseover = function(){
						submenu.style.visibility = 'visible';
				}
				submenu.onmouseover = function(){
					this.style.visibility = 'visible';
					if(this.parentNode){
						css('add',this.parentNode,'active')
					}
				}
				addEvent(submenu,'mouseover'function(){
					submenu.style.visibility = 'visible';
				})
				submenu.onmouseout = function(){
					this.style.visibility = 'hidden';
					if(this.parentNode){
						css('remove',this.parentNode,'active');
					}					
					if(navigator.userAgent.indexOf('MSIE 6.0') > 0){
						var _this = this;
						inter = setTimeout(function(){_this.style.visibility = 'hidden';},2000)
					}else{
						this.style.visibility = 'hidden';
					}										
					var _this = this;
					setTimeout(function(){_this.style.visibility = 'hidden';},1000)
				}
				node.onmouseout = function(){
						submenu.style.visibility = 'hidden';
				}
			}
	}*/

	
	function showSubMenu(){
		var allLi = $('navigation').getElementsByTagName('li');
		var nav = [];
		for(var i = 0; i<allLi.length; i++){
			if(allLi[i].parentNode.className == 'navigation'){
					nav.push(allLi[i]);
			}
		}
		if($('search')){
				nav[nav.length-1].appendChild($('search'));
		}
		for(var i = 0; i<nav.length;i++){
				//nav[i].setAttribute('id','subMenu' + (i+1));
				var a = nav[i].getElementsByTagName('a')[0]
				showNextNode(a);
		}
	}
	//addEvent(window,'load',showSubMenu);
	
	
	function appendSearch() {
		var allLi = $('navigation').getElementsByTagName('li');
		var nav = [];
		for(var i = 0; i<allLi.length; i++){
			if(allLi[i].parentNode.className == 'navigation'){
					nav.push(allLi[i]);
			}
		}
		if($('search')){
				nav[nav.length-1].appendChild($('search'));
		}
		/*for(var i = 0; i<nav.length;i++){
				//nav[i].setAttribute('id','subMenu' + (i+1));
				var a = nav[i].getElementsByTagName('a')[0]
				showNextNode(a);
		}*/
	}
	addEvent(window,'load',appendSearch);
	
	/*addEvent(window,'load',function(){
		addEvent(document.getElementsByTagName('body')[0],'click',function(e){
			var e = e || window.event;
			var target = e.target || e.srcElement;
			if(target != $('languageBtn')){
				$('languageList').style.display = 'none';
			}		
		})
	})*/
	
	/*function showSearchResult(elem){
		var resultBox = $('suggested-search');
		if(!resultBox) return;
		var resulList = resultBox.getElementsByTagName('ul')[0];
		if(resulList){
			addEvent(elem,'mouseover',function(){
					resulList.style.visibility = 'visible';		
			})
			addEvent(elem,'mouseout',function(){
					resulList.style.visibility = 'hidden';		
			})
		}
	}
	function showSearch(){
		var tempObj = $('common-search');
		showSearchResult(tempObj);
		var tempObj2 = $('subMenu7');
		showSearchResult(tempObj2);  	
	}
  addEvent(window,'load',showSearch);*/


  /*function setImgPos(img){
	for(var i = 0; i<img.length; i++){
		img[i].style.marginLeft = - (img[i].offsetWidth/2) + 'px';
	}
  }
  function imgInit(){
	var tempObj = $('mainCon_bottom');
	var imgs = [];
	if(tempObj){
		var dts = tempObj.getElementsByTagName('dt');
		if(dts.length > 0){
			for(var i = 0 ;i<dts.length; i++){
				imgs.push(dts[i].getElementsByTagName('img')[0]);
			}
		}
	}
	setImgPos(imgs);
  }
  addEvent(window,'load',imgInit);*/
	
  function setGoogleBtnValue(){
	if($('goog-wm-sb')){
		$('goog-wm-sb').setAttribute("value","");
	}
  }
  addEvent(window,'load',setGoogleBtnValue)
  
  
  /*function navFocus(){
	var oDiv = $('navigation').getElementsByTagName('div');
	var subNav = [];
	for(var i = 0, len = oDiv.length; i<len; i++){
		if(oDiv[i].className == "subNav"){
			subNav.push(oDiv[i]);
		}
	}
	for(var i = 0,len = subNav.length; i<len; i++){
		var oA = subNav[i].getElementsByTagName('a');
		for(var j = 0, n = oA.length; j<n; j++){
			(function(){
				var m = j;
				var _this = oA[m];
				addEvent(_this,'mouseover',function(){
					_this.parentNode.parentNode.parentNode.style.visibility = "visible";
				})
			})();
		}
	}
  }
  addEvent(window,'load',navFocus);*/
})();
