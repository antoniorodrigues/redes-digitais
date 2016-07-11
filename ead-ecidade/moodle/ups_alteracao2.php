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

                <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Unidade de Posto de Saúde</h5>

                <h2 class="subtitle"><b>UNIDADE DE POSTO DE SAÚDE</b></h2>

                <div class="text-content"> 

                    <p>Como falado anteriormente, a nova UPS tem uma série de atributos opcionais que descrevem melhor como a Unidade funciona, explicitando suas ligações com outros órgãos necessários para o seu real funcionamento.</p>

                    <p>Nos passos abaixo, concluiremos a descrição desses atributos.</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-alteracao2-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-alteracao2-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Na aba <b>Serviços</b>, todo e qualquer serviço prestado pela UPS poderá ser inserido com um código único, aproveitando as definições deste tipo de item cadastradas no sistema, e com código gerado após sua inserção, com data de ativação e desativação. Todos os serviços incluídos são exibidos no bloco abaixo.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-alteracao2-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-alteracao2-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Por último, na aba <b>Paralisação</b>, dados sobre a inatividade na UPS podem ser discriminados para eventuais relatórios de contagens de faltas ou reposição de expediente, podendo ser descrito os <b>Motivos da Paralisação</b>. Todos inseridos com código único e exibidos logo abaixo na <b>Grade de Paralisações da UPS</b>.</p></div></li>
                    </ul>

                    <p>Até aqui, você viu como cadastrar as unidades mais básicas da área Saúde. Ainda há cadastros importantes, como o Geral do Município, que, apesar de ter sido falado anteriormente, faz necessário aprofundar para o cadastro pessoal, tendo em vista a inserção de Profissionais de Saúde e Pacientes no sistema.</p>

                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="ups_alteracao1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Alteração dos dados da UPS</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="cad_geral_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso ao Cadastro Geral do Município</h4>
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

