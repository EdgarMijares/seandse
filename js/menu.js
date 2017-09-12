$(document).ready(main);
 
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
	alto = ($(window).height()/2) - $('.logo').height()/2;
	console.log("El alto es de" + alto);
	$('.logo').css("top",alto);
}