<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Introdução"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Introdução");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Introdução</h5>

                <h2 class="subtitle"><b>INTRODUÇÃO</b></h2>

                <div class="text-content"> 
					<p>Depois de realizar todas as configurações básicas para o correto funcionamento do software e-Cidade, podemos prosseguir na sua utilização, dividida em áreas, uma das quais, a área de Saúde, será explorada com estes manuais, seguindo a mesma divisão utilizada no software, que é a de módulos.  </p><br> 

					<p>O primeiro módulo a ser visto na Área Saúde é o Módulo Agendamento. Nessa parte do software e-Cidade é feito o gerenciamento eficiente de qualquer tarefa desempenhada por profissionais de saúde, como consultas e exames efetuados nos postos de saúde, alocando datas e horários e delegando pessoas e recursos para a execução de uma dessas tarefas.</p><br>

					<p>Observe a tela inicial do módulo, acessível a partir da Área Saúde. Atente que, para o correto funcionamento dos serviços do módulo, é necessário na tela inicial selecionar o departamento no qual os serviços serão disponibilizados, clicando na caixa de itens do campo <b>Departamento</b>.</p><br>

					<div class="mtlsr-images-for-lightbox">
						<a href="e-Cidade-EAD--master/images/agendamento_inicio.png"> <!-- Imagem ampliada -->
							<img class="ilustration1" src="e-Cidade-EAD--master/images/agendamento_inicio_horizontal.png" alt="" title="Clique para ampliar"><br><br><!-- Imagem miniatura -->
						</a>          
					</div>
				
                    <div class="row-fluid navegacao">


                       
						<div class="proximo">
							<img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
							<a href="agendamento_consulta1.php">PRÓXIMO</a>
							<br>
							<h4 style="float: right; ">Agendamento de Consulta</h4>
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

