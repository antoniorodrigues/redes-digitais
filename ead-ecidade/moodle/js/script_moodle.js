
var BASE_URL =  "http://moodle.cloud.citta.org.br/moodle";
var id_pagina = $('body').attr('id');

var cursos = $('.enrolmenticons > .smallicon');
var professores = $('.teachers');
var id_curso = 2;

if (id_pagina != "page-login-index") {
	atualizaInterfaceGeral();
	atualizaInterfaceMenuLateral();
	atualizaInterfaceInscricao();
	atualizaInterfaceCursos();
}

function atualizaInterfaceGeral() {
	$(".navbar-inner" ).prepend(general.top_logo);
	$("div#page-content.row-fluid ").prepend(general.inf_gerais);
	$("#block-region-side-pre").prepend(general.inf_menu_p);

	console.log($( ".block_tree.list"));

	$( ".block_tree.list").prepend(general.menu_user);

	$( ".block_tree.list").prepend(general.op_inicio);
	$( ".block_tree.list").append(general.op_cursos_disponiveis);
	$("li.type_unknown.depth_1.contains_branch.current_branch").attr("aria-expanded","false");
	$(".type_course.depth_3.collapsed.contains_branch > p.tree_item.branch").attr('class', 'tree_item hasicon');
	$(".type_system.depth_2.contains_branch >ul >li.collapsed.contains_branch > p.tree_item.branch").attr('class', 'tree_item hasicon'); 

	if (id_pagina != "page-login-index") {
		$("div#page").append(general.footer);
	}	
	$("span.usertext").prepend("Olá, "); 

	console.log($("ul >li.type_system.depth_2.contains_branch[aria-expanded='true'] >p >span").text());
	if ($("ul >li.type_system.depth_2.contains_branch[aria-expanded='true'] >p >span").text() != 'Meus cursos'){
		$("ul >li.type_system.depth_2.contains_branch[aria-expanded='true']").css( "display", "none" );
	}
	$("li.type_system.depth_2.item_with_icon.current_branch").css("display", "none");
}

// Altera imagens das opções do top menu lateral (menu do usuario)
function atualizaInterfaceMenuLateral() {
	var itens_menu = $('.iconsmall');
	var imagens_menu = [BASE_URL + '/images/icones_top_menu/ic_panel.png', 
			BASE_URL + '/images/icones_top_menu/ic_perfil.png',
			BASE_URL + '/images/icones_top_menu/ic_notas.png',
			BASE_URL + '/images/icones_top_menu/ic_mensagem.png',
			BASE_URL + '/images/icones_top_menu/ic_preferencias.png',
			BASE_URL + '/images/icones_top_menu/ic_sair.png']
	for (i=0; i<  imagens_menu.length; i++){
		itens_menu[i].src = imagens_menu[i];
		console.log('ok')
	}
}


// Atualizar interface dos botões de auto inscrição - matricular
function atualizaInterfaceInscricao() {
	var itens_admin = $('li.type_setting >p.tree_item >a');

	for (i=0; i <= professores.length; i++){
		try {
			if (cursos[i].title == "Autoinscrição")
				$('.teachers')[i].innerHTML+= '<div class="button-matricular" onclick="window.location=\' http://moodle.cloud.citta.org.br/moodle/enrol/index.php?id=' + (i+2) +'\';">MATRICULAR</div>'
		}
		catch (err){
			try { //$('.teachers')[i].innerHTML+= '<div class="button-matricular" onclick="window.location=\' http://moodle.cloud.citta.org.br/moodle/enrol/self/unenrolself.php?enrolid=' + (i+2) +'\';">DESMATRICULAR</div>'
			} catch (err){} 
		}
	}	

	for (i=0; i<=itens_admin.length; i++){ 
		try {
			var link_desmatricular = itens_admin[i].href; 
			if (link_desmatricular.indexOf('unenrolself') > -1){ 		
				$(".course-content").prepend('<div class="button-matricular button2" onclick="window.location=\''+ itens_admin[i].href +'\';">CANCELAR MATRÍCULA</div>'); console.log(link_desmatricular);
			}
		} catch (err) {}
	}
}



/* Ajustes página individual de cursos*/

function atualizarMenu() {
    $(".type_system.depth_2.contains_branch >ul >li.collapsed.contains_branch > p.tree_item.branch").attr('class', 'tree_item2 hasicon');
    var result = $('tree_item2 hasicon').innerHTML;

}

function atualizaInterfaceCursos(){
	var inicio = $('.block_tree > p')[0];
	var meus_dados = $('.block_tree > li > p')[0];
	var meus_cursos = $('.block_tree > li > ul > li > p')[6];
	var cursos_disponiveis = $('.block_tree > p')[1];

	if (id_pagina == "page-my-index"){
		inicio.className = "tree_item_hovered hasicon";
		inicio.innerHTML+= "<div class=\"arrow_menu\"></div>";
	}

	else if (id_pagina == "page-site-index"){
		var eventoInterface = setInterval(atualizarMenu, 50);

		cursos_disponiveis.className = "tree_item_hovered hasicon";
		cursos_disponiveis.innerHTML+= "<div class=\"arrow_menu\"></div>";
	}

	else if (id_pagina == "page-course-view-topics"){
		$('#region-main-box').attr('class', "span12");
		$('#region-main').attr('class', "span9 pull-right");
		$('#block-region-side-pre').attr('class', "span3 desktop-first-column block-region");

		
		$('h4.subtitle').css('margin-top', '-20px');
	//	$('li.activity.forum').find('img').attr('src', '/moodle/images/icones_config/ic_forum.png')


		var title_course = $('ul.topics > li#section-0').attr('aria-label');
		$('#top-info ').append("<div style=\"margin-left:26%\"><h5>Início</h5>><h5 class=\"link\">Meus Cursos</h5>><h5 class=\"link\">" + title_course + "</h5></div>");

		var eventoInterface = setInterval(atualizarMenu, 100);

		$('#expandable_branch_0_mycourses').css('background-color', '#F97D6D');
		meus_cursos.innerHTML+= "<div class=\"arrow_menu\"></div>";
	}
	var tipo_usuario = $('p.tree_item.branch.root_node').length;
	if (tipo_usuario <= 1){	
		console.log("Ocultando paineis de admin!")
		$('div#inst5').hide();
		for (i=18; i<=26; i++) { $('div#inst'+i).hide();}
	}
}


