
var memberHeight = $('.member').eq(0).height();
var memberWidth = $('.member').eq(0).width();
var marginLeft = $('.member').eq(0).offset().left;
var currentRow = 9999;

$.fn.wrapEvery = function(cLen, wrapperEl){while (this.length ){$( this.splice(0, cLen) ).wrapAll( wrapperEl );}};	
			
$('.memberColumn').wrapEvery(3, '<div class="memberRow">');

$.each($('.memberRow'), function(index){$(this).find('.member').attr('data-row', index);});

$.each($('.memberColumn'), function(index){
	
	$(this).attr('data-column', index % 3);
	$(this).find('.member').attr('data-column', index % 3);
	
});

$('.member').hover(
	function()
	{
		$(this).find('.overlay').css('height',memberHeight).css('width',memberWidth);
		$(this).find('.overlay').css('top',$(this).position().top).css('left',$(this).position().left + marginLeft);
	},
	function()
	{
		$(this).find('.overlay').css('height',0).css('width',0);
	}
);

$('.member').click(function(){
	
	var member = $(this);	
		
	$(this).find('.overlay').animate({top:$(this).position().top + (memberHeight / 2), left:$(this).offset().left + (memberWidth / 2), height:0, width:0},250,function(){ showDescription(member);});
	
});	

function showDescription(member)
{
	var memberColumn = $(member).attr('data-column');
	
	if ($('#tempdiv').size() > 0)
	{
		$('footer').css('top', $('footer').offset().top - $('#tempdiv').height());
		$('#tempdiv').remove();
	}
	
	var html = $(member).find('.memberdetails').html();
	
	$(member).parent().parent().after('<div id="tempdiv" class="tempdiv' + memberColumn + '"></div>');
	
	$('#tempdiv').css('width',$(window).width() - (marginLeft * 2));
	$('#tempdiv').css('margin-left',marginLeft);
	$('#tempdiv').html(html);
	
	$('footer').css('top', $('footer').offset().top + $('#tempdiv').height());

	if ($(member).attr('data-row') != currentRow){$('html, body').animate({scrollTop: $(member).offset().top}, 250);}
	
	currentRow = $(member).attr('data-row');
}
