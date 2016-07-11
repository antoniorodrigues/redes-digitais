<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Canfigurações Iniciais - Prefeitura");
$PAGE->set_heading("Canfigurações Iniciais- Prefeitura");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
$body = <<<EOT
<body>
<style> div#top-info { display: none;} 
/*div#page-content.row-fluid {height: 650px;}*/
.content-curso {height:500px;/*float:right;*/margin-left:5px; width: 98
/*position: absolute;z-index: 1;*/
}</style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
    <script src="e-Cidade-EAD--master/js/mtlsr-lightbox.js"></script>
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/style.css">
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/mtlsr-lightbox.css" />

<h2>DOCUMENTAÇÃO CURSO - CONFIGURAÇÕES INICIAIS</h2>
<hr>
<div class="row-fluid">
	<div class="span4" style="height:450px;">
	<div style="position: absolute;z-index: 2;">
                 <iframe id="bodypage" width="600px" height="800px" frameborder="0" src="menu.html"></iframe>
        </div>
	</div>
	<!-- <div class="span1" style="height:650px;"> -->
	</duv>
	<div class="span8">
	<div class="content-curso">


            <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Introdução</h5>

            <h2 class="subtitle"><b>PREFEITURA</b></h2>

            <div class="text-content"> 

                <div class="mtlsr-images-for-lightbox">
                    <a href="e-Cidade-EAD--master/images/agendamento_inicio.png"> <!-- Imagem ampliada -->
                        <img class="ilustration" src="e-Cidade-EAD--master/images/feedback.jpg" alt="" title="Clique para ampliar"><!-- Imagem miniatura -->
                    </a>          
                </div>

                <p>Como foi falado, a instituição ativa no software e-Cidade contém uma estrutura básica para o seu correto uso na gestão municipal. Para a inserção dos dados de prefeitura no sistema, devemos alterar os dados existentes dessa instituição.</p><br> 

                <p>Para ter acesso a essa opção, no módulo de Configuração, acesse no menu <b>Cadastros</b>, e siga até a opção <b>Instituições</b> e selecione <b>Alteração</b>.</p>
                    <br>

        <div >

            <div class="previous">
                <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                <a href="acesso_areas.php">ANTERIOR</a>
                <br>
                <h4 style="margin-left: 40px;">Acesso às áreas do software</h4>
            </div>
            <div class="proximo">
                <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                <a href="prefeitura2.php">PRÓXIMO</a>
                <br>
                <h4 style="float: right; ">Seleção da Instituição</h4>
            </div>
        </div>
</div>

        </div> <!-- Fim do conteúdo - texto -->

      
	</div>


</div>

</body>
EOT;
echo $body;

echo $OUTPUT->footer();

