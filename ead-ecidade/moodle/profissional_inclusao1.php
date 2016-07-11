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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Profissional de Saúde</h5>

                <h2 class="subtitle"><b>PROFISSIONAL DE SAÚDE</b></h2>

                <div class="text-content"> 

                    <p>Ao ser redirecionado, vários dados concernentes ao novo Profissional de Saúde podem ser inseridos no sistema. Veja quais deles são necessários nos passos a seguir.</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-prof-inclusao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-prof-inclusao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Observe a organização em abas. Na aba <strong>Dados Pessoais</strong>, praticamente todos os dados são preenchidos automaticamente, importando diretamente do Cadastro Geral do Município. O campo <strong>Profissional</strong>, na parte superior, corresponde a um código que é gerado automaticamente. Há ainda um campo opcional, <strong>CRM</strong>, caso o profissional seja médico e esteja devidadmente inscrito no Conselho Regional de Medicina. Para ter acesso as outras abas, é necessário incluir o novo profissional no sistema, clicando no botão <strong>Incluir</strong>.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-prof-inclusao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-prof-inclusao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Na aba <strong>Outros Dados</strong>, há uma série de dados opcionais que podem ser preenchidos, referentes a identificação e dados bancários, além de informações sobre a <strong>Carteira Nacional de Habilitação</strong>, que pode ser importada do <strong>CGM</strong>, caso tenha sido inserida no mesmo. Alterados os dados desejados, basta clicar em <strong>Incluir</strong> para adicioná-los junto ao novo profissional de saúde.</p></div></li>
                        <hr align="center" ><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-prof-inclusao-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-prof-inclusao-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Na aba <strong>Vínculo</strong>, informações sobre a <strong>Unidade</strong> onde o profissional trabalha, bem como a sua <strong>Especialidade</strong> e o <strong>Tipo de Vínculo</strong> podem ser adicionados por uma pesquisa nos itens pré-definidos cadastrados no sistema. Ainda podem ser inseridas nessa aba, junto com esse registro, informações sobre a <strong>Carga Horária Semanal</strong> e o <strong>Atendimento</strong>, nos blocos de mesmo nome, e todos esses registros são exibidos logo abaixo, em uma lista. Para inserir um registro com um Código único basta preencher todas essas informações e clicar em <strong>Incluir</strong>.</p></div></li>
                    </ul>

                    <p>No próximo item você verá o que pode ser cadastrado nas abas <strong>Horários</strong>, <strong>Ausências</strong> e <strong>Procedimentos</strong>, junto ao novo profissional de saúde. </p>

                    <div class="row-fluid navegacao" >


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="profissional_pesquisa.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Pesquisa por uma pessoa física</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="profissional_inclusao2.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Inclusão de um Prof. de Saúde (cont.)</h4>
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

