<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Configurações Iniciais - Prefeitura"); //Modificar títulos da página
$PAGE->set_heading("Configurações Iniciais- Prefeitura");
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

    <h2>DOCUMENTAÇÃO CURSO - CONFIGURAÇÕES INICIAIS</h2>
    <hr>

    <div class="row-fluid">

        <div class="span4" style="height:450px;">
            <div style="position: absolute;z-index: 2;">
                <iframe id="bodypage" width="300px" height="900px" frameborder="0" src="menu.html"></iframe>
            </div>
        </div>
        <!-- <div class="span1" style="height:650px;"> -->
        </duv>
    
        <div class="span8">

            <div class="content-curso"> <!-- MODIFICAR CONTEÚDO AQUI -->

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Prefeitura</h5>

                <h2 class="subtitle"><b>PREFEITURA</b></h2>

                <div class="text-content"> 

                    <p>Após realizar o login no software e-Cidade, uma nova janela é carregada com o ambiente no qual você poderá usá-lo de fato. Na tela principal, vemos as instituições previamente criadas durante a instalação do software, que já estão estruturadas para o correto uso do mesmo na gestão municipal. Veja a seguir como navegar corretamente para realizar as configurações iniciais básicas:</p><br><br>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/cadastrar_ficha0.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/cadastrar_tipo_ficha_2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px; max-height: 70px;"><p>O software e-Cidade possibilita o cadastro de prefeituras e departamentos associados às prefeituras. O que nos interessa por enquanto é a instituição denominada <b>PREFEITURA DBSELLER</b>, destacada na cor amarela. Clique nesse item antes de prosseguir para o próximo passo.</p></div></li>
                        <hr><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/cadastrar_ficha0.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/cadastrar_tipo_ficha_2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Podemos visualizar as áreas do software e-Cidade. Clique na área de <b>Configuração</b>.</p></div></li>
                        <hr><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/cadastrar_ficha.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/cadastrar_tipo_ficha_3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Cada área contém vários módulos. A área de configuração contém apenas um módulo, o de <b>Configuração</b>. Clique neste item, como destacado na imagem ao lado.</p></div></li>
                    </ul>

                    <p>Vários procedimentos de configuração podem ser feitos nesse módulo, porém apenas alguns são essenciais. O primeiro deles é a alteração dos dados da instituição que está ativa, a <b>PREFEITURA DBSELLER</b>.</p>

                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cadastros.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Introdução</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="prefeitura_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso às configurações da Prefeitura</h4>
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
	 <script src="js/script_documentacao.js"></script>

</body>
EOT;
echo $body;

echo $OUTPUT->footer();

