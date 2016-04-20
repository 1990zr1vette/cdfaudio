
$.each($('.currentbutton'), function(){
	if ($(this).hasClass('currentbutton0') == true)
		$(this).html('NOT CURRENT');
	else
		$(this).html('CURRENT');
});

$('.currentbutton').click(function(){
	if ($(this).hasClass('currentbutton0') == true)
	{
		var response = confirm('Are you sure you want to set this one to current?');
		if (response == true)
		{
			$(this).removeClass('currentbutton0').addClass('currentbutton1').html('CURRENT');
			$($('#formid').val()).find('input[name=id]').val($(this).attr('for'));
			$($('#formid').val()).submit();
		}
	}
	else
	{
		$('#info').html('<span class="error">You can only set a button to current. By doing so you set all the others to not current.</span>');
	}
});