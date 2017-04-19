function isNull(data){ 
	return (data == "" || data == undefined || data == null) ? true: data; 
}
function menu_item_onclick(){ 
	if($('#content .menu .item').length>1){ 
		$('#content .menu .item').find('i').show();
	}else{ 
		$('#content .menu .item').find('i').hide();
	}
	$('#content .menu .item span').on('click',function(){ 
		$(this).closest('.item').addClass('active').siblings().removeClass('active');
		var id=$(this).closest('.item').attr('id');
		$('#'+id+'_div').addClass('active').siblings().removeClass('active');
	});
	$('#content .menu .item i').on('click',function(){
		if($(this).closest('.menu').find('.item').length>1){ 
			var id=$(this).closest('.item').attr('id');
			if($(this).closest('.item').hasClass('active')){ 
				if(isNull($(this).closest('.item').next())){ 
					$(this).closest('.item').prev().addClass('active');
					var next_id=$(this).closest('.item').prev().attr('id');
					$('#'+next_id+'_div').addClass('active');
				}else{ 
					$(this).closest('.item').next().addClass('active');
					var next_id=$(this).closest('.item').next().attr('id');
					$('#'+next_id+'_div').addClass('active');
				}
			}
			$(this).closest('.item').remove();
			$('#'+id+'_div').remove();
		}
		if($('#content .menu .item').length>1){ 
			$('#content .menu .item').find('i').show();
		}else{ 
			$('#content .menu .item').find('i').hide();
		}
	});
}
function winit(){ 
	var height = $(this).height()-$('.main').prev('.menu').height();
  	$('.main #menu_left').height(height);
  	$('.main #content').height($('.main #menu_left').height());
  	menu_item_onclick();
}
function left_menu_click(url,id,e,title){
	if($('#'+id).length==0){
		var str=isNull($(e).text())&&!isNull(title)?title:$(e).text();
		var add_html='<div class="active item" data-tab="'+id+'" id="'+id+'"><span>'+str+'</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="remove icon"></i></div>';
		var add_html_div='<div class="ui bottom attached active tab content_div" data-tab="'+id+'" id="'+id+'_div">加载中</div>';
		$($.parseHTML(add_html, document, true)).appendTo($('#content .menu'));
		$($.parseHTML(add_html_div, document, true)).appendTo($('#content'));  
		$('#'+id+'_div').html('').load(url);
		$('#'+id).siblings().removeClass('active');
		$('#'+id+'_div').siblings().removeClass('active');	
		menu_item_onclick();	
	} else {
		$('#'+id).addClass('active').siblings().removeClass('active');
		$('#'+id+'_div').addClass('active').siblings().removeClass('active');
	} 
	if($('#content .menu .item').length>1){ 
		$('#content .menu .item').find('i').show();
	}else{ 
		$('#content .menu .item').find('i').hide();
	}
} 
winit();
$('.menu_left .menu .header').next('.menu').hide();
$('.menu_left #header').next('.menu').hide();
$('.menu_left #header').on(
	'click',
	function(){ 
		if($(this).next('.menu').is(":hidden")){ 
			$(this).next('.menu').show(200);
			$(this).find('i').removeClass().addClass('angle up icon');
		}else{ 
			$(this).next('.menu').hide(200);
			$(this).find('i').removeClass().addClass('angle down icon');
		}
	}
);
$('.menu_left a').on('click',function(){ 
	$(this).addClass('active').closest('.menu_left').find('a').not($(this)).removeClass('active');
});
$('.menu .dropdown').dropdown({
  on       : 'hover',
  action   : 'nothing',
  allowTab : false
});
$('#menu_button').click(function(){ 
	$('.left.sidebar').sidebar('toggle');
})
$(window).resize(function() {
	winit();
});

