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

                    <p>Depois de inserida no sistema, uma Unidade de Posto de Saúde (UPS) tem uma série de atributos opcionais que podem ser preenchidos, a fim de fornecer uma completa descrição, preparando para eventuais consultas e impressões de documentos da mesma. </p>

                    <p>Veja quais esses atributos na lista de passos a seguir:</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-alteracao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-alteracao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Na aba <b>Caracterização</b>, como destacado na imagem, o software e-Cidade disponibiliza uma série de características acerca da nova UPS, que podem ser inseridas por meio de busca nos itens cadastrados de cada uma no sistema, dentre elas: <b>Esfera Administrativa</b>, <b>Atividade de Ensino</b>, <b>Nível de Hierarquia</b>, <b>Turno de Atendimento</b>, <b>Natureza Organização</b>, <b>Retenção de Tributos</b>, <b>Fluxo de Clientela</b>. Ainda há um bloco denominado <b>Nível de Atenção</b>, no qual você pode inserir o tipo de programa de assistência à população prestado na UPS em questão.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-alteracao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-alteracao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Na aba <b>Convênios/Vigilância</b>, temos dois blocos. No primeiro, intitulado <b>Vínculo com o SUS</b>, informações opcionais sobre a ligação da nova UPS com o Sistema Único de Saúde, como <b>Contrato/Convênio Municipal</b> e <b>Estadual</b>, informações bancárias e um código referente a cada vínculo incluído, gerado automaticamente ao clicar no botão <b>Incluir</b>.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-alteracao-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-alteracao-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Ainda nessa mesma aba pode ser visto o bloco <b>Vigilância Sanitária</b>, informações opcionais sobre o alvará de funcionamento podem ser inseridas junto a nova UPS.</p></div></li>
                    </ul>

                    <p>Você continuará vendo mais atributos das abas <b>Serviços</b> e <b>Paralisação</b> no próximo item.</p>

                    <div class="row-fluid navegacao">


                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="ups_inclusao2.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Inclusão de uma UPS (cont.)</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="ups_alteracao2.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Alteração dos dados de uma UPS (cont.)</h4>
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

