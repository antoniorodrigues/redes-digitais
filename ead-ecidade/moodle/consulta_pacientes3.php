<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Consulta da Agenda de Pacientes"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Consulta da Agenda de Pacientes");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Consulta da Agenda de Pacientes</h5>

                <h2 class="subtitle"><b>CONSULTA DA AGENDA DE PACIENTES</b></h2>

                <div class="text-content"> 
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/consulta_agenda4.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/consulta_agenda4_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Se você desejar restringir a consulta para um determinado período de tempo, digite ou selecione nos botões <b>D</b> as datas de início e fim da agenda que você deseja visualizar e clique no botão <b>Pesquisar</b>, conforme mostrado o exemplo na imagem ao lado.</p></div>
						</li><br>
						<hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/consulta_agenda5.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/consulta_agenda5_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Caso alguma informação tenha sido registrada na Agenda de Pacientes, será exibido uma lista com os registros de agendamento. Como o paciente selecionado ainda não possui nenhum registro na Agenda de Pacientes, nenhuma informação será mostrada, conforme o exemplo da imagem ao lado.</p></div>
						<br>
				</ul>
				
				
                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="consulta_pacientes2.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Formulário de Consulta de Pacientes</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="transferencia1.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Transferência</h4>
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

