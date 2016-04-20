
var slideNo = 0;
var interval = setInterval(function(){nextSlide();}, 5000);
function nextSlide()
{
	$('#brandslider').find('img').eq(slideNo).animate({opacity:0},2000);	
	if (slideNo < ($('#brandslider').find('img').size() - 1)){slideNo++;}else{slideNo = 0;}
	$('#brandslider').find('img').eq(slideNo).animate({opacity:1}, 2000);
}