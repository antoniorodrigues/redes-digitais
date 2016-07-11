<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Cadastro do Tipo de Ficha"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Cadastro do Tipo de Ficha");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
$body = <<<EOT
<body>

    <style>
        div#top-info { display: none;} 
        /*div#page-content.row-fluid {height: 650px;}*/
        .content-curso {height:500px;/*float:right;*/margin-left:5px; width: 98
        /*position: absolute;z-index: 1;*/}
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
    <script src="e-Cidade-EAD--master/js/mtlsr-lightbox.js"></script>
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/style.css">
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/mtlsr-lightbox.css" />

    <h2>DOCUMENTAÇÃO CURSO - MÓDULO AGENDAMENTO</h2>
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

            <div class="content-curso"> <!-- MODIFICAR CONTEÚDO AQUI -->

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Cadastro do Tipo de Ficha</h5>

                <h2 class="subtitle"><b>TIPO DE FICHA</b></h2>

                <div class="text-content"> 
					<div class="mtlsr-images-for-lightbox">
						<a href="e-Cidade-EAD--master/images/alterar_tipo_ficha0.png"> <!-- Imagem ampliada -->
							<img class="ilustration" src="e-Cidade-EAD--master/images/exclusao_lupa.png" alt="" title="Clique para ampliar"><!-- Imagem miniatura -->
						</a>
					</div>

					<p>Para excluir um tipo de ficha previamente cadastrado, basta apenas conferir se os dados que apareceram em sua tela correspondem e clicar no botão <b>Excluir</b> ou no botão <b>Pesquisar</b> caso deseje selecionar outro tipo de ficha para excluir.
					</p><br>

					

					<p>Uma mensagem de confirmação surgirá em sua tela. Clique em <b>OK</b> para concluir o procedimento.</p>
                    
                    <div class="row-fluid navegacao short"  style="margin-top:300px;">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cadastro_ficha7.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Seleção do Tipo de Ficha</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="agendamento_consulta1.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Agendamento de Consulta</h4>
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

 <script src="http://moodle.cloud.citta.org.br/moodle/js/script_documentacao.js"></script>

</body>
EOT;
echo $body;

echo $OUTPUT->footer();

