<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Agendamento de Consulta"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Agendamento de Consulta");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Agendamento de Consulta</h5>

                <h2 class="subtitle"><b>AGENDAMENTO DE CONSULTA</b></h2>

                <div class="text-content"> 

						
                    <ul class="passos">
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p> O próximo passo é selecionar o procedimento que será feito na data marcada neste agendamento, pelo profissional de saúde associado a especialidade escolhida. Clique no  link <b>Procedimento</b>, para que o sistema mostre uma nova tela, e assim você escolha o profissional associado a especialidade escolhida no item anterior. Basta apenas selecionar o procedimento desejado para voltar a tela anterior de agendamento ou clicar em <b>Fechar</b>.</p></li></div>
						<br>
						<br>
						<!-- ilustração -->
						<div class="mtlsr-images-for-lightbox" style="margin-left: 60px;">
							<a href="e-Cidade-EAD--master/images/agendamento_consulta4.png"> <!-- Imagem ampliada -->
								<img class="ilustration1" src="e-Cidade-EAD--master/images/agendamento_consulta4_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<hr align="center">
						<br>
						<div style="margin-left: 60px;"><p><b>Observação:</b> Você pode visualizar mais itens clicando no botão <b>Todos</b>, onde os mais de mil tipos de procedimentos serão exibidos nessa lista. 
						</p></div>
						<br>

				
					</ul>

                    
                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_consulta2.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Formulário de Agendamento de Consulta</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="agendamento_consulta4.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Lista de Agendamentos</h4>
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

