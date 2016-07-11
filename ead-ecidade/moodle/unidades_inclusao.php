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
<!--    <div class="search" style="float:right">
         
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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Unidade</h5>

                <h2 class="subtitle"><b>UNIDADE</b></h2>

                <div class="text-content"> 

                    <p>O cadastro de uma nova Unidade no software e-Cidade vincula o Órgão ao qual esta será subordinada e a Instituição que administra o referido Órgão. Veja os passos para a inclusão de uma nova Unidade no sistema a seguir:</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-unidade-inclusao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-unidade-inclusao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>O campo <b>Órgão</b> corresponde a uma pesquisa no sistema pelos órgãos cadastrados. Selecionado o Órgão em uma nova tela (ou contendo apenas um no sistema, como no caso), o campo é preenchido automaticamente. O campo <b>Unidade</b> corresponde ao código da nova Unidade dentro do sistema, e pode ser preenchido sequencialmente com números. Como essa é a primeira deste exemplo, preencha com o número 1.</p></div></li>
                        <hr align="center" width="40" size="2" color=gray><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-unidade-inclusao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-unidade-inclusao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>O campo <b>Instituição</b> conterá a prefeitura ou a empresa a qual a nova Unidade pertence. Nesse caso, selecione a prefeitura em uso, conforme a figura.</p></div></li>
                        <hr align="center" width="40" size="2" color=gray><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-unidade-inclusao-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-unidade-inclusao-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>PEm seguida, preencha o campo <b>Código Tribunal</b> de forma sequencial, semelhante ao campo Unidade, e também o campo <b>Descrição Unidade</b>, com o nome da nova Unidade no sistema.</p></div></li>
                    </ul>

                    <p>Após preencher os campos mínimos necessários, clique em <b>Incluir</b>. A nova Unidade abrigará Departamentos, que serão vistos no próximo tópico. </p>

                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="unidade_acesso.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Introdução - Unidade</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="departamento_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso às configurações do Departamento</h4>
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

