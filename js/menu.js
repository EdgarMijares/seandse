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
	alto = ($(window).height()/2) - $('.logo').height()/2;
	console.log("El alto es de" + alto);
	$('.logo').css("top",alto);

	alto2 = $(".banner").height() + 100
	console.log("El alto2 es de" + alto2);
	//$('#fullpage').css("top", alto2);
}

function fullpag() {
	$('#fullpage').fullpage({
		 sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
	});
}