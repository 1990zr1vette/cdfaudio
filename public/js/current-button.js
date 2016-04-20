				
$.each($('.currentbutton'), function(){
	if ($(this).hasClass('currentbutton0') == true)
		$(this).html('NOT CURRENT');
	else
		$(this).html('CURRENT');
});
				
$('.currentbutton').click(function(){
	if ($(this).hasClass('currentbutton0') == true)
	{
		$(this).removeClass('currentbutton0').addClass('currentbutton1').html('CURRENT');
		$(this).parent().find('input[name=current]').val('1');
	}
	else
	{
		$(this).removeClass('currentbutton1').addClass('currentbutton0').html('NOT CURRENT');
		$(this).parent().find('input[name=current]').val('0');
	}
});