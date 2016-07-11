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
					<p>A nova ficha contém um código e uma descrição a nova ficha que será criada. Você pode adicionar os dados necessários em uma tela semelhante a que é mostrada a seguir. </p>
					<br>
        
					<div class="mtlsr-images-for-lightbox">
						<a href="e-Cidade-EAD--master/images/cadastrar_ficha0.png"> <!-- Imagem ampliada -->
							<img class="ilustration1" src="e-Cidade-EAD--master/images/cadastrar_ficha_horizontal.png" alt="" title="Clique para ampliar"><br><br><!-- Imagem miniatura -->
						</a>          
					</div>

					<p>Para realizar esse cadastro, siga os passos ilustrados e descritos abaixo:</p><br><br>

					<ul class="passos">
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/cadastrar_ficha0.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/cadastrar_tipo_ficha_1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p> O campo <b>Código</b> está destacado da cor amarela, isso porque ele é preenchido automaticamente. Prossiga para o próximo passo.</p></div></li>
						</li><hr align="center" width="40" size="2" color=gray><br>
						<!-- ilustração -->
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/cadastrar_ficha0.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/cadastrar_tipo_ficha_2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Adicione uma descrição curta a nova ficha no campo <b>Descrição</b>.</p></div></li>
						</li><hr align="center" width="40" size="2" color=gray><br>
						<!-- ilustração -->
						<li><div class="mtlsr-images-for-lightbox">
							<a href="e-Cidade-EAD--master/images/cadastrar_ficha.png"> <!-- Imagem ampliada -->
								<img class="ilustration" src="e-Cidade-EAD--master/images/cadastrar_tipo_ficha_3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
							</a>          
						</div>
						<h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Após adicionar a descrição da ficha cadastrada, clique no botão <b>Incluir</b> para concretizar o procedimento, ou no botão <b>Pesquisar</b> para ver os tipos de ficha cadastrados no sistema.</p></div></li>
						</li></ul>

					<p>Uma mensagem de confirmação surgirá em sua tela. Veja que o valor do código também é informado. Clique em <b>OK</b> para concluir o procedimento.</p>


                    
                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cadastro_ficha1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso a Inclusão do Tipo de Ficha</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="cadastro_ficha3.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso a Alteração do Tipo de Ficha</h4>
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

