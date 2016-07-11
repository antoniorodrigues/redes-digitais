<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Relatório de Agendamento por Período"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Relatório de Agendamento por Período");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Relatório de Agendamento por Período</h5>

                <h2 class="subtitle"><b>RELATÓRIO DE AGENDAMENTO POR PERÍODO</b></h2>

                <div class="text-content"> 
					<p>Para emitir o relatório de agendamento por período, no sistema e-Cidade, siga os passos mostrados na imagem abaixo, a partir do Módulo Agendamento.</p>
 
					<p>Na barra de menus, clique em <b>Relatórios</b>.Siga até a opção <b>Agendamento por Período</b>.</p>
					<br>
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/rel_agend_periodo1.png"> <!-- Imagem ampliada -->
								<img class="ilustration2" src="e-Cidade-EAD--master/images/rel_agend_periodo1_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
					</ul>
				
				
                    <div class="row-fluid navegacao short" style="margin-top:300px;">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="rel_agendamento2.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Relatório de Agendamento</h4>
                        </div>
						
						<div class="proximo">
							<img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
							<a href="rel_agendamento_periodo2.php">PRÓXIMO</a>
							<br>
							<h4 style="float: right; ">Formulário de Agendamento por Período</h4>
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

