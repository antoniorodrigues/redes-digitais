<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Relatório de Agendamento Anulado"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Relatório de Agendamento Anulado");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Relatório de Agendamento Anulado</h5>

                <h2 class="subtitle"><b>RELATÓRIO DE AGENDAMENTO ANULADO</b></h2>

                <div class="text-content"> 
					<p>Um agendamento pode ser anulado por ter sido cancelado pelo paciente ou pelo atendente, pelo paciente ter faltado, ou por outro motivo de força maior. Selecionando, portanto, uma dessas opções, junto a uma Unidade de Saúde e um período, pode-se gerar um relatório dos agendamentos anulados.</p>
					<br>
					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/rel_agend_anulado2.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/rel_agend_anulado2_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Configure o período, selecionando datas de início e fim no campo Período, clicando nos botões <b>D</b>, e selecionando uma data no calendário, similar ao que é feito na geração de Relatório de Agendamento anterior.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/rel_agend_anulado3.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/rel_agend_anulado3_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Em seguida, no campo <b>Unidades</b>, selecione uma das unidades que você deseja gerar o relatório e clique no botão em destaque na imagem abaixo.</p></div>
						</li><hr align="center" width="40" size="2" color=gray>
						<br>
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/rel_agend_anulado4.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/rel_agend_anulado4_reduzido.png" alt=""> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Por último, no campo <b>Situações</b> selecione a situação que causou anulação de agendamento, para incluir no relatório. Por último, clique em Relatório. A plataforma e-Cidade irá gerar um relatório, como o que é mostrado na imagem ao lado. Este relatório poderá ser salvo em formato PDF ou impresso, para futuras utilizações.</p></div>
						</li><br>
					</ul>
				
				
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="rel_agendamento_anulado1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Relatório de Agendamento Anulado</h4>
                        </div>
						
						<div class="proximo">
							<img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
							<a href="rel_controle_cotas1.php">PRÓXIMO</a>
							<br>
							<h4 style="float: right; ">Relatório de Controle de Cotas</h4>
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

