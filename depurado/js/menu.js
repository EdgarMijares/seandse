$(document).ready(main);
 
var contador = 1;
var alto;
 
function main(){
	
	$('.menu_bar').click(function(){
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

	if($(window).width() < 600){
		$('.links').click(function(){
			contador = 0;
			$('.menu_bar').click();
		});
	}
};

function center() {
	alto = ($(window).height()/2) - $('.logo').height()/2 - 20;
	$('.logo').css("top",alto);

	alto2 = ($(window).height()/2) - $('.formulario').height()/2 - 70;
	$('.formulario').css("top",alto2);
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

