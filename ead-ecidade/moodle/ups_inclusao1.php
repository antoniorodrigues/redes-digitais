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

                    <p>A tela de inclusão uma UPS requer uma série de dados que podem ser automaticamente preenchidos com uma simples pesquisa no sistema. Veja os passos a seguir para realizar a inclusão de uma UPS.</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-inclusao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-inclusao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>No campo <b>Unidade</b>, selecione o Departamento ao qual essa UPS será vinculada, por meio de uma pesquisa dos Departamentos existentes no sistema.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-inclusao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-inclusao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>A UPS terá um tipo, que pode também ser selecionado por meio de pesquisa no campo <b>Tipo Unidade</b>. Veja que há 25 pré-definições de tipos cadastrados. Aqui foi selecionado a título de exemplo o item <b>CENTRO DE APOIO A SAUDE DA FAMÍLIA</b>.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-ups-inclusao-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-ups-inclusao-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>A UPS terá também um estabelecimento, que pode também ser selecionado por meio de pesquisa no campo <b>Estabelecimento</b>, selecionando o <b>CGM</b> do mesmo ou ainda <b>CPF</b>, <b>CNPJ</b> ou <b>Razão Social</b>. Veja o exemplo de como selecionar na ilustração. Se houver apenas um cadastrado, como no caso, a pesquisa retornará para a tela de cadastro da UPS, preenchendo os dados automaticamente.</p></div></li>
                    </ul>

                    <p>Mais adiante você poderá completar os dados necessários para cadastrar uma nova UPS.</p>


                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="ups_acesso.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Acesso às configurações da UPS</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="ups_inclusao2.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Inclusão de uma UPS (cont.)</h4>
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

