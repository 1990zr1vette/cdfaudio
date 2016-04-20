
$('#imagebutton').css('left',$('#image').position().left);
$('#image').css('height', $('#imagebutton').height() + parseInt( $('#imagebutton').css('padding-bottom').replace('px','') ) + parseInt( $('#imagebutton').css('padding-top').replace('px','') ) + 2);
$('#image').css('width', $('#imagebutton').width() + parseInt( $('#imagebutton').css('padding-left').replace('px','') ) + parseInt( $('#imagebutton').css('padding-right').replace('px','') ) + 2);
$('#imagebutton').click(function(){$('#image').click();});
$('#image').change(function(){$('#imagename').html($(this)[0].files[0].name);	});
