$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');
		/*if(listaMenu.is(':hidden')== true)
			listaMenu.fadeIn();
		else
			listaMenu.fadeOut();*/

		listaMenu.slideToggle();
	});

	if($('target').length > 0){
		var elemento = '#' + $('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll}, 2000);
	}

})