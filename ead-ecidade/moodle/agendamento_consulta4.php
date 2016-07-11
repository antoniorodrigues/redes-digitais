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
							<a href="e-Cidade-EAD--master/images/agendamento_consulta6.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta6_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>O último passo é selecionar a data desejada para agendar o procedimento desejado. Para isso, basta clicar no botão D, no campo Agenda, e selecionar a data desejada.</p></div></li> 
						<br>
						<br>
						<hr align="center" width="40" size="2" color=gray><br>
						<br>
						<div style="margin-left: 60px;"><p>Feito isso, agora você visualizará uma lista de agendamentos, organizados pela grade de horário do dia selecionado. Clique nos dias mostrados no calendário, localizado na parte direita da tela, e visualize os agendamentos que estão marcados, no dia selecionado. Observe a legenda, que destaca dias onde o profissional de saúde estará Ausente, Liberado, Marcado ou Lotado.</p></div>
						<br>
						<hr align="center" width="40" size="2" color=gray>
						<br>
						<!-- ilustração -->
						<div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_consulta7.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta7_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
					
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Para realizar um agendamento, clique no link “L”, nas Opções, mostradas na tabela de Agendamento na Grade de Horário do Dia.</p></div></li> 
						<br>
						<br>
						<hr align="center" width="40" size="2" color=gray>
						<br>
						<div style="margin-left: 60px;"><p>Observação: A opção L quer dizer Lançar Conteúdo da linha, ou seja, alocar um paciente naquela linha correspondente ao horário que ele irá ocupar. As outras opções A, C e F (Anular conteúdo, Comprovante de Agendamento e Gerar FAA, respectivamente) serão tratadas mais a frente.</p></div>
					

					
				</ul>

                    

                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_consulta3.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Formulário de Agendamento de Consulta</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="agendamento_consulta5.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Selecionar Paciente</h4>
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

