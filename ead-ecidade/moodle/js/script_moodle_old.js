
var BASE_URL =  "http://moodle.cloud.citta.org.br/moodle";
var id_pagina = $('body').attr('id');

var cursos = $('.enrolmenticons > .smallicon');
var professores = $('.teachers');
var id_curso = 2;

if (id_pagina != "page-login-index") {
	atualizaInterfaceGeral();
	atualizaInterfaceMenuLateral();
	atualizaInterfaceInscricao();
	//atualizaInterfaceAtividades();
	atualizaInterfaceCursos();
}

function atualizaInterfaceGeral() {
	$(".navbar-inner" ).prepend( "<div class='li_image_top'><section class='top'>  <nav class='principal'>    <article class='logo'> <img src='http://moodle.cloud.citta.org.br/moodle/login/images/logo_ecidade.png' title='Logo e-Cidade' class='image_top' alt=''> </article>  </section> </div>" );
	$("div#page-content.row-fluid ").prepend("<div id='top-info'><h2 id='main-title'>PAINEL ALUNO </h2><hr><h4 class='subtitle'>INFORMAÇÕES GERAIS</h4></div>");

	console.log($( ".block_tree.list"));

	$( ".block_tree.list").prepend('<li class="contains_branch collapsed" aria-expanded="false"><p class="tree_item branch" tabindex="0" data-expandable="1" data-loaded="1"><span>MEUS DADOS</span></p><ul id="meus-dados-menu">        <li class="item_with_icon">        <p class="tree_item hasicon" id="item"><a class="submenu-lateral" title="PERFIL" href="http://moodle.cloud.citta.org.br/moodle/user/profile.php?"><img alt="Fórum" src="http://moodle.cloud.citta.org.br/moodle/theme/image.php/clean/forum/1450273960/icon" title="Fórum" class="smallicon navicon"><span class="item-content-wrap">Perfil</span></a>      </p>    </li>       <li class="item_with_icon">  <p class="tree_item hasicon" id="expandable_branch_16"><a class="submenu-lateral" title="DADOS DA CONTA" href="http://moodle.cloud.citta.org.br/moodle/user/edit.php?"><img alt="Fórum" src="http://moodle.cloud.citta.org.br/moodle/theme/image.php/clean/forum/1450273960/icon" title="FÓRUM" class="smallicon navicon"><span class="item-content-wrap">Dados da Conta</span></a>        </p>        </li>         <li class="item_with_icon">      <p class="tree_item hasicon" id="expandable_branch_16"><a class="submenu-lateral" title="MENSAGENS" href="http://moodle.cloud.citta.org.br/moodle/message/index.php"> <img alt="Fórum" src="http://moodle.cloud.citta.org.br/moodle/theme/image.php/clean/forum/1450273960/icon" title="Fórum" class="smallicon navicon"><span class="item-content-wrap">Mensagens</span></a>        </p>    </li>   </ul></li>');
	$( ".block_tree.list").prepend('<p class="tree_item leaf hasicon"><a href="http://moodle.cloud.citta.org.br/moodle"><img class="smallicon navicon" alt="" src="http://moodle.cloud.citta.org.br/moodle/theme/image.php/clean/core/1452782018/i/navigationitem"><span class="item-content-wrap">INÍCIO</span></a></p>');
	$( ".block_tree.list").append('<p class="tree_item leaf hasicon"><a href="http://moodle.cloud.citta.org.br/moodle/?redirect=0"><img class="smallicon navicon" alt="" src="http://moodle.cloud.citta.org.br/moodle/theme/image.php/clean/core/1452782018/i/navigationitem"><span class="item-content-wrap">CURSOS DISPONÍVEIS</span></a></p>');
	$("li.type_unknown.depth_1.contains_branch.current_branch").attr("aria-expanded","false");
	$(".type_course.depth_3.collapsed.contains_branch > p.tree_item.branch").attr('class', 'tree_item hasicon');
	$(".type_system.depth_2.contains_branch >ul >li.collapsed.contains_branch > p.tree_item.branch").attr('class', 'tree_item hasicon'); 

	if (id_pagina != "page-login-index") {
		$("div#page").append('<div id="footerbottom"><hr>  <section class="bottom">  <nav class="principal">         <article class="logo-moodle">  <div><h4 style="margin-bottom: 10px">Desenvolvido em:</h4></div> <img class="logo" src="http://moodle.cloud.citta.org.br/moodle/e-Cidade-EAD--master/assets/logo_moodle.png" title="Logo Moodle">  </article>   <article class="logos-silibrina">  <div><h4 style="margin-bottom: 10px">Financiado e Desenvolvido por:</h4></div>  <img id="logo" src="http://moodle.cloud.citta.org.br/moodle/e-Cidade-EAD--master/assets/logo_brasil.png" title="Logo Brasil"> <img id="logo" src="http://moodle.cloud.citta.org.br/moodle/e-Cidade-EAD--master/assets/logo_fapesq.png" title="Logo FAPESQ-PB">  <img id="logo" src="http://moodle.cloud.citta.org.br/moodle/e-Cidade-EAD--master/assets/logo_silibrina.png" title="Logo Silibrina Tecnologia">   </article>     </nav>   </section></div>');
	}	
	$("span.usertext").prepend("Olá, "); 
	//$(".course-content").prepend('<div id="atividades-cursos"  class="row-fluid" style=" width: 900px;" ><div class="span2 item-curso" id="atv_conteudos"  style="background-image:url(\'http://moodle.cloud.citta.org.br/moodle/images/ic_conteudos_do_curso.png\' ); cursor: pointer;" onclick="window.location=\'http://moodle.cloud.citta.org.br/moodle/mod/page/view.php?id=3\';"></div>  <div class="span2 item-curso" id="atv_avaliacao" style="background-image:url(\'http://moodle.cloud.citta.org.br/moodle/images/ic_avaliacao.png\');cursor: pointer;" onclick="window.location=\'http://moodle.cloud.citta.org.br/moodle/mod/quiz/view.php?id=4\';"></div>  <div class="span2 item-curso" id="atv_forum" style="background-image:url(\'http://moodle.cloud.citta.org.br/moodle/images/ic_forum.png\');cursor: pointer;" onclick="window.location=\'http://moodle.cloud.citta.org.br/moodle/mod/forum/view.php?id=1\';"></div> <div class="span2 item-curso" id="atv_feedback" style="background-image:url(\'http://moodle.cloud.citta.org.br/moodle/images/ic_feedback.png\');cursor: pointer;" onclick="window.location=\'http://moodle.cloud.citta.org.br/moodle/mod/feedback/view.php?id=5\';"></div></div>'); 

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
				$(".course-content").prepend('<div class="button-matricular button2" onclick="window.location=\''+ itens_admin[i].href +'\';">DESMATRICULAR</div>'); console.log(link_desmatricular);
			}
		} catch (err) {}
	}
}


