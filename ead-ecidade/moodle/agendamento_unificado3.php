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
							<a href="e-Cidade-EAD--master/images/agendamento_unificado5.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_unificado5_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Após selecionar um horário, para a opção de <b>Agendar</b>, aparecerá uma tela suspensa para pesquisa de um paciente cadastrado, similar ao que é feito no Agendamento de Consultas. Realize a pesquisa do paciente para prosseguir com o agendamento.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_unificado6.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_unificado6_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Ao realizar esses passos para o agendamento, o sistema mostrará uma mensagem de confirmação do agendamento. Caso os dados preenchidos por você estejam corretos, clique em <b>OK</b>. Caso contrário, clique em <b>Cancel</b>, para editar o agendamento.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_unificado7.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_unificado7_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Confirmado o agendamento, será emitido um comprovante de agendamento, similar ao exemplo mostrado na imagem ao lado, o qual é possível ser salvo como arquivo no formato <b>PDF</b>.</p></div>
						</li><br>
					</ul>

                    

                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_unificado2.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Formulário de Agendamento Unificado</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="agendamento_unificado4.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Alocação do Paciente</h4>
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

