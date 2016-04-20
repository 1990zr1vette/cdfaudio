
$.each($('.studioservice'),function(){
	if ($(this).find('.leftcolumn').height() > $(this).find('.rightcolumn').height())
	{
		$(this).css('height', $(this).find('.leftcolumn').height() + 40);
	}
	else
	{
		$(this).css('height', $(this).find('.rightcolumn').height() + 40);
	}	
});