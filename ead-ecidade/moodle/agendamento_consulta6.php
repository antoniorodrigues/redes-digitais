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
						<!-- ilustração -->
							<div class="mtlsr-images-for-lightbox">
								<a href="e-Cidade-EAD--master/images/agendamento_consulta11.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta11_reduzido.png" alt=""> <!-- Imagem miniatura -->
								</a>          
							</div>
			
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Uma mensagem de confirmação aparecerá em sua tela. Clique em OK, caso o nome selecionado, é o de sua preferência. Caso contrário, clique em Cancel para voltar a pesquisa. Observe que o código CGS aparece ao lado do nome do paciente desejado, caso seja útil</p></div></li> 
						<br>
						<br>
						<hr align="center" width="40" size="2" color=gray><br>
						<br>
			
			
						<div style="margin-left: 60px;"><p>Feito isso, o processo de agendamento estará concluído e o sistema irá gerar automaticamente, um comprovante de agendamento. Veja que todas as informações preenchidas nos passos anteriores estarão descritas nesse comprovante.</p></div></li> 
						<br>
						<hr align="center" width="40" size="2" color=gray><br>
			
			
						<div style="margin-left: 60px;"><p><b>Observação:</b> Observe também que, após que o agendamento é realizado, a Grade de Horário do Dia é alterada, contendo agora, o agendamento cadastrado. A opção C, para gerar o comprovante de agendamento, e a opção F, para gerar a ficha de atendimento ambulatorial, poderão ser utilizadas e serão detalhadas nas próximas seções.</p></div></li> 
						<br>
			
		
					</ul>

                    
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_consulta5.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Selecionar Paciente</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="consulta_pacientes1.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Consulta da Agenda de Pacientes</h4>
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

