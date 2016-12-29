$(function(){
	$('#main p a').mouseover(function(){
		$(this).css('color','#111');
		$(this).animate({fontSize:'18px'},100)
	});
	$('#main p a').mouseout(function(){
		$(this).css('color','#000');
		$(this).animate({fontSize:'14px'},10)
	});
});
