
<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Documentação - Áreas");
$PAGE->set_heading("Documentação - Áreas");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
$body = <<<EOT
<body>
    <style> div#top-info { display: none;} 
    /*div#page-content.row-fluid {height: 650px;}*/
    .content-curso {height:500px;/*float:right;*/margin-left:5px; width: 98
    /*position: absolute;z-index: 1;*/
	div#page-content.row-fluid { 
	max-width: 1370px;
	}
    }</style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
    <script src="e-Cidade-EAD--master/js/mtlsr-lightbox.js"></script>
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/style.css">
    <link rel="stylesheet" href="e-Cidade-EAD--master/css/mtlsr-lightbox.css" />

    <div>
        <h2 class="page-header">DOCUMENTAÇÃO - ÁREAS</h2>
        <div class="row-fluid">
           <div class="span4" style="height:450px;">
               <div style="position: absolute;z-index: 2;">
                <iframe id="bodypage" width="300px" height="900px" frameborder="0" src="menu.html"></iframe>
                </div>
           </div>
           
	<!--  <iframe style="margin-left: 0px;  border: 0;  position: absolute;  height: 600px ; width: 950px;" src="areas.html"></iframe> -->
           <div class="span8" style="min-height:100%; padding-bottom: 100px; margin-right: 30px;">

               <div class="content-curso">

                <h5>Documentação</h5>><h5 class="link"><h5 class="link">Áreas</h5>
<br>
<h2>ÁREAS</h2>
<br>
<iframe style="border: 0;  position: absolute;  height: 500px ; width: 60%; max-width: 950px;" src="areas.html"></iframe>






                </div> <!-- Fim do conteúdo - content-curso -->

            </div> <!-- Fim do conteúdo - span8 -->                

        </div> <!-- Fim do conteúdo - row-fluid -->                
        

        </div> 

    </div>


	<script src="js/script_documentacao.js"></script>
	<script> $('div#page-content.row-fluid').css('max-width', '1370px'); </script>
</body>
EOT;
echo $body;

echo $OUTPUT->footer();

