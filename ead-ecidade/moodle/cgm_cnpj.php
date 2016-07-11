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
        .content-curso {height:650px;/*float:right;*/margin-left:5px; width: 98
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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Cadastro Geral do Município</h5>

                <h2 class="subtitle"><b>CADASTRO GERAL DO MUNICÍPIO</b></h2>

                <div class="text-content"> 

                    <div class="mtlsr-images-for-lightbox">
                        <a href="e-Cidade-EAD--master/images/max-cgm-cnpj.png"> <!-- Imagem ampliada -->
                            <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cgm-cnpj.png" alt="" title="Clique para ampliar"><!-- Imagem miniatura -->
                        </a>          
                    </div>

                    <p>Como falado anteriormente, o Cadastro Geral do Município abrange tanto pessoas físicas, com a inserção dos dados a partir do CPF único, quanto de pessoas jurídicas, com a inserção dos dados a partir do CNPJ, e o software e-Cidade entende a prefeitura cadastrada como uma pessoa jurídica. </p>

                    <p>Portanto, para os fins de atualização de dados da prefeitura que você cadastrou, comece o Cadastro Geral do Município a partir da inserção dos dados a partir do CNPJ. Para isso, insira um CNPJ válido no campo <b>CNPJ</b> e clique no botão <b>Confirma</b>. </p>

                    <div class="row-fluid navegacao short" style="margin-top: 250px;">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cgm_acesso.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso ao Cad. Geral do Município</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="cgm_alteracao.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Alteração ao Cad. Geral do Município</h4>
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

