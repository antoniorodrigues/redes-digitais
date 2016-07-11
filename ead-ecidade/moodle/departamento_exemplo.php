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
    <!-- <div class="search" style="float:right">
         
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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Departamento</h5>

                <h2 class="subtitle"><b>DEPARTAMENTO</b></h2>

                <div class="text-content"> 

                    <div class="mtlsr-images-for-lightbox">
                        <a href="e-Cidade-EAD--master/images/max-dept-exemplo.png"> <!-- Imagem ampliada -->
                            <img class="ilustration" src="e-Cidade-EAD--master/images/mini-dept-exemplo.png" alt="" title="Clique para ampliar"><!-- Imagem miniatura -->
                        </a>          
                    </div>

                    <p>Como falado, os departamentos gerenciam mais de perto os procedimentos e as operações feitas em uma determinada Área no software e-Cidade, e neste caso, na Área Saúde.</p>

                    <p>Acesse o módulo <b>Ambulatorial</b> da Área Saúde e veja como utilizar os departamentos para essa gerência. Na tela incial do módulo, conforme a figura a seguir, um departamento tem de ser selecionado para os procedimentos serem efetivados no sistema antes de qualquer operação.</p>

                    <p>Permaneça nesse módulo para prosseguir com cadastros de itens necessários no sistema, como Unidades de Postos de Saúde.</p>


                    <div class="row-fluid navegacao short" style="margin-top:280px;">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="departamento_liberacao.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Liberação de acesso do Departamento</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="ups_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso às configurações da UPS</h4>
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
