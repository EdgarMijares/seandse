$(document).ready(main);

 
var contador = 1;
var alto;
 
function main(){
	$('.menu_bar').click(function(){
		console.log(contador);
		if(contador == 1){
			$('#menu').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('#menu').animate({
				left: '-100%'
			});
		}
	});
	center();

	$('.links').click(function(){
		contador = 0;
		$('.menu-bar').click();
	});

};

function center() {
	alto = ($(window).height()/2) - $('.logo').height()/2 - 60;
	console.log("El alto es de" + alto);
	$('.logo').css("top",alto);

	alto2 = ($(window).height()/2) - $('.formulario').height()/2 - 70;
	$('.formulario').css("top",alto2);

	ancho = ($(window).width()/2) - $('.g-recaptcha').width()/2  + 120;
	$('.g-recaptcha').css("margin-left",ancho)
}

function menuSup() {
	var altura = $('.menu').offset().top;
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});
}

