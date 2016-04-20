
$.fn.wrapEvery = function(cLen, wrapperEl){while (this.length ){$( this.splice(0, cLen) ).wrapAll( wrapperEl );}};	

$('.testimonial-column').wrapEvery(2, '<div class="testimonials">');
//$('.testimonials').after('<div class="spacer20"></div><hr><div class="spacer20"></div>');

$.each($('.experience'),function(){
	var height = 0;	
	$.each($(this).find('.experiencecolumn'),function(index){
		if ($(this).height() > height)
		{
			height = $(this).height();
		}
	});
	$(this).css('height', height);
});
$.each($('.testimonials'),function(){
	$(this).attr('data-expanded', '0');
	$(this).attr('data-expanded-height', '0');
	$.each($(this).find('.testimonial-column'),function(index){
		var height = $(this).find('.testimonial-span').height();
		var difference = height - 100;
		$(this).attr('data-expand-height', difference);
		$(this).find('.testimonial-span').attr('data-expand-height', difference);
		$(this).find('.testimonial-span').css('height', '100px');
		if (height > 100)
		{
			$(this).append('<span for="' + index + '" data-expand-height="' + difference + '" data="0" class="moretag">[+] MORE</span>');
		}
		if (index == 0)
		{
			$(this).addClass('leftcolumn');
		}
		else
		{
			$(this).addClass('rightcolumn');
		}
	});
});

$('.moretag').click(function(){
	if ($(this).attr('data') == '0')
	{
		$(this).attr('data', '1');
		var html = $(this).html().replace('+','-').replace('MORE','LESS');
		$(this).html(html);
		var testimonials = $(this).parent().parent();
		$(testimonials).attr('data-expanded', parseInt($(testimonials).attr('data-expanded')) + 1);
		var testimonialsHeight = $(testimonials).height();
		var expandedHeight = parseInt($(testimonials).attr('data-expanded-height'));
		var span = $(this).parent().find('.testimonial-span');
		var footerTop = $('footer').offset().top;
		var expandHeight = 0;
		var expandHeight2 = 0;
		if (expandedHeight == 0)
		{
			expandHeight = parseInt($(this).attr('data-expand-height'));
			expandHeight2 = expandHeight;
			$(testimonials).attr('data-expanded-height', expandHeight);
		}
		else
		{
			expandHeight2 = parseInt($(this).attr('data-expand-height'));
			if (expandHeight2 > expandedHeight)
			{
expandHeight = expandHeight2 - expandedHeight;
$(testimonials).attr('data-expanded-height', expandHeight2);
			}
		}
		$(testimonials).animate({height:testimonialsHeight + expandHeight});
		$(span).animate({height:100 + expandHeight2});
		$('footer').animate({top:footerTop + expandHeight});
	}
	else
	{
		$(this).attr('data', '0');
		var html = $(this).html().replace('-','+').replace('LESS','MORE');
		$(this).html(html);
		var testimonials = $(this).parent().parent();
		var testimonialsHeight = $(testimonials).height();
		var dataExpandedHeight = $(testimonials).attr('data-expanded-height');
		var dataExpanded = $(testimonials).attr('data-expanded');		
		var expandHeight = parseInt($(this).attr('data-expand-height'));
		var footerTop = $('footer').offset().top;
		var span = $(this).parent().find('.testimonial-span');
		if (dataExpanded == 1)
		{
			$(testimonials).attr('data-expanded-height', '0');
			$(testimonials).attr('data-expanded', '0');
			$(testimonials).animate({height:testimonialsHeight - expandHeight});
			$('footer').animate({top:footerTop - expandHeight});
		}
		else
		{
			$(testimonials).attr('data-expanded', '1');
			if (expandHeight >= dataExpandedHeight)
			{
if ($(this).attr('for') == '0')
	var expandHeight2 = expandHeight - parseInt($(testimonials).find('span.moretag[for=1]').attr('data-expand-height'));	
else
	var expandHeight2 = expandHeight - parseInt($(testimonials).find('span.moretag[for=0]').attr('data-expand-height'));	
$(testimonials).attr('data-expanded-height', expandHeight2);
$(testimonials).animate({height:testimonialsHeight - expandHeight2});
$('footer').animate({top:footerTop - expandHeight2});
			}
		}
		$(span).animate({height:100});
	}
});
