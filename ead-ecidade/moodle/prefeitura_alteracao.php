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

    </div>
   -->
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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Prefeitura</h5>

                <h2 class="subtitle"><b>PREFEITURA</b></h2>

                <div class="text-content"> 

                    <p>Selecionada a instituição <b>PREFEITURA DBSELLER</b>, siga os passos ilustrados e descritos abaixo para a alteração dos dados para a sua prefeitura, começando pelo bloco <b>Dados da Instituição</b>:</p><br><br>

                    <ul class="passos">
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-alteracao-prefeitura-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-alteracao-prefeitura-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p> O campo <b>Código</b> está destacado da cor amarela, isso porque ele é preenchido automaticamente. Porém você pode alterar os campos <b>Nome da Instituição</b>, <b>Nome abreviado da Instituição</b>, <b>Endereço da Instituição</b> e <b>Número do endereço</b>. Após realizar essas alterações, prossiga para o próximo passo.</p></div></li>
                        <hr><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-alteracao-prefeitura-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-alteracao-prefeitura-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Outros dados que podem ser alterados em sequência são: <b>Unidade Federativa da Instituição</b>, <b>Município da Instituição</b>, <b>CEP</b>, <b>Telefone</b> e <b>Fax</b> da Instituição. Após realizar essas alterações com dados válidos, prossiga para o próximo passo.</p></div></li>
                        <hr><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-alteracao-prefeitura-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-alteracao-prefeitura-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Observe que há dois campos intitulados <b>Cgc</b> e <b>Número do CGM</b>. Esses campos não precisam ser alterados, pois já contém valores ajustados para a correta utilização da referida Instituição no software e-Cidade. Porém você pode alterar os campos <b>URL</b> (endereço do site da Prefeitura), nomes do <b>Prefeito</b> e <b>Vice-prefeito</b>.</p></div></li>
                    </ul>

                    <p>Ainda há mais dados agrupados nos blocos <b>Dados da Instituição Financeiro</b> e <b>Dados da Instituição Tributário</b> que você fará a devida alteração posteriormente.</p>

                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="prefeitura_selecao.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Seleção da Instituição</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="prefeitura_alteracao2.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Alteração dos dados da Prefeitura (cont.)</h4>
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

