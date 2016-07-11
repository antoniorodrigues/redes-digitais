<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Configurações Iniciais - Prefeitura"); //Modificar títulos da página
$PAGE->set_heading("Configurações Iniciais- Prefeitura");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
$body = <<<EOT
<body>

    <style>
        div#top-info { display: none;} 
        /*div#page-content.row-fluid {height: 650px;}*/
        .content-curso {height:650px;/*float:right;*/margin-left:5px; width: 98
        /*position: absolute;z-index: 1;*/}
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
    <script src="e-Cidade-EAD--master/js/mtlsr-lightbox.js"></script>
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/style.css">
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/mtlsr-lightbox.css" />

	<div id="main-body">
    <h2>DOCUMENTAÇÃO CURSO - CONFIGURAÇÕES INICIAIS</h2>
   <!--  <div class="search" style="float:right">
         
        <button style="float:right;" class="bt_second_action bt_main">OK</button>

        <input style="height:40px; width:60%; float:right; border-radius: 5px;" placeholder="Pesquisa rápida..." type="text">

    </div>
	-->

    <hr>

    <div class="row-fluid">

        <div class="span4" style="height:450px;">
            <div style="position: absolute;z-index: 2;">
                <iframe id="bodypage" frameborder="0" src="menu.html"></iframe>
            </div>
        </div>
        <!-- <div class="span1" style="height:650px;"> -->
        </duv>
    
        <div class="span8">

            <div class="content-curso"> <!-- MODIFICAR CONTEÚDO AQUI -->

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Prefeitura</h5>

                <h2 class="subtitle"><b>PREFEITURA</b></h2>

                <div class="text-content"> 

                    <p>Como foi falado, a instituição ativa no software e-Cidade contém uma estrutura básica para o seu correto uso na gestão municipal. Para a inserção dos dados de prefeitura no sistema, devemos alterar os dados existentes dessa instituição.</p><br> 

                    <p>Para ter acesso a essa opção, no módulo de Configuração, acesse no menu <b>Cadastros</b>, e siga até a opção <b>Instituições</b> e selecione <b>Alteração</b>.</p>
                    
                    <div class="mtlsr-images-for-lightbox">
                        <a href="e-Cidade-EAD--master/images/max-acesso-prefeitura.png"> <!-- Imagem ampliada -->
                            <img class="ilustration1" src="e-Cidade-EAD--master/images/mini-acesso-prefeitura.png" alt="" title="Clique para ampliar"><br><br><!-- Imagem miniatura -->
                        </a>          
                    </div>  <!-- Fim do conteúdo - imagem ampliada -->

                    <div class="row-fluid navegacao short">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="acesso_areas.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso às áreas do software</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="prefeitura_selecao.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Seleção da Instituição</h4>
                        </div>
                    
                    </div>
            
                </div> <!-- MODIFICAR CONTEÚDO FINAL -->

            </div> 
      
        </div>

    </div>

    <!-- Imagem ampliada-->
    <div class="mtlsr-lightbox">
        <a href="#" class="close">&#9421;</a>
    </div>
</div>
    <script src="http://moodle.cloud.citta.org.br/moodle/js/script_documentacao.js"></script>


</body>
EOT;
echo $body;

echo $OUTPUT->footer();

