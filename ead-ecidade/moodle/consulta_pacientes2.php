<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Consulta da Agenda de Pacientes"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Consulta da Agenda de Pacientes");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Consulta da Agenda de Pacientes</h5>

                <h2 class="subtitle"><b>CONSULTA DA AGENDA DE PACIENTES</b></h2>

                <div class="text-content"> 
					<p>Surgirá uma tela para a consulta da agenda de pacientes, feita individualmente. Para realizar a pesquisa por um determinado paciente, você deverá informar o Cadastro Geral de Saúde. Veja os passos a seguir.</p>
					<br> 
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/consulta_agenda2.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/consulta_agenda2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Primeiro, pesquise um código de Cadastro Geral de Saúde, clicando no link <b>CGS</b>.Uma tela suspensa intitulada <b>Pesquisa Pacientes</b> aparecerá por sobre a tela. Nela você pode utilizar um ou mais filtros para agilizar sua pesquisa, como o código CGS único de cada paciente, se conhecido, ou um nome que se aproxime do nome do paciente procurado.</p></div>
						
						</li>
						<hr align="center">
						
						<br><li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/consulta_agenda3.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/consulta_agenda3_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>A imagem ao lado demonstra um exemplo de pesquisa, utilizando o nome como filtro. Neste caso, todos os pacientes com nomes contendo ‘JOSÉ MARIA’ seriam listados, ao clicar no botão <b>Pesquisar</b>. </p></div>
						<br>
						</li>
						<hr align="center">
						<br>
						<li>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Uma lista de pacientes contendo um ou mais pacientes será exibida. Basta apenas selecionar o paciente desejado para voltar a tela anterior de consulta de agenda ou clicar em <b>Fechar</b>.</p></div><br>
						<p>Após selecionado o paciente, o sistema retornará para a página de Agenda de Pacientes e mostrará os campos <b>CGS</b> e <b>Nome</b> atualizados, com o código do paciente e seu nome, respectivamente.</p>
						</li>
					</ul>
				
				
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="consulta_pacientes1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Consulta de Pacientes</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="consulta_pacientes3.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Registros de Agendamento</h4>
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

