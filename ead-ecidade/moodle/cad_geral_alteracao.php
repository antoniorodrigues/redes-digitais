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

                    <p>O software e-Cidade permite que o recém-cadastrado já possa ter seus dados alterados, nas abas Documentos e Fotos, inserindo documentos e dados adicionais na descrição de um novo cadastrado no Cadastro Geral do Município. Veja essas inserções nos passos a seguir:</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cad-alteracao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cad-alteracao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Na aba <b>Documentos</b>, junto ao código único (CGM) gerado do cadastrado em questão, pode ser lançados números dos documentos que vão desde a <b>Certidão de Nascimento</b> até inscrições em sindicatos e conselhos, através da seleção de um item no campo <b>Documento</b> e em seguida clicando em <b>Lançar</b>. Abaixo, aparecerá uma lista de todos os documentos lançados.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cad-alteracao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cad-alteracao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Na aba <b>Fotos</b> podem ser incluídas fotos do cadastrado, e modificadas para foto principal e/ou ativa no sistema, a título de acelerar a identificação do cadastrado em uma eventual consulta. Basta selecionar uma foto através do botão <b>Browse...</b> no campo <b>Arquivo da Foto</b>. Atente para o tamanho e para o formato informados na parte inferior da tela. Após incluir uma foto, basta clicar em <b>Salvar</b>. Abaixo, há uma lista de todas as fotos lançadas.</p></div></li>
                    </ul>

                    <p>Com esse cadastro completo, pessoas físicas podem ser associadas a administração de Estabelecimentos Hospitalares, ou ainda serem cadastradas como Pacientes e Profissionais de Saúde no sistema.</p>

                    <div class="row-fluid navegacao" >

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cad_geral_inclusao3.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Cadastro de pessoas físicas (cont.)</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="est_hospitalar_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso ao Estabelecimento Hospitalar</h4>
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

