
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

$.each($('.BrandItem'),function(index){	
	var BrandDetails = $(this).find('.BrandDetails');	
	if ($(BrandDetails).height() < 180)
	{
		$(this).find('.BrandMore').css('display', 'none');
	}
	else
	{
		$(this).find('.BrandMore span').attr('expand', $(BrandDetails).height() - 180);
	}	
	$(BrandDetails).css('height', '180px');	
});

$('.BrandMore span').click(function(){
	var BrandItem = $(this).parent().parent();
	var BrandDetails = $(BrandItem).find('.BrandDetails');
	if ($(this).attr('data') == '0')
	{
		$(this).attr('data', '1').html(less);
		var expand = parseInt($(this).attr('expand'));
	}
	else
	{
		$(this).attr('data', '0').html(more);
		var expand = parseInt($(this).attr('expand')) * -1;
	}
	$(BrandDetails).animate({height:$(BrandDetails).height() + expand});
	$(BrandItem).animate({height:$(BrandItem).height() + expand});
	$('footer').animate({top:$('footer').offset().top + expand});	
});