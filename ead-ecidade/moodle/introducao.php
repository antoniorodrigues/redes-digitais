
<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Canfigurações Iniciais - Prefeitura");
$PAGE->set_heading("Canfigurações Iniciais- Prefeitura");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
$body = <<<EOT
<body>
    <style> div#top-info { display: none;} 
    /*div#page-content.row-fluid {height: 650px;}*/
    .content-curso {height:500px;/*float:right;*/margin-left:5px; width: 98
    /*position: absolute;z-index: 1;*/
    }</style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
    <script src="e-Cidade-EAD--master/js/mtlsr-lightbox.js"></script>
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/style.css">
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/mtlsr-lightbox.css" />

    <div>
        <h2 class="page-header">DOCUMENTAÇÃO CURSO - CONFIGURAÇÕES INICIAIS</h2>
        <div class="row-fluid">
           <div class="span4" style="height:450px;">
               <div style="position: absolute;z-index: 2;">
                <iframe id="bodypage" frameborder="0" src="menu.html"></iframe>
                </div>
           </div>
           

           <div class="span8" style="min-height:100%; padding-bottom: 100px; margin-right: 15px;">

               <div class="content-curso">

               <h5>Documentação</h5>><h5 class="link"><h5 class="link">Introdução</h5>

                <h2 class="subtitle"><b>INTRODUÇÃO</b></h2>

                    <div class="text-content"> 

			<p>Texto...</p>


                        <div class="mtlsr-images-for-lightbox">
                            <a href="e-Cidade-EAD--master/images/login_amp.png"> <!-- Imagem ampliada -->
                                <img class="ilustration1" src="e-Cidade-EAD--master/images/login_horizontal.png" alt="" title="Clique para ampliar"><br><br><!-- Imagem miniatura -->
                            </a>          
                        </div>  <!-- Fim do conteúdo - imagem ampliada -->

                    </div> <!-- Fim do conteúdo - text-content -->

                </div> <!-- Fim do conteúdo - content-curso -->

            </div> <!-- Fim do conteúdo - span8 -->                

        </div> <!-- Fim do conteúdo - row-fluid -->                
        
       <!--  <div class="row-fluid navegacao" style="margin-left: -80px;">

            <div class="proximo">
                <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                <a href="acesso_areas.php">PRÓXIMO</a>
                <br>
                <h4 style="float: right; ">Acesso às áreas do software</h4>
            </div>

        </div> -->

    </div>

    <!-- Imagem ampliada-->
    <div class="mtlsr-lightbox">
        <a href="#" class="close">&#9421;</a>
    </div>

	<script src="js/script_documentacao.js"></script>

</body>
EOT;
echo $body;

echo $OUTPUT->footer();

