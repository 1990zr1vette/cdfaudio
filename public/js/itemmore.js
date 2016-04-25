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

var InventoryItemDescriptionHeight = 160;

$.each($('.InventoryItem'),function(index)
{
	var InventoryItemDescription = $(this).find('.InventoryItemDescription');
	
	if ($(InventoryItemDescription).height() < InventoryItemDescriptionHeight)
	{
		$(this).find('.InventoryItemMore').css('display','none');
	}
	else
	{			
		$(this).find('.InventoryItemMore span').attr('data-expand', $(this).height() - InventoryItemDescriptionHeight);
		$(InventoryItemDescription).css('height', InventoryItemDescriptionHeight + 'px');
	}
})

$('.InventoryItemMore span').click(function()
{
	var InventoryItem = $(this).parent().parent();
	var InventoryItemDescription = $(InventoryItem).find('.InventoryItemDescription');
	
	if ($(this).attr('data') == '0')
	{	
		$(this).attr('data', '1').html(less);
		var expand = parseInt($(this).attr('data-expand'));
		$(this).parent().animate({top:expand});
	}
	else
	{
		$(this).attr('data', '0').html(more);
		var expand = parseInt($(this).attr('data-expand')) * -1;
		$(this).parent().animate({top:0});
	}
	
	$(InventoryItem).animate({height:$(InventoryItem).height() + expand});
	$('footer').animate({top:$('footer').offset().top + expand});	
	$(InventoryItemDescription).animate({height:$(InventoryItemDescription).height() + expand});
});