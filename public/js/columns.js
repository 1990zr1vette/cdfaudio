
$('hr').last().remove();
$('.spacer20').last().remove();

var item = $('input[name=item]').val();

$.each($(item),function(){
	if ($(this).hasClass('noresize') == false)
	{
		if ($(this).find('.leftcolumn').height() > $(this).find('.rightcolumn').height())
		{
			$(this).css('height', $('.leftcolumn').height() + 100);
		}
		else
		{
			$(this).css('height', $(this).find('.rightcolumn').height() + 100);
		}
	}
});

$.fn.isOnScreen = function(){
	var win = $(window);
	var viewport = {top:win.scrollTop(),left:win.scrollLeft()};
	viewport.right = viewport.left + win.width();
	viewport.bottom = viewport.top + win.height();
	var bounds = this.offset();
	bounds.right = bounds.left + this.outerWidth();
	bounds.bottom = bounds.top + this.outerHeight();
	return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

$.each($(item),function(){
	var leftcolumn = $(this).find('.leftcolumn');	
	$(leftcolumn).css('left','-' + ($(leftcolumn).width() + 40) + 'px');
	$(leftcolumn).attr('data-left',$(leftcolumn).position().left);
	
	var rightcolumn = $(this).find('.rightcolumn');	
	$(rightcolumn).css('left', $(rightcolumn).width() + 100 );
	$(rightcolumn).attr('data-left', $(rightcolumn).position().left  );	
	
	$(this).attr('data-on-screen','0');
});

checkItems();

$(document).ready(function()
{
	$(window).scroll(function()
	{
		checkItems();
	});
});

function checkItems()
{
	$.each($(item),function(index)
	{
		if ($(this).isOnScreen())
		{
			if ($(this).attr('data-on-screen') == '0')
			{
				$(this).attr('data-on-screen','1');
				$(this).find('.leftcolumn').animate({left:0},1000);
				$(this).find('.rightcolumn').animate({left:0},1000);
			}
		}
		else
		{
			if ($(this).attr('data-on-screen') == '1')
			{
				$(this).attr('data-on-screen','0');
				var leftcolumn = $(this).find('.leftcolumn');
				$(leftcolumn).css('left',parseInt($(leftcolumn).attr('data-left')));
				var rightcolumn = $(this).find('.rightcolumn');
				$(rightcolumn).css('left',parseInt($(rightcolumn).attr('data-left')));
			}
		}
	});
}
