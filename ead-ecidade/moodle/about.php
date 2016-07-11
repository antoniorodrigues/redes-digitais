<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("About page");
$PAGE->set_heading("About");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();
//echo "<style> div#top-info { display: none;}</style>"

// Actual content goes here
$body = <<<EOT
<body>
    <link rel="stylesheet" href="http://moodle.cloud.citta.org.br/moodle/e-Cidade-EAD--master/css/style.css">
    <link rel="stylesheet" href="http://moodle.cloud.citta.org.br/moodle/e-Cidade-EAD--master/css/style-buttons.css">
<style> div#top-info { display: none;}</style>
<div class="main">
	
		<h2 id="title">DOCUMENTAÇÃO </h2>

		<section class="search">
         
         <button style="float:right;" class="bt_second_action bt_main">OK</button>

        <input style="height:40px; width:60%; float:right; border-radius: 5px;" placeholder="Pesquisa rápida..." type="text">
        </section>
        <hr>
        
        <section class="sidebar">
            
            <h4 class="subtitle">INFORMAÇÕES GERAIS</h4>

        <nav class="menu-info-gerais">
            <ul class="lateral">
                <li><a href="#">INTRODUÇÃO</a></li>
                <li><a href="#">COMO FUNCIONA?</a></li>
                <li><a href="#">ÁREAS</a></li>
            </ul>
        </nav>

            <h4 class="subtitle">ÁREA DE SAÚDE E SEUS MÓDULOS</h4>

        <nav class="menu-modulos">
                <ul class="lateral">
                    <li><a href="#" class="ic_menu">CONFIGURAÇÕES INICIAIS</a>
                        <ul class=" sub-menu1">
                            <li class="sub-menu1"><a href="#">INTRODUÇÃO</a></li>
                            <li class="sub-menu1"><a href="#">PREFEITURA</a></li>
                            <li class="sub-menu1"><a href="#">ÓRGÃO</a></li>
                            <li class="sub-menu1"><a href="#">UNIDADES</a></li>
                            <li class="sub-menu1"><a href="#">DEPARTAMENTO</a></li>
                            <li class="sub-menu1"><a href="#">UPS</a></li>
                            <li class="sub-menu1"><a href="#">CADASTRO GERAL DO MUNICÍPIO</a></li>
                            <li class="sub-menu1"><a href="#">ESTABELECIMENTO HOSPITALAR</a></li>
                            <li class="sub-menu1"><a href="#">PROFISSIONAL DE SAÚDE</a></li>
                            <li class="sub-menu1"><a href="#">PACIENTE</a></li></ul>
                    </li>
                    <li><a href="#" class="ic_menu">AGENDAMENTO</a>
                        <ul class="lateral sub-menu2">
                            <li class="sub-menu2"><a href="#">INTRODUÇÃO</a></li>
                            <li class="sub-menu2"><a href="#">SERVIÇOS</a></li>
                            <li class="sub-menu2"><a href="#">CENTRAL DE AGENDAMENTO INTEGRADA</a></li>
                            <li class="sub-menu2"><a href="#">GERAÇÃO DE RELATÓRIOS</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="ic_menu">AMBULATORIAL</a></li>
                    <li><a href="#" class="ic_menu">FARMÁCIA</a></li>
                    <li><a href="#" class="ic_menu">HIPERDIA</a></li>
                    <li><a href="#" class="ic_menu">TFD</a></li>
                    <li><a href="#" class="ic_menu">VACINAS</a></li>
                </ul>
        </nav>

        </section> <!-- Fim da sidebar - Menu Lateral -->

        <div class="content">

            <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Unidades</h5>

                <h2 class="subtitle">UNIDADES</h2>

                <div class="text-content">
	
							<!-- Primeira ilustração -->
                    <img class="ilustration" src="../images/feedback.jpg" alt="">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id purus non sapien tristique egestas sed vitae leo. Maecenas dignissim vehicula arcu, id sollicitudin nibh aliquet at. Ut porta erat id erat blandit volutpat. Integer sollicitudin non nunc id tempus. Sed suscipit ex eget velit gravida tincidunt. Sed pharetra, mi non accumsan eleifend, dolor lacus molestie leo, id accumsan turpis magna ac mauris. Pellentesque luctus massa et ex porta tincidunt egestas sit amet nisi. Sed ultricies porta dolor id malesuada. Nam ullamcorper massa a ante sollicitudin, a volutpat velit viverra. Maecenas iaculis erat diam, vitae placerat massa laoreet nec. Proin at quam ex. Vestibulum rhoncus imperdiet turpis. Etiam a tellus elementum, porta velit non, ornare mi. Etiam nibh enim, tristique eu consequat quis, tristique et est.</p>
                    <br>
                    <p>Donec eleifend erat sit amet urna imperdiet, nec eleifend lorem varius. Morbi eu ullamcorper massa. Nulla non risus et odio volutpat vestibulum. Sed at lacus sit amet nisl tristique sagittis. Fusce fermentum dui sed nisl mattis malesuada. Suspendisse consectetur elit ac dignissim sodales. Morbi feugiat ligula at pulvinar sodales. Etiam fringilla dictum vulputate. Morbi aliquet metus eu magna pretium dignissim. Curabitur eget malesuada nulla. Quisque finibus urna augue, id aliquam eros cursus ut.</p>
                    <br>
                    <p>Pellentesque lobortis ullamcorper maximus. Sed vel tristique nunc. Proin semper sapien id pretium rutrum. Integer vulputate elit lectus, non porta augue aliquam nec. Sed condimentum neque et ipsum efficitur cursus. Aenean dictum, nisl non aliquet tristique, sem eros varius velit, quis rutrum tellus libero at felis. Donec vel volutpat ante. Quisque finibus nulla eu mi accumsan maximus. Quisque euismod dictum quam vel posuere. Cras ac ex nec augue placerat vehicula. Proin quis dui in est sollicitudin lacinia. Aenean a mi maximus, dapibus ipsum ac, iaculis enim. Vestibulum vitae porttitor urna.</p>
                    <br>
                    
                    <!-- Segunda ilustração -->
                    <img class="ilustration" src="../images/feedback.jpg" alt="">
                    
                    
                    <p>Vivamus sit amet tincidunt lorem, lobortis tristique justo. Nunc ullamcorper sem quis urna commodo, eu suscipit nisi tristique. Maecenas in felis purus. Fusce in mauris rhoncus, venenatis tortor eget, pharetra ipsum. Integer et commodo orci. Sed lorem elit, semper vel orci nec, dignissim venenatis velit. Nulla facilisi.</p>
                    <br>
                    <p>In accumsan rhoncus lacus, eget elementum nisl convallis in. Nulla aliquam maximus erat sed tincidunt. Sed gravida dapibus lacus id sodales. Suspendisse efficitur erat eget sollicitudin pellentesque. Vestibulum ipsum erat, scelerisque vitae tortor eget, tempus posuere lorem. Quisque id accumsan dolor. Aliquam cursus nibh eget justo posuere consectetur. Proin dignissim condimentum facilisis.</p>
                    <br>

                </div>

        </div> <!-- Fim do conteúdo - texto -->


  		</div> <!-- Fim do conteúdo principal -->

	<footer>
	</footer>  
<body>
EOT;
echo $body;

echo $OUTPUT->footer();

?>
