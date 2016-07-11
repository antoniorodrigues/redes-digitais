<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Anular Agendamentos"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Anular Agendamentos");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Anular Agendamentos</h5>

                <h2 class="subtitle"><b>ANULAR AGENDAMENTOS</b></h2>

                <div class="text-content"> 
					<p>De forma semelhante ao agendamento e a transferência, deverá ser selecionado o <b>Profissional</b>, sua <b>Especialidade</b> e uma data para buscar o agendamento que você deseja. </p>
					<br>
					<ul class="passos">
					
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/anular_agendamentos2.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/anular_agendamentos2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Clique nos link’s <b>Profissional</b> e <b>Especialidade</b> para selecionar os dados necessários, de forma semelhante ao que foi feito anteriormente, buscando nos dados da plataforma e-Cidade os profissionais e as especialidades cadastradas. </p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
				
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/anular_agendamentos3.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/anular_agendamentos3_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Posteriormente, clique no botão <b>D</b>, uma caixa com um calendário é mostrada na tela, para que seja selecionada uma data para o qual você deseja anular algum agendamento. Atente para a legenda, conforme o exemplo da imagem ao lado.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
				
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/anular_agendamentos4.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/anular_agendamentos4_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Após realizar os passos descritos anteriormente, uma lista de Pacientes Agendados na data específicada são mostrados numa tabela, no espaço <b>Pacientes Agendados</b>. Selecione um agendamento marcando a caixinha, como o que é mostrado na imagem ao lado, e clique no botão <b>Anular</b>.</p></div>
						</li><br>
					</ul>

                    
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="anular_agendamentos1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Anular Agendamentos</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="anular_agendamentos3.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Motivo para Anular Agendamento</h4>
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

