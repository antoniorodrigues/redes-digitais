var tela_expandida = false;
var menu_expandido = false;

var iframe = $('iframe#bodypage');
var menu = $('#MainMenu2', iframe.contents());

var body_page = $('#bodypage').height();


function expandeMenu(){
	var main = $('#region-main');
	var main_height = main.height();

	if ($('#demo3', iframe.contents()).attr('class') == "collapse in") { 
		if (!tela_expandida){
				console.log('in');
        		if ($('#region-main').height() <= 1200){
					main.css('height', (main_height + 300) + 'px');
					tela_expandida = true;
			}
		}
	} 
	else { 
        	if (tela_expandida){
				console.log('out');
	        
       			if (tela_expandida) { 
					main.css('height', (main_height - 300) + 'px'); 
					tela_expandida= false
				}	

			}

	}
}

function atualizaSubmenu() {

	if (menu.children().length == 0){
		iframe = $('iframe#bodypage');
		menu = $('#MainMenu2', iframe.contents());

		menu.hover(function() {
        	console.log('hover iframe');
		    $('iframe#bodypage').css('width',  '900px');
			$('iframe#bodypage').css('height',  '1020px');
		}); 
    

		menu.mouseleave(function() {
		    console.log('leave iframe');
		    $('iframe#bodypage').css('width',  '300px');
			$('iframe#bodypage').css('height',  '940px');
		});
	
	}

	expandeMenu();

	
}

setInterval(atualizaSubmenu, 10);
