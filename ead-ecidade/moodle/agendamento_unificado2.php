<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Agendamento Unificado"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Agendamento Unificado");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Agendamento Unificado</h5>

                <h2 class="subtitle"><b>AGENDAMENTO UNIFICADO</b></h2>

                <div class="text-content"> 
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_unificado2.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_unificado2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Assim como no Agendamento de Consultas, selecione o <b>Profissional</b> e a <b>Especialidade</b>, para prosseguir com o agendamento. Clique nos links mostrados em cada campo de mesmo nome, para selecionar os dados necessários. Certifique-se também que há uma Unidade de Saúde válida selecionada para realizar o agendamento.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_unificado3.png"> <!-- Imagem ampliada -->
							<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_unificado3_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Feito isso, selecione agora a data de agendamento. No lado direito da tela, é mostrado um calendário, onde deverá ser selecionada uma data para o agendamento. Você pode fazer isso também clicando no botão <b>D</b> no campo <b>Agenda</b>.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
				
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_unificado4.png"> <!-- Imagem ampliada -->
							<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_unificado4_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Feito isso, selecione agora na Grade de Horário o horário que você deseja realizar o agendamento. Você pode selecionar a opção desejada no canto direito, por exemplo, <b>Agendar</b>, ou <b>Anular</b>, se já tiver paciente alocado no horário selecionado. Também podem ser feitas observações ou geração de comprovante ou de FAA’s nos agendamentos existentes na grade. </p></div>
						</li><br>
					</ul>

                    
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_unificado1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Agendamento Unificado</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="agendamento_unificado3.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Pesquisa de Pacientes</h4>
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

