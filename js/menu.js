$(document).ready(main);
$(document).ready(fullpag);
 
var contador = 1;
var alto;
 
function main(){
	$('.menu-bar').click(function(){
		if(contador == 1){
			$('.menu').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.menu').animate({
				left: '-100%'
			});
		}
	});
	center();
	
};

function center() {
	alto = ($(window).height()/2) - $('.logo').height()/2 - 70;
	console.log("El alto es de" + alto);
	$('.logo').css("top",alto);

	alto2 = ($(window).height()/2) - $('.formulario').height()/2 - 70;
	$('.formulario').css("top",alto2);

	ancho = ($(window).width()/2) - $('.g-recaptcha').width()/2  + 120;
	$('.g-recaptcha').css("margin-left",ancho)

	
}

function fullpag() {
	$('#fullpage').fullpage({
		 sectionsColor: ['#FFF', 'orange', '#C0C0C0', '#ADD8E6'],
		 paddingTop: '1.6em',
	});
}