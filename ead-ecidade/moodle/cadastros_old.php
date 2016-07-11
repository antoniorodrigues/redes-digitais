<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('standard');
$PAGE->set_title("About page");
$PAGE->set_heading("About");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
$body = <<<EOT
<body>
<style> div#top-info { display: none;} div#page-content.row-fluid {height: 650px;}
.content-curso {height:500px;float:right;margin-left:5px; width: 56%;position: absolute;z-index: 1;
}</style>

    <link rel="stylesheet" href="e-Cidade-EAD--master/css/style.css">

<h2>DOCUMENTAÇÃO CURSO - CADASTROS INICIAIS</h2>
<hr>
<div class="row-fluid">
	<div class="span4" style="height:650px;">
	<div style="position: absolute;z-index: 2;">
                 <iframe id="bodypage" width="600px" height="800px" frameborder="0" src="menu.html"></iframe>
        </div>
	</div>
	<!-- <div class="span1" style="height:650px;"> -->
	</duv>
	<div class="span8">
	<div class="content-curso">
	<!--	<h2>CONTENT</h2>
		<br>
		<h4>CONTENT</h4>-->


            <h5>Área de Saúde</h5>><h5 class="link">Configurações Iniciais</h5>><h5 class="link">Introdução</h5>

            <h2 class="subtitle"><b>INTRODUÇÃO</b></h2>

            <div class="text-content"> 

                <img class="ilustration" src="e-Cidade-EAD--master/images/logo.png" alt="">                  

                <p>Para que a gestão municipal seja feita de forma eficaz, o software e-Cidade precisa de obter dados iniciais sobre o município e sobre os órgãos e departamentos relacionados as áreas que serão geridas. Para tanto, faz-se necessário realizar algumas Configurações Iniciais de modo a tornar a gestão eletrônica o mais próximo da realidade, pelo uso do software. </p><br> 

                <p>Esse módulo foi criado especialmente para esse curso, nele reunimos as configurações básicas, como <b>permissões para os usuários</b> e <b>procedimentos de configuração</b> necessários para a correta utilização do software, especificamente para a área de Saúde, como, por exemplo, cadastros iniciais. A seguir, explicamos com detalhes como realizá-los, começando pelos procedimentos de configuração.</p><br>

                <p>Ao realizar essas configurações, você irá navegar por algumas áreas do software e-Cidade, como <b>Configuração</b> e <b>Financeiro</b>, para inserir dados sobre a prefeitura e seus departamentos, órgãos e autarquias.</p><br>
                
                    
           

        <div >

            <div class="proximo">
                <img class="seta" src="e-Cidade-EAD--master/assets/ic_seta_direita.png">
                <a href="prefeitura.html">PRÓXIMO</a>
                <br>
                <h4 style="float: right; ">Configurações Iniciais - Prefeitura</h4>
            </div>
        </div>
</div>

        </div> <!-- Fim do conteúdo - texto -->

      <!--  <div>
            
            <div class="proximo">
                <img class="seta" src="../assets/ic_seta_direita.png">
                <a href="prefeitura.html">PRÓXIMO</a>
                <br>
                <h4 style="float: right; ">Configurações Iniciais - Prefeitura</h4>
            </div>
        </div> -->
	</div>


</div>
   <section class="bottom">
        <nav class="principal">
            <article class="logo-moodle">
                <div><h4 style="margin-bottom: 10px">Desenvolvido em:</h4></div>
                <img class="logo" src="e-Cidade-EAD--master/assets/logo_moodle.png" title="Logo Moodle">
            </article>
            <article class="logos-silibrina">
                <div><h4 style="margin-bottom: 10px">Financiado e Desenvolvido por:</h4></div>
                <img id="logo" src="e-Cidade-EAD--master/assets/logo_brasil.png" title="Logo Brasil">
                <img id="logo" src="e-Cidade-EAD--master/assets/logo_fapesq.png" title="Logo FAPESQ-PB">
                <img id="logo" src="e-Cidade-EAD--master/assets/logo_silibrina.png" title="Logo Silibrina Tecnologia">
            </article>
        </nav>
    </section> <!-- fim do rodapé-->


</body>
EOT;
echo $body;

echo $OUTPUT->footer();

