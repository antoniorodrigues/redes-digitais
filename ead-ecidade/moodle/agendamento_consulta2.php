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

						<p>A nova tela que surgiu é um formulário de agendamento de consulta, que você pode preencher a partir de pesquisas em cada campo, clicando em cada link. Veja os passos e as ilustrações a seguir:
						</p>
						<br>
                    <ul class="passos" >
                        <!-- ilustração -->
						<div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/agendamento_consulta2.png"> <!-- Imagem ampliada -->
							<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<div style="margin-left: 60px;"><h3 class="numeracao">1</h3><p> Certifique-se o campo <b>Unidade</b> está preenchido com uma unidade válida. Caso contrário, volte ao tópico de Introdução para ver como selecionar uma unidade válida para o agendamento de consulta.</p></li></div>
						<br>
						<br>
						<hr align="center"><br>
						<div style="margin-left: 60px;"><h3 class="numeracao">2</h3><p> O primeiro item a ser preenchido é a Especialidade. Clique no link <b>Especialidade</b> para que o sistema mostre uma nova tela, e assim você escolha o tipo de especialidade, pesquisando em uma lista. Basta apenas selecionar a especialidade desejada para voltar a tela anterior de agendamento ou clicar em Fechar.</p></li></div>
						<br>
						<hr align="center"><br>
						<!-- ilustração -->
							<div class="mtlsr-images-for-lightbox">
								<a href="e-Cidade-EAD--master/images/agendamento_consulta3.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/agendamento_consulta3_reduzido.png" alt=""> <!-- Imagem miniatura -->
								</a>          
							</div>
						<div style="margin-left: 60px;"><h3 class="numeracao">3</h3><p> O próximo item é o profissional de saúde. Clique no link <b>Profissional</b>, para que o sistema mostre uma nova tela, e assim você escolha o profissional associado a especialidade escolhida no item anterior. Basta apenas selecionar o profissional desejado para voltar a tela anterior de agendamento ou clicar em Fechar.</p></li></div>
						<br>
						<hr align="center"><br>
						<br>
						<div style="margin-left: 60px;"><p><b>Observação:</b> Note que se houver só um profissional associado a uma determinada especialidade, basta apenas clicar no link Especialidade e os dois campos serão preenchidos de uma só vez. Veja o exemplo da figura 7.</p></div>
		
                    </ul>

                    

                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="agendamento_consulta1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso ao Agendamento de Consulta</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="agendamento_consulta3.php">PRÓXIMO</a>
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

