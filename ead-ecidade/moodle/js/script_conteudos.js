function atualizaPagina() {
	iframe_conteudo = $('iframe#conteudo');
	$('header', iframe_conteudo.contents()).css("display", "none");
	$('h2', iframe_conteudo.contents()).css("display", "none");
	$('.span4', iframe_conteudo.contents()).css("display", "none");
	$('body', iframe_conteudo.contents()).css("background", "none");
	$('body', iframe_conteudo.contents()).css("background-color", "white");
	$('.bottom', iframe_conteudo.contents()).css("display", "none");
	$('.row-fluid.navegacao', iframe_conteudo.contents()).css("display", "none");
	console.log("conteudo introducao");

	page =   $('div#page-content.row-fluid', iframe_conteudo.contents());
	page.css("background-color", "white");
	page.css("margin", 0);
	page.css("border-radius", 0);
	page.css("border", 0);
	page.css("box-shadow", "none");
	console.log(page.lenght);
	$('div > hr' , iframe_conteudo.contents()).css('display', 'none');
	expand = $('.mtlsr-lightbox', iframe_conteudo.contents()).css("display");

	if (expand == "block") {
		$('iframe#conteudo').css({'position': 'fixed',
		    'top': '0px',
		    'left': '0px',
		    'width': '100%',
		    'height': '100%',
		    'z-index': '5000'})
		$('.span8',  iframe_conteudo.contents()).css("display", "none");

	}else {
		var h_size = $('.span8', $('iframe#conteudo').contents()).css('height')
		h_size = parseInt(h_size.substring(0, h_size.length-2));
		console.log(h_size);
		if (h_size <= 200) { h_size = "600";}
		$('body', $('iframe#conteudo').contents()).css({ 'margin-left': '-100px',
			'margin-top':'80px',
			'width': '1200px',
			'overflow-y': 'scroll',
			'overflow-x': 'hidden'});
		$('iframe#conteudo').css({'position': 'initial', 
			'width': '800px', 
			'height': (h_size+"px"),
			'overflow-x': 'hidden'});
		$('.span8',  iframe_conteudo.contents()).css("display", "block");

	}
   //iframe_conteudo.css("visibility", "visible");
    setTimeout(function(){ iframe_conteudo.css("visibility", "visible");}, 800);
}

var eventoInterface = setInterval(atualizaPagina, 100);
