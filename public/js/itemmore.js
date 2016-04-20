
if ($('#lang').val() == 'EN')
{
	var more = '[+] MORE';
	var less = '[-] LESS';
}
else
{
	var more = '[+] PLUS';
	var less = '[-] MOIN';	
}

$.each($('.item'),function(){
	
	if ($(this).find('.itemdescription').height() > 155)
	{
		$(this).find('.itemmore span').attr('for', $(this).find('.itemdescription').height() - 155).attr('data', '0');
	}
	else
	{
		$(this).find('.itemmore span').css('display', 'none');
		$(this).css('height', 210);
	}
	
});

$('.itemmore span').click(function(){
	var parent = $(this).parent().parent();
	var expand = 0;
	
	if ($(this).attr('data') == '0')
	{
		$(this).attr('data', '1').html(less);
		expand = parseInt($(this).attr('for'));
	}
	else
	{
		$(this).attr('data', '0').html(more);
		expand = parseInt($(this).attr('for')) * -1;
	}
	
	$(parent).animate({height:$(parent).height() + expand});
	$(parent).find('.rightcolumn').animate({height:$(parent).find('.rightcolumn').height() + expand});
	$('footer').animate({top:$('footer').offset().top + expand});
});
