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
					<p>O resultado dessa operação é a alocação do paciente escolhido na grade de horário, exibindo a hora inicial, o tipo de ficha, o Cadastro Geral de Saúde (CGS) e o nome do respectivo paciente para um determinado dia selecionado. </p></div>
					<br>
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_unificado8.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_unificado8_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Para os agendamentos já existentes, é possível fazer todas as outras operações possíveis nessa mesma tela, selecionando o agendamento feito e clicando em alguma das opções do lado direito, no campo <b>Opções</b>, como por exemplo, gerar novamente um comprovante de agendamento ou uma Ficha de Atendimento Ambulatorial.</p></div>
						<br>
					</ul>

                    
                    <div class="row-fluid navegacao short">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_unificado3.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Pesquisa de Pacientes</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="controle_cotas1.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Controle de Cotas</h4>
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

