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
   <!--  <div class="search" style="float:right">
         
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

                    <p>Confirmado o CNPJ da prefeitura em questão, o software e-Cidade disponibiliza uma tela de cadastro dos dados da pessoa jurídica da mesma. Siga os passos listados a seguir para preenchê-los corretamente. Neste manual, usou-se exemplos com dados fictícios. </p>

                    <ul class="passos" >
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cgm-alteracao-1.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cgm-alteracao-1.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">1</h3>
			<div style="margin-left: 60px;">
				<p>Os dados básicos da pessoa jurídica obrigatórios têm os campos da cor branca, e consistem no <b>Nome Completo</b> e na <b>Razão Social</b>, esta última preenchida automaticamente após ter sido preenchido o <b>Nome Completo</b>, e o <b>Tipo de Credor</b>. O campo <b>Numcgm</b> é preenchido automaticamente após a finalização do cadastro. Outros campos opcionais estão na cor azul, como o <b>Contato</b>, <b>Nome Fantasia</b> e a <b>Inscrição Estadual</b>. </p>
			</div></li>
                        <hr><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cgm-alteracao-2.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cgm-alteracao-2.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">2</h3><div style="margin-left: 60px;"><p>Os dados relacionados ao endereço estão dividos em dois blocos: <b>Endereço Principal</b> e <b>Endereço Secundário</b>. O primeiro é obrigatório, sendo necessário preencher os campos <b>Endereço</b> e <b>Bairro</b>. Veja que o <b>Município</b> já é preenchido automaticamente. O campo <b>Endereço</b> é preenchido através de uma pesquisa nos endereços cadastrados no sistema. Para isso, clique no link <b>Endereço</b> e selecione um endereço cadastrado no sistema, conforme a ilustração. </p></div></li>
                        <hr><br>
                        <!-- ilustração -->
                        <li><div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/max-cgm-alteracao-3.png"> <!-- Imagem ampliada -->
                                <img class="ilustration" src="e-Cidade-EAD--master/images/mini-cgm-alteracao-3.png" alt="" title="Clique para ampliar"> <!-- Imagem miniatura -->
                            </a>          
                        </div>
                        <h3 class="numeracao">3</h3><div style="margin-left: 60px;"><p>Para preencher o campo <b>Bairro</b>, clique no link <b>Bairro</b> e selecione um bairro cadastrado no sistema, conforme a ilustração.</p></div></li>
                    </ul>

                    <p>Você também pode preencher os campos em azul, que são opcionais. Após concluir as alterações, clique no botão <b>Incluir</b> ao fim da página e confirme o cadastro clicando em <b>OK</b> na mensagem que surgiu em sua tela. Lembre-se que esses dados podem ser alterados posteriormente, ou logo em seguida ao cadastro, com o correto preenchimento dos dados e através do botão <b>Alterar</b> que surgiu no fim da página.</p>

                    <div  class="row-fluid navegacao" >

                        <div class="previous">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_esquerda.png">
                            <a href="cgm_cnpj.php">ANTERIOR</a>
                            <br>
                            <h4 style="margin-left: 40px;">CGM - Pesquisa por CNPJ</h4>
                        </div>

                        <div class="proximo">
                            <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                            <a href="orgao_acesso.php">PRÓXIMO</a>
                            <br>
                            <h4 style="float: right; ">Acesso às configurações do Órgão</h4>
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

