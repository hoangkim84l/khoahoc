(function(){
	function slideshow(box,width,step,listNode){
	this.box = box;
	this.width = width;
	this.step = step;
	this.listNode = listNode;
	this.counter = 0;
	this.slider = function(){
		var _this = this;
		this.counter += this.step;
		if(this.counter <= this.width){
			if(this.box.scrollLeft < this.width*this.listNode.length/2){
				this.box.scrollLeft += this.step;
				setTimeout(function(){
					_this.slider();
				},15)
			}else{
				setTimeout(function(){
					_this.slider();
				},15)
				this.box.scrollLeft = 0;
				this.counter = 0;
			}
		}else{
			this.counter = 0;
			return;
		}
	}
	for(var i = 0; i<this.listNode.length;i++){
		var _this = this;
		addEvent(_this.listNode[i],'mouseover',function(){
			clearInterval(_this.start);
		});

		addEvent(_this.listNode[i],'mouseout',function(){
			_this.timer();
		})
	}

}

slideshow.prototype.timer = function(){
	var _this = this;
	this.start = setInterval(function(){_this.slider()},4000);
}

function $(id){
	return document.getElementById(id);	
}

function addEvent(elm, evType, fn, useCapture){
	if (elm.addEventListener){
		elm.addEventListener(evType, fn, useCapture);
		return true;
	} else if (elm.attachEvent) {
		var r = elm.attachEvent('on' + evType, fn);
		return r;
	} else {
		elm['on' + evType] = fn;
	}
}

function bannerShow(){
	var width;
	var slideBox = $('mainBanner_oneColumn');	
	var	bannerList = $('bannerList');
	if(!slideBox && !bannerList) return;
	var oinnerHtml = bannerList.innerHTML;
	bannerList.innerHTML += oinnerHtml;
	var lis = bannerList.getElementsByTagName('li');
	for(var i = 0; i<lis.length; i++){
		width = lis[i].offsetWidth;
		bannerList.style.width = width * lis.length + 'px';	
	}

	var obj = new slideshow(slideBox,width,10,lis);
	obj.timer();
}

addEvent(window,'load',theRotator);
})();




function theRotator() {
	
	$('ul#bannerList li').css({display: "none"});
    $('ul#bannerList li:first').css({display: "block"});
	$('#mainBanner_oneColumn').prepend('<div class="banner-pagination"></div>');	
	for(bi=0;bi<($('#bannerList li').length);bi++) {
		$('.banner-pagination').append('<a href="#">'+bi+'</a>');
		
	}
	$('.banner-pagination a:first-child').addClass('active-item');
	$('.banner-pagination a').click(function(e) {
		e.preventDefault();
		next=$('ul#bannerList li').eq($(this).index());
		rotate(next);
	});	

	//Call the rotate function ... set the interval in x seconds *1000
	setInterval('rotate()',10000);
	
}



function rotate(i) {	
    
    //get the first image
	var current = ($('ul#bannerList li.show')?  $('ul#bannerList li.show') : $('ul#bannerListl li:first'));
	


	

	
	//get next image, when it reaches the end,  it back to the first image
	if(i==undefined) {
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('ul#bannerList li:first') :current.next()) : $('ul#bannerList li:first'));	
	}
	else
	{
	next=i;
	$('.active-item').removeClass('active-item');
	$('.banner-pagination a').eq(i.index()).addClass('active-item');	
	}
    current.removeClass('show');
	
/*	$('.banner-pagination a').click(function(e) {
		e.preventDefault();
		next=$('ul#bannerList li').eq($(this).index());
		console.log('-> '+$(this).index());
		next.fadeIn("fast");
	    current.fadeOut("fast");
	});	*/


    next.css({backgroundColor: "black"}).addClass('show');
    //alert($('li.show').index());
	$('.active-item').removeClass('active-item');
	$('.banner-pagination a').eq($('li.show').index()).addClass('active-item');	
    
    next.fadeIn("fast");
    current.fadeOut("fast");

};