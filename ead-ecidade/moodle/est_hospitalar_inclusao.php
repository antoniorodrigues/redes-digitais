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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Estabelecimento Hospitalar</h5>

                <h2 class="subtitle"><b>ESTABELECIMENTO HOSPITALAR</b></h2>

                <div class="text-content"> 

                    <p>Confirmado o CNPJ do novo Estabelecimento Hospitalar a ser cadastrado, o software e-Cidade disponibiliza uma tela de cadastro dos dados da pessoa jurídica da mesma. Siga os passos listados a seguir para preenchê-los corretamente. Neste manual, usou-se exemplos com dados fictícios.</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-est-inclusao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-est-inclusao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Os dados básicos da pessoa jurídica obrigatórios têm os campos da cor branca, e consistem na <strong>Razão Social</strong> e no <strong>Nome Completo</strong>, esta última preenchida automaticamente após ter sido preenchido a Razão Social. O campo <strong>Numcgm</strong> é preenchido automaticamente após a finalização do cadastro. Outros campos opcionais estão na cor azul, como o <strong>Contato</strong>, <strong>Nome Fantasia</strong> e a <strong>Inscrição Estadual</strong>.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-est-inclusao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-est-inclusao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>O campo <strong>Tipo Empresa</strong> fornece uma lista de pré-definições sobre o tipo de pessoa jurídica que está sendo cadastrada. Selecione o tipo adequado para o novo Estabelecimento Hospitalar.</p></div></li>
                        <hr align="center" ><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-est-inclusao-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-est-inclusao-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>O campo <strong>Endereço Primário</strong> é preenchido através de uma pesquisa nos endereços cadastrados no sistema. Para isso, clique no link <strong>Endereço</strong> e selecione um endereço cadastrado no sistema, semelhante a ilustração e a outros cadastros anteriores.</p></div></li>
                    </ul>

                    <p>Você também pode preencher os campos em azul, que são opcionais. Após concluir as alterações, clique no botão <strong>Incluir</strong> ao fim da página e confirme o cadastro clicando em <strong>OK</strong> na mensagem que surgiu em sua tela. Lembre-se que esses dados podem ser alterados posteriormente, ou logo em seguida ao cadastro, com o correto preenchimento dos dados e através do botão <strong>Alterar</strong> que surgiu no fim da página e nas abas <strong>Documentos</strong> e <strong>Fotos</strong>, assim como no cadastro de pessoas físicas. </p>

                    <div class="row-fluid navegacao" >

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="est_hospitalar_acesso.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso ao Estabelecimento Hospitalar</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="profissional_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso ao Profissional de Saúde</h4>
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

