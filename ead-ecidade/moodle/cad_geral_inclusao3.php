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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Cadastro Geral do Município</h5>

                <h2 class="subtitle"><b>CADASTRO GERAL DO MUNICÍPIO</b></h2>

                <div class="text-content"> 

                    <p>Como última parte do Cadastro Geral do Município para pessoas físicas temos a inclusão da profissão do cadastrado, através do Classificação Brasileira de Ocupações (CBO). Por meio desta, o e-Cidade trás um código CBO único para cada profissão, que pode ser facilmente lançada no cadastro da pessoa física por meio de pesquisa.</p>

                    <p>Veja como realizar esse procedimento nos passos abaixo.</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cad-inclusao3-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cad-inclusao3-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px; "><p>Continuando o cadastro da pessoa física, clique no link <b>CBO</b> para especificar a profissão do novo cadastrado.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cad-inclusao3-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cad-inclusao3-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Uma parte da lista de mais de 11 mil itens é exibida. Você pode melhorar a visualização ajustando, na parte inferior, a <b>Quantidade a Listar</b>, digitando um número e depois teclando ENTER, ou simplesmente buscar pela <b>Descrição</b> ou pelo <b>Código sequencial</b>, se conhecido. </p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cad-inclusao3-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cad-inclusao3-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Selecionado o emprego do cadastrado, você pode incluir mais informações, nos campos em azul, que são opcionais. Ao final das alterações, clique em <b>Incluir</b> para cadastrar a nova pessoa física no sistema.</p></div></li>
                    </ul>

                    <p>Depois de cadastrado, ainda há duas abas nas quais você poderá fazer algumas alterações, como incluir Documentos e Fotos do recém-cadastrado ou de outro já existente. </p>

                    <div class="row-fluid navegacao" >


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cad_geral_inclusao2.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Cadastro de pessoas físicas (cont.)</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="cad_geral_alteracao.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Alteração do CGM da pessoa física</h4>
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

