<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Módulo Agendamento - Cadastro do Tipo de Ficha"); //Modificar títulos da página
$PAGE->set_heading("Módulo Agendamento - Cadastro do Tipo de Ficha");
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

                <h5>Área de Saúde</h5>><h5 class="link">Módulo Agendamento</h5>><h5 class="link">Cadastro do Tipo de Ficha</h5>

                <h2 class="subtitle"><b>TIPO DE FICHA</b></h2>

                <div class="text-content"> 
					<p>Para realizar uma alteração de um tipo de ficha no e-Cidade, é necessário selecioná-lo em uma tela semelhante a da figura, que o sistema já disponibiliza como resultado de uma pesquisa de todas os tipos de ficha cadastrados no sistema.</p>
					<br>
                
					<div class="mtlsr-images-for-lightbox">
						<a href="e-Cidade-EAD--master/images/selecao_ficha_alteracao_amp.png"> <!-- Imagem ampliada -->
							<img class="ilustration1" src="e-Cidade-EAD--master/images/selecao_ficha_alteracao.png" alt="" title="Clique para ampliar"><br><br><!-- Imagem miniatura -->
						</a>          
					</div>

					<p>Veja que é possível filtrar os resultados pelo código do tipo de ficha cadastrado e configurar outras opções de exibição dessa lista. Para selecionar um tipo de ficha previamente cadastrada para alteração, é só clicar no item desejado e aguardar todos os dados serem exibidos na tela separadamente.</p><br>



                    
                    <div class="row-fluid navegacao short">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cadastro_ficha3.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso a Alteração do Tipo de Ficha</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="cadastro_ficha5.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Alteração do Tipo de Ficha</h4>
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

