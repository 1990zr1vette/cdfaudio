
var sliderHeight = $(window).height() - $('header').height() - 150;
var sliderWidth = $(window).width();
$('.banner_overlay').css('height',sliderHeight);
$('#slider').css('height',sliderHeight).css('width',sliderWidth);
$('#slider').find('img').css('height',sliderHeight).css('width',sliderWidth);
$('#messages').css('top',($('#slider').position().top + $('#slider').height() - $('#messages').height()) + 'px');

$.each($('#messages .message'),function(index){$(this).attr('data-left',$(this).position().left);});
var messageHeight = $('#messages .message').eq(0).height();
var messageLeft = $('#messages .message').eq(0).position().left;

$.each($('#messages .message'),function(index){
	
	if (index != 0)
	{
		if (index % 3 == 0)
			$(this).attr('data-position','onbottom').css('top',$(this).height());
		else if (index % 3 == 1)
			$(this).attr('data-position','ontop').css('top','-' + $(this).height() + 'px');
		else if (index % 3 == 2)
			$(this).attr('data-position','right').css('left',$(window).width() + 'px');
	}
	
});
	
var slideNo = 0;
var noOfSlides = $('#slider').find('img').size();
var interval = setInterval(function(){nextSlide();}, 5000);
var animationSpeed = 2000;
function nextSlide()
{
	var oldSlideNo = slideNo;
	if (slideNo < (noOfSlides - 1)){slideNo++;}else{slideNo = 0;}
	$('#slider').find('img').eq(oldSlideNo).animate({opacity:0},animationSpeed);	
	$('#slider').find('img').eq(slideNo).animate({opacity:1}, animationSpeed);
	var message = $('#messages').find('.message').eq(slideNo);
	var dataPosition = $(message).attr('data-position');
	if (dataPosition == 'ontop')
	{
		$('#messages').find('.message').eq(oldSlideNo).attr('data-position','ontop').animate({top:'-' + messageHeight + 'px'},animationSpeed / 2);
		$(message).animate({top:0},animationSpeed / 2);
	}
	else if (dataPosition == 'onbottom')
	{
		$('#messages').find('.message').eq(oldSlideNo).attr('data-position','onbottom').animate({top:messageHeight + 'px'},animationSpeed / 2);
		$(message).animate({top:0},animationSpeed / 2); 
	}
	else if (dataPosition == 'right')
	{
		var leftPos = parseInt($(message).attr('data-left'));
		$('#messages').find('.message').eq(oldSlideNo).attr('data-position','right').animate({left:$(window).width()},animationSpeed / 2);
		$(message).animate({left:leftPos},animationSpeed / 2); 
	}
}
