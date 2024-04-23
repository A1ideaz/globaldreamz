$(function () { 
	// Stack initialize
	var openspeed = 300;
	var closespeed = 300;
	$('.stack>img').toggle(function(){
		var vertical = 0;
		var horizontal = 0;
		var $el=$(this);
		$el.next().children().each(function(){
			$(this).animate({top: '-' + vertical + 'px', left: horizontal + 'px'}, openspeed);
			vertical = vertical + 75;
			horizontal = horizontal+0;
		});
		$el.next().animate({top: '-50px', left: '10px'}, openspeed).addClass('openStack')
		   .find('li a>img').animate({width: '150px', marginLeft: '9px'}, openspeed);
		$el.animate({paddingTop: '0'});
	}, function(){
		//reverse above
		var $el=$(this);
		$el.next().removeClass('openStack').children('li').animate({top: '55px', left: '-10px'}, closespeed);
		$el.next().find('li a>img').animate({width: '79px', marginLeft: '0'}, closespeed);
		$el.animate({paddingTop: '35px'});
	});
	
	// Stacks additional animation
	$('.stack li a').hover(function(){
		$("img",this).animate({width: '156px'}, 100);
		$("span",this).animate({marginRight: '10px'});
	},function(){
		$("img",this).animate({width: '150px'}, 100);
		$("span",this).animate({marginRight: '0'});
	});
});

$(function () { 
	// Stack initialize
	var openspeed = 300;
	var closespeed = 300;
	$('.stack2>img').toggle(function(){
		var vertical = 0;
		var horizontal = 0;
		var $el=$(this);
		$el.next().children().each(function(){
			$(this).animate({top: '-' + vertical + 'px', left: horizontal + 'px'}, openspeed);
			vertical = vertical + 75;
			horizontal = horizontal+0;
		});
		$el.next().animate({top: '-50px', left: '10px'}, openspeed).addClass('openStack')
		   .find('li a>img').animate({width: '150px', marginLeft: '9px'}, openspeed);
		$el.animate({paddingTop: '0'});
	}, function(){
		//reverse above
		var $el=$(this);
		$el.next().removeClass('openStack').children('li').animate({top: '55px', left: '-10px'}, closespeed);
		$el.next().find('li a>img').animate({width: '79px', marginLeft: '0'}, closespeed);
		$el.animate({paddingTop: '35px'});
	});
	
	// Stacks additional animation
	$('.stack2 li a').hover(function(){
		$("img",this).animate({width: '156px'}, 100);
		$("span",this).animate({marginRight: '10px'});
	},function(){
		$("img",this).animate({width: '150px'}, 100);
		$("span",this).animate({marginRight: '0'});
	});
});