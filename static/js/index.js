$(function(){
	$('#main p a').mouseover(function(){
		$(this).css('color','#2292DD');
		$(this).animate({fontSize:'22px'},100)
	});
	$('#main p a').mouseout(function(){
		$(this).css('color','#000');
		$(this).animate({fontSize:'16px'},10)
	});
});
