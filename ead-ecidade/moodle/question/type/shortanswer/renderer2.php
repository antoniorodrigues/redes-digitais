<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Short answer question renderer class.
 *
 * @package    qtype
 * @subpackage shortanswer
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();


/**
 * Generates the output for short answer questions.
 *
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_shortanswer_renderer extends qtype_renderer {
    public function formulation_and_controls(question_attempt $qa,
            question_display_options $options) {

        $question = $qa->get_question();
        $currentanswer = $qa->get_last_qt_var('answer');

        $inputname = $qa->get_qt_field_name('answer');
        $inputattributes = array(
            'type' => 'text',
            'name' => $inputname,
            'value' => $currentanswer,
            'id' => $inputname,
            'size' => 80,
	    'style' => 'display:none',
            'spellcheck' => 'true',


        );

        if ($options->readonly) {
            $inputattributes['readonly'] = 'readonly';
        }

        $feedbackimg = '';
        if ($options->correctness) {
            $answer = $question->get_matching_answer(array('answer' => $currentanswer));
            if ($answer) {
                $fraction = $answer->fraction;
            } else {
                $fraction = 0;
            }
            $inputattributes['class'] = $this->feedback_class($fraction);
            $feedbackimg = $this->feedback_image($fraction);
        }

        $questiontext = $question->format_questiontext($qa);
        $placeholder = false;
        if (preg_match('/_____+/', $questiontext, $matches)) {
            $placeholder = $matches[0];
            $inputattributes['size'] = round(strlen($placeholder) * 1.1);
        }
        $input = html_writer::empty_tag('input', $inputattributes) . $feedbackimg;

        if ($placeholder) {
            $inputinplace = html_writer::tag('label', get_string('answer'),
                    array('for' => $inputattributes['id'], 'class' => 'accesshide'));
            $inputinplace .= $input;
            $questiontext = substr_replace($questiontext, $inputinplace,
                    strpos($questiontext, $placeholder), strlen($placeholder));
        }

        $result = html_writer::tag('div', $questiontext, array('class' => 'qtext'));

        if (!$placeholder) {
            $result .= html_writer::start_tag('div', array('class' => 'ablock'));
            $result .= html_writer::tag('label', get_string('answer', 'qtype_shortanswer',
                    html_writer::tag('span', $input, array('class' => 'answer'))),
                    array('for' => $inputattributes['id']));
            $result .= html_writer::end_tag('div');
        }

        if ($qa->get_state() == question_state::$invalid) {
            $result .= html_writer::nonempty_tag('div',
                    $question->get_validation_error(array('answer' => $currentanswer)),
                    array('class' => 'validationerror'));
        }


  $formatted = " <link href=\"../../jquery-spellchecker-demo-master/js/lib/redactor/redactor.css\" rel=\"stylesheet\" />
    <link href=\"../../jquery-spellchecker-demo-master/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../../jquery-spellchecker-demo-master/css/jquery.spellchecker.css\" rel=\"stylesheet\" />
    <link href=\"../../jquery-spellchecker-demo-master/css/demos.css\" rel=\"stylesheet\" />
   

<style>
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
 
.warning {margin: 10px 0px; padding:12px;}
.warning {color: #9F6000; background-color: #FEEFB3; font-weight:normal;}
.warning i, {margin:10px 22px; font-size:2em;vertical-align:middle;}
</style>

 
    <style type=\"text/css\">
    .redactor_toolbar li a.redactor_btn_spellchecker {
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLY/j//z8DJZiBKgY49drM9J3idhLEtu+xjvea4nLNqsVspnWr2S6QmF6+Zol2ltpq5QSlmcpxijMxDABp9pjkuMuu28rIpsMi3rLZFKzIus38mm6OuqRxpf41nC5w7rOJd+i1ngnUXGLTbj7Tsskk3rbL8ppZreEu7Ry1mWpJSvHK8Uoz0TWK5U/nYIg8y8rgPsl+l12P1WqgbTPdJtk/AtoWb1CkBdagnqyyWilawVM/Rw/FBQyx540ZGm/eYIg8P43BdYLdSZiEcYXeTJB/TaoNroH8q5OldVIhXE5SKUqhXSNRfZdKvPKVkOrED+L9d/8wN998w+B4XIL40I48K8FQf/O6+7In/7mbb35hsD2qjBKNDLU3ExjKb7pi1Rx61ke89+6fwBVP/jPXXn/HYHlYGiMdMJTe1JJc/PgHQ/X1xQyplznBYuFnmRiiz062nPfof8DSJ/8ZSq8/ZzA9KIEzIQE1Vvuuf/6fufv2M4bgsz4MxVdPui8Cal4C1Jx/+RGDPqpmTANiz7MAvXI+bO2L/5ZzHvzP2Pjif8DCx/8ZMi/fY9DcL0FUUmbwPKkg3Hr7T+WOV//95j/8z5B6/jaD6l4JkvIC0J9FTtPu/2dIPn+PQXG3BFmZiUFzbweDLH7NVMmNAOGld33BRiNUAAAAAElFTkSuQmCC) !important;
      background-repeat: no-repeat;
      background-position: center center;
    }
    </style>

    <script type=\"text/javascript\">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-1636725-34']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

      })();
    </script>


  

      
   

    <div class=\"container\" id=\"spellarea\" style=\"width: 100%;\">
 

      <div class=\"row-fluid\">
          

          <div class=\"tab-content\">

<div class=\"warning\"> <i class=\"fa fa-warning\"></i> (Cheque a grafia correta das palavras)</div>

            <div class=\"tab-pane active\" id=\"demo\">
          <textarea id=\"text-area\" class=\"textarea\" style=\"width:90%\" rows=\"10\">
           <p id='answer'> Suua Resposta </p>
          </textarea>
  </script> 



          </div>
          <div class=\"tab-pane\" id=\"usage\">

        <p>Include the neccessary files:</p>
        <pre class=\"prettyprint linenums\">
&lt;link rel=\"stylesheet\" href=\"redactor/redactor.css\" /&gt;
&lt;link rel=\"stylesheet\" href=\"jquery.spellchecker.css\" /&gt;

&lt;script src=\"../../jquery-spellchecker-demo-master/js/jquery-1.8.2.min.js\"&gt;&lt;/script&gt;
&lt;script src=\"../../jquery-spellchecker-demo-master/js/jquery.spellchecker.js\"&gt;&lt;/script&gt;
&lt;script src=\"../../redactor/redactor.min.js\"&gt;&lt;/script&gt;</pre>
 <p>Add the following CSS:</p>
        <pre class=\"prettyprint linenums lang-css\">
.redactor_toolbar li a.redactor_btn_spellchecker {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLY/j//z8DJZiBKgY49drM9J3idhLEtu+xjvea4nLNqsVspnWr2S6QmF6+Zol2ltpq5QSlmcpxijMxDABp9pjkuMuu28rIpsMi3rLZFKzIus38mm6OuqRxpf41nC5w7rOJd+i1ngnUXGLTbj7Tsskk3rbL8ppZreEu7Ry1mWpJSvHK8Uoz0TWK5U/nYIg8y8rgPsl+l12P1WqgbTPdJtk/AtoWb1CkBdagnqyyWilawVM/Rw/FBQyx540ZGm/eYIg8P43BdYLdSZiEcYXeTJB/TaoNroH8q5OldVIhXE5SKUqhXSNRfZdKvPKVkOrED+L9d/8wN998w+B4XIL40I48K8FQf/O6+7In/7mbb35hsD2qjBKNDLU3ExjKb7pi1Rx61ke89+6fwBVP/jPXXn/HYHlYGiMdMJTe1JJc/PgHQ/X1xQyplznBYuFnmRiiz062nPfof8DSJ/8ZSq8/ZzA9KIEzIQE1Vvuuf/6fufv2M4bgsz4MxVdPui8Cal4C1Jx/+RGDPqpmTANiz7MAvXI+bO2L/5ZzHvzP2Pjif8DCx/8ZMi/fY9DcL0FUUmbwPKkg3Hr7T+WOV//95j/8z5B6/jaD6l4JkvIC0J9FTtPu/2dIPn+PQXG3BFmZiUFzbweDLH7NVMmNAOGld33BRiNUAAAAAElFTkSuQmCC) !important;
  background-repeat: no-repeat;
  background-position: center center;
}</pre>
<p>Create the spellchecker plugin and init the Reactor editor:</p>

        <pre class=\"prettyprint linenums\">
</pre>
      </div></div></div>

    </div> <!-- /container -->

    <script src=\"../../jquery-spellchecker-demo-master/js/lib/jquery/jquery-1.8.2.min.js\"></script>
    <script src=\"../../jquery-spellchecker-demo-master/js/lib/redactor/redactor.min.js\"></script>
    <script src=\"../../jquery-spellchecker-demo-master/js/lib/bootstrap/bootstrap.min.js\"></script>
    <script src=\"../../jquery-spellchecker-demo-master/js/lib/prettyprint/prettyprint.js\"></script>
    <script src=\"../../jquery-spellchecker-demo-master/js/jquery.spellchecker.js\"></script>

    <script>
(function() {
   var update = function(){
        try{
         var answer = document.getElementById(\"answer\").innerHTML.trim();

//      document.getElementById(\"answer\").innerHTML = ' ' +answer;
//      answer = document.getElementById(\"answer\").innerHTML.trim();


var is_chrome = window.chrome;
console.log(is_chrome);
 
    if (typeof is_chrome != 'undefined'){
        //document.getElementById(\"answer\").innerHTML = \" - \";
document.getElementById(\"answer\").innerHTML = ' ' +answer;
answer = document.getElementById(\"answer\").innerHTML.trim();
        }

        var tmp = document.createElement(\"DIV\");
       tmp.innerHTML = answer;
         answer = tmp.textContent || tmp.innerText || \"\";

         document.getElementById(\"" . $inputname ."\").value = answer.trim();
         console.log( answer +\"- \"+answer.length );//document.getElementById(\"" . $inputname . "\").value);
        
        } catch (e) {}}

  if ( $('input[name=\"" . $inputname . "\"]').is('[readonly]') ) {
         document.getElementById(\"" . $inputname . "\").style.display = \"block\";
        //window.alert('ok');
         document.getElementById(\"spellarea\").style.display = \"none\";
    };



  if (typeof window.RedactorPlugins === 'undefined') window.RedactorPlugins = {};
   
  window.RedactorPlugins.spellchecker = {
    init: function() {
      
      this.addBtn('spellchecker', 'Checar grafia das palavras!', function(obj) {
       
        obj.toggle();
      });
    },
    create: function() {
        //window.alert(document.getElementById(\"text-area\").value);
      this.spellchecker = new $.SpellChecker(this.\$editor, {

        lang: 'pt-br',
        parser: 'html',
        webservice: {
          path: \"../webservices/php/SpellChecker.php\",
          driver: 'pspell'
        },
        suggestBox: {
          position: 'below'
        }
      });

    // var answer = document.getElementById(\"answer\").innerHTML;
        // document.getElementById(\"" . $inputname ."\").value = answer;
        // console.log( document.getElementById(\"" . $inputname . "\").value);
        update();

      // Bind spellchecker handler functions
      this.spellchecker.on('check.success', function() {
        alert('Sem erros de escrita!');
      });
    },
    toggle: function() {
      if (!this.spellchecker) {
        this.setBtnActive('spellchecker');
        this.create();
        this.spellchecker.check();
      } else {
        this.setBtnInactive('spellchecker');
        this.spellchecker.destroy();
        this.spellchecker = null;
      }
        //var answer = document.getElementById(\"answer\").innerHTML;
        //document.getElementById(\"" . $inputname ."\").value = answer;
        //console.log( document.getElementById(\"" . $inputname . "\").value);

        update();
        var classname = document.getElementsByClassName(\"words\");
        var myFunction = function() {
                setTimeout(function(){
        update();
        //var answer = document.getElementById(\"answer\").innerHTML;
        //document.getElementById(\"" . $inputname ."\").value = answer;
        //console.log( document.getElementById(\"" . $inputname . "\").value);
        }, 1000);
   
        };

    for(var i=0;i<classname.length;i++){
        classname[i].addEventListener('click',  myFunction, false);
    }

   }
  };
   

// Init redactor
  $('.textarea').redactor({ 
    plugins: ['spellchecker'],
    blurCallback: function(e)
    {
        //var answer = document.getElementById(\"answer\").innerHTML;
        //console.log(answer);
        //show();
        
 
         //document.getElementById(\"" . $inputname ."\").value = answer;
        
        //console.log( document.getElementById(\"" . $inputname . "\").value);
    },
    keyupCallback: function(x)
    {
        //var answer = document.getElementById(\"answer\").innerHTML;
        //console.log(answer);
        //show();
        
        update();
         //document.getElementById(\"" . $inputname ."\").value = answer;
        
        //console.log( document.getElementById(\"" . $inputname . "\").value);
        }

  });

})();


$('.redactor_btn_formatting').remove();
$('.redactor_separator').remove();
$('.redactor_btn_bold').remove();
$('.redactor_btn_italic').remove();
$('.redactor_btn_html').remove();
$('.redactor_btn_image').remove();
$('.redactor_btn_table').remove();
$('.redactor_btn_link').remove();
$('.redactor_btn_fontcolor').remove();
$('.redactor_btn_backcolor').remove();
$('.redactor_btn_alignment').remove();
$('.redactor_btn_horizontalrule').remove();
$('.redactor_btn_deleted').remove();
$('.redactor_btn_unorderedlist').remove();
$('.redactor_btn_video').remove();
$('.redactor_btn_orderedlist').remove();
$('.redactor_btn_outdent').remove();
$('.redactor_btn_indent').remove();
 




       
    </script>
  ";
        $result .= $formatted;


        return $result;
    }

    public function specific_feedback(question_attempt $qa) {
        $question = $qa->get_question();

        $answer = $question->get_matching_answer(array('answer' => $qa->get_last_qt_var('answer')));
        if (!$answer || !$answer->feedback) {
            return '';
        }

        return $question->format_text($answer->feedback, $answer->feedbackformat,
                $qa, 'question', 'answerfeedback', $answer->id);
    }

    public function correct_response(question_attempt $qa) {
        $question = $qa->get_question();

        $answer = $question->get_matching_answer($question->get_correct_response());
        if (!$answer) {
            return '';
        }

        return get_string('correctansweris', 'qtype_shortanswer',
                s($question->clean_response($answer->answer)));
    }
}
