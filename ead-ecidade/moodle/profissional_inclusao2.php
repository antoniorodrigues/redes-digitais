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

                    <p>Continuando com o cadastro de um novo Profissional de Saúde no software e-Cidade, veja os passos a seguir para a inserção de dados complementares.</p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-prof-inclusao2-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-prof-inclusao2-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3><div style="margin-left: 60px;"><p>Na aba <strong>Horários</strong>, você pode cadastrar, junto com o <strong>Vínculo</strong> (que já trará a Unidade que esse profissional trabalha), a grade de horário do profissional, com informações do <strong>Tipo de Grade</strong>, <strong>Tipo Ficha</strong>, e <strong>Periodicidade</strong>, além da quantidade de <strong>Fichas</strong> e <strong>Reservas</strong> para aquele período. Cada grade pode ser lançada no sistema após preencher esses dados e clicando no botão <strong>Lançar</strong>.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-prof-inclusao2-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-prof-inclusao2-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Na aba <strong>Ausências</strong>, de maneira semelhante ao lançamento de <strong>Horários</strong>, pode-se incluir no sistema, a partir do <strong>Vínculo</strong>, dados sobre a ausência do profissional em determinada <strong>Unidade</strong> e <strong>período</strong>, preenchendo os dados necessários e clicando em <strong>Inclusão</strong>, sendo exibidas todas as ausências cadastradas no bloco <strong>Ausências</strong>, logo abaixo.</p></div></li>
                        <hr align="center"><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-prof-inclusao2-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-prof-inclusao2-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Na aba <strong>Procedimentos</strong>, todos os procedimentos concernentes ao profissional podem ser cadastrados com base na pesquisa de um <strong>Vínculo</strong> cadastrado do mesmo e de um <strong>Procedimento</strong> pré-definido no sistema. Preenchidas essas informações, basta clicar em <strong>Incluir</strong> e o registro do procedimento será exibido na lista logo abaixo.</p></div></li>
                    </ul>

                    <p>Concluído o cadastro de um Profissional de Saúde, a última configuração inicial necessária é o cadastro de Pacientes no sistema, por meio do Cadastro Geral de Saúde (CGS), e que será útil para agendamento de consultas no sistema.</p>


                    <div class="row-fluid navegacao">

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="profissional_inclusao1.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">Inclusão de um Profissional de Saúde</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="paciente_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso às configurações do Paciente</h4>
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

