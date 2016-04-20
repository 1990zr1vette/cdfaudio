
if ($('#lang').val() == 'EN')
{
	var more = 'MORE';
	var less = 'LESS';
}
else
{
	var more = 'PLUS';
	var less = 'MOIN';
}

$.each($('.brand'),function(){	
	if ($(this).find('.brandinfo').height() > 130)
	{
		var difference = $(this).find('.brandinfo').height() - 130;
		$(this).append('<div class="moretag"><span for="0" data="' + difference + '">[+] ' + more + '</span></div>');
	}
	$(this).find('.brandinfo').css('height', '130px');
});

$('.moretag span').click(function(){
	var brand = $(this).parent().parent();
	var expand = 0;
	if ($(this).attr('for') == '0')
	{
		$(this).attr('for','1').html('[-] ' + less);
		expand = parseInt($(this).attr('data'));
	}
	else
	{
		$(this).attr('for','0').html('[+] ' + more);
		expand = parseInt($(this).attr('data')) * -1;
	}
	
	$(brand).animate({height:$(brand).height() + expand});
	$(brand).find('.brandinfo').animate({height:$(brand).find('.brandinfo').height() + expand});
	$('footer').animate({top:$('footer').offset().top + expand});	
});
