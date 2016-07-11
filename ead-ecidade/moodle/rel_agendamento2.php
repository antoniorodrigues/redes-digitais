<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Relatório de Agendamento"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Relatório de Agendamento");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Relatório de Agendamento</h5>

                <h2 class="subtitle"><b>RELATÓRIO DE AGENDAMENTO</b></h2>

                <div class="text-content"> 
					<p>Para gerar esse tipo de relatório, é necessário selecionar o Profissional e sua Especialidade, para emitir o relatório correspondente.</p>
					<br> 
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/relat_agendamento2.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/relat_agendamento2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Clique em <b>Profissional</b> para buscar um profissional de saúde cadastrado no sistema, de forma similar ao feito no Agendamento.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/relat_agendamento3.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/relat_agendamento3_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Note que o campo <b>Especialidade</b> poderá ser preenchido automaticamente, ao selecionar um profissional de saúde. Caso contrário, realize também uma pesquisa clicando nesse campo, também de forma similar ao feito no Agendamento.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/relat_agendamento4.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/relat_agendamento4_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Feito isso, selecione uma data para emitir o relatório dos agendamentos. Para isso, clique no botão <b>D</b> para escolher uma data. Selecione essa data no calendário que aparecerá em seguida.</p></div>
						<br></li>
					</ul>
				
				

                    <div class="row-fluid navegacao">
                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="rel_agendamento1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Relatório de Agendamento</h4>
                        </div>
						
						
						<div class="proximo">
							<img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
							<a href="rel_agendamento3.php">PRÓXIMO</a>
							<br>
							<h4 style="float: right; ">Lista de Agendamentos Realizados</h4>
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

