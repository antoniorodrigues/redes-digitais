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
   <!--  <div class="search" style="float:right">
         
        <button style="float:right;" class="bt_second_action bt_main">OK</button>

        <input style="height:40px; width:60%; float:right; border-radius: 5px;" placeholder="Pesquisa rápida..." type="text">

    </div> -->
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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Unidade de Posto de Saúde</h5>

                <h2 class="subtitle"><b>UNIDADE DE POSTO DE SAÚDE</b></h2>

                <div class="text-content"> 

                    <p>Uma Unidade de Posto de Saúde (UPS) é um dos elementos mais básicos na hierarquia municipal, onde realmente se efetuam os procedimentos e operações das quais você poderá automatizar a gerência com o software e-Cidade. Para ter acesso ao cadastro de uma nova UPS, dentro do módulo <b>Ambulatorial</b>, acesse o menu <b>Cadastros</b>, siga até a opção <b>UPS</b> e selecione <b>Inclusão UPS</b>.</p>

                    <div class="mtlsr-images-for-lightbox">
                        <a href="e-Cidade-EAD--master/images/max-ups-acesso.png"> <!-- Imagem ampliada -->
                            <img class="ilustration1" src="e-Cidade-EAD--master/images/mini-ups-acesso.png" alt="" title="Clique para ampliar"><br><br><!-- Imagem miniatura -->
                        </a>          
                    </div>  <!-- Fim do conteúdo - imagem ampliada -->


                    <div class="row-fluid navegacao short" style="margin-top:280px;">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="departamento_exemplo.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Exemplo de uso do Departamento</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="ups_inclusao1.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Inclusão de uma UPS</h4>
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

