
$.each($('.dropdowndiv'), function(){
	
	var selectbutton = $(this).find('.selectbutton');
	var dropdownrow = $(this).find('.dropdownrow');
	var uldropdown = $(this).find('ul.dropdown');
	
	var buttonWidth = $(selectbutton).width() + 
		parseInt($(selectbutton).css('padding-left').replace('px', '')) + 
		parseInt($(selectbutton).css('padding-right').replace('px', ''));
	
	if (buttonWidth > $(uldropdown).width())
	{
		$(uldropdown).css('width', buttonWidth);
		$(dropdownrow).css('width', buttonWidth);
	}
	else
	{
		$(dropdownrow).css('width', $('ul.dropdown').width());
	}
});

$('.selectbutton').hover(
	function()
	{
		$(this).parent().find('ul.dropdown').css('visibility','visible');
	},
	function()
	{	
	}
);

$('.dropdownrow').hover(
	function()
	{	
	},
	function()
	{
		$(this).find('ul.dropdown').css('visibility','hidden');
	}
);
