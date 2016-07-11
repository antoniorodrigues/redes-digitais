<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("Curso - Agendamento");
$PAGE->set_heading("Agendamento");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
$body = <<<EOT
<body>
<style> div#top-info { display: none;} div#page-content.row-fluid {height: 650px;}
.content-curso {height:500px;float:right;margin-left:5px; position: absolute;z-index: 1;
}</style>

<h2>DOCUMENTAÇÃO CURSO - AGENDAMENTO<h2>
<hr>
<div class="row-fluid">
	<div class="span4 desktop-first-column block-region" style="height:650px;">
	<div style="position: absolute;z-index: 2;">
                 <iframe id="bodypage" width="600px" height="800px" frameborder="0" src="menu.html"></iframe>
        </div>
	</div>

	<div class="span8 pull-right">
	<div class="content-curso">
		<h2>CONTENT</h2>
		<br>
		<h4>CONTENT</h4>
	</div></div>

</div>
</body>
EOT;
echo $body;

echo $OUTPUT->footer();

