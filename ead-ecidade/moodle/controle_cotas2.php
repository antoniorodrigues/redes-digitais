<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Controle de Cotas"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Controle de Cotas");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Controle de Cotas</h5>

                <h2 class="subtitle"><b>CONTROLE DE COTAS</b></h2>

                <div class="text-content"> 
					<p>Na tela de Controle de Cotas, selecione os valores que serão mostrados nos campos, que especificam a <b>Prestadora</b>, no sistema. No campo <b>UPS</b>, selecione a UPS que você deseja realizar o controle de cotas, como também, deverá ser selecionado o mês o ano específico.</p>
					<p>Para lançar Controle de Cotas, é necessário escolher uma Prestadora de Serviço, no caso, uma Unidade de Posto de Saúde, e configurar o que é Ofertado e a Distribuição dessas Cotas. </p>
					<br>
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/controle_cotas2.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/controle_cotas2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>No campo <b>Prestadora</b>, configure as opções citadas, como no exemplo na imagem ao lado, selecionando uma <b>Unidade de Posto de Saúde (UPS)</b>, um Mês e um Ano, e clique em <b>Pesquisar</b>.</p></div>
						<br>
					</ul>
				
				
                    <div class="row-fluid navegacao short">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="controle_cotas1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Controle de Cotas</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="controle_cotas3.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Visualização de Cotas</h4>
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

