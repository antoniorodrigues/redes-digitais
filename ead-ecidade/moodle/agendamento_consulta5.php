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
							<a href="e-Cidade-EAD--master/images/agendamento_consulta8.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta8_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Após cumprir todos esses passos, você poderá preencher os dados do paciente que está agendando um procedimento, na nova janela suspensa que surgir. Para isso, clique no link CGS, para buscar esse paciente</p></div></li> 
						<br>
						<br>
						<hr align="center" width="40" size="2" color=gray><br>
						<!-- ilustração -->
							<div class="mtlsr-images-for-lightbox">
								<a href="e-Cidade-EAD--master/images/agendamento_consulta9.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta9_reduzido.png" alt=""> <!-- Imagem miniatura -->
								</a>          
							</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Com isso deverá surgir uma tela de pesquisa de paciente pelo Código do Cadastro Geral de Saúde. Para efetivar essa pesquisa de um paciente, digite algum dos dados que são necessários, como mostrado no exemplo da figura 11. De forma prática, o exemplo contém uma busca com filtragem pelo nome do paciente. Você pode utilizar o filtro mais conveniente. Após preencher um ou mais filtros, clique no botão Pesquisar.</p></div></li> 
						<br>
						<br>
						<hr align="center" width="40" size="2" color=gray><br>
						<br>
						<!-- ilustração -->
							<div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_consulta10.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta10_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Aparecerá então, uma lista de Pacientes, os quais o nome se assemelha ao que você está procurando. Selecione um paciente da lista para prosseguir clicando no campo nome do paciente desejado.</p></div></li> 
						<br>
			
		
					</ul>

                    
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_consulta4.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Selecionar data</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="agendamento_consulta6.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Confirmação do Agendamento</h4>
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