function atualizaInterfaceAtividades() {
	var atividades_curso = $('.unlist >li >div >div >a');
	var link_atividades = {};
	for (i=0; i<= atividades_curso.length; i++){
		try{
			if (atividades_curso[i].href.indexOf('mod/forum') > -1){
				link_atividades.forum = (atividades_curso[i].href);
				$('div#atv_forum').attr('onclick', 'window.location="' + link_atividades.forum +'";');
			}
		 } catch (err) {}

		try{
			if (atividades_curso[i].href.indexOf('mod/quiz') > -1){
				link_atividades.avaliacao = (atividades_curso[i].href);
				 $('div#atv_avaliacao').attr('onclick', 'window.location="' + link_atividades.avaliacao +'";');
			}
		} catch (err) {}

		try {
			if (atividades_curso[i].href.indexOf('mod/feedback') > -1){
				link_atividades.feedback = (atividades_curso[i].href);
				 $('div#atv_feedback').attr('onclick', 'window.location="' + link_atividades.feedback +'";');
			
			}
		 } catch (err) {}

		try{
			if (atividades_curso[i].href.indexOf('mod/page') > -1){
				link_atividades.conteudos = (atividades_curso[i].href);
				 $('div#atv_conteudos').attr('onclick', 'window.location="' + link_atividades.conteudos +'";');
			
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


