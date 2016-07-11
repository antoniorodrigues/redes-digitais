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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Departamento</h5>

                <h2 class="subtitle"><b>DEPARTAMENTO</b></h2>

                <div class="text-content"> 

                    <p>No cadastro de um novo Departamento no software e-Cidade, além dos dados básicos, é necessário que haja dados referentes as subordinações deste Departamento, além de informações sobre responsável, contato e endereço. Veja como incluir essas informações nos passos a seguir.</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-dept-inclusao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-dept-inclusao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>A tela de cadastro surge com duas abas: <b>Departamento</b> e <b>Endereço</b>. Na aba <b>Departamento</b>, o código <b>Depart.</b> será preenchido automaticamente ao final do cadastro com um código único para sua identificação no sistema, não sendo necessário preenchê-lo agora. Preencha a <b>Descrição departamento</b> com o nome do novo Departamento e os campos em azul <b>Nome Responsável</b> e <b>Email Responsável</b> com os dados do responsável por esse novo Departamento.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-dept-inclusao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-dept-inclusao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Veja que o cadastro do novo Departamento já veio vinculado a <b>Instituição</b>, <b>Órgão</b> e <b>Unidades</b> cadastrados no sistema. Mude essas opções conforme a necessidade.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-dept-inclusao-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-dept-inclusao-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>No bloco <b>Contato</b>, preencha com as informações de contato do novo Departamento, como <b>E-mail</b>, <b>Telefone</b>, <b>Ramal</b> e <b>Fax</b>.</p></div></li>
                    </ul>

                    <p>Após concluir o preenchimento das informações necessárias, clique no botão <b>Incluir</b> para que o novo Departamento seja cadastrado no sistema. Note que o código <b>Depart.</b> é gerado automaticamente, e que novas opções para alteração surgem na tela. Veja como alterar alguns dados do novo Departamento no próximo item. 
                    </p>


                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="departamento_acesso.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso às configurações do Departamento</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="departamento_alteracao.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Alteração dos dados do Departamento</h4>
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

