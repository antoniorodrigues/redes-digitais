<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Transferência"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Transferência");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Transferência</h5>

                <h2 class="subtitle"><b>TRANSFERÊNCIA</b></h2>

                <div class="text-content"> 
					<p>Surgirá uma tela onde serão listados a grade de agendamento de origem e a de destino.</p>
					<br> 
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/transferencia2.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/transferencia2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Para realizar a Transferência de Agenda, selecione no lado esquerdo da tela, o <b>Profissional</b> e sua <b>Especialidade</b>. Clique nos links mostrados em cada nome, e selecione respectivamente, o Profissional e a sua Especialidade. O preenchimento dos campos se dará por uma pesquisa no sistema, como já feito em outros passos.</p></div>
						</li>
						<hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/transferencia3.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/transferencia3_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<li>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Os campos deverão estar preenchidos conforme exemplificado na imagem ao lado. Agora, você deverá selecionar a data da agenda que você queira realizar a transferência. Selecione uma data, clicando no botão <b>“D”</b> mostrado na tela, para prosseguir.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/transferencia4.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/transferencia4_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Feito isso, os horários de agendamento dessa data, serão mostrados. Agora, no lado direito da tela, selecione respectivamente o <b>Profissional</b>, a <b>Especialidade</b> e uma data para realizar a transferência de forma similar ao que foi selecionado no lado esquerdo.</p></div>
						<br>
					</ul>
				
				
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="transferencia1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Transferência da Agenda</h4>
                        </div>
						
						<div class="proximo">
							<img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
							<a href="transferencia3.php">PRÓXIMO</a>
							<br>
							<h4 style="float: right; ">Seleção de Horários</h4>
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

