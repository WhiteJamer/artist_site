$(document).ready(function(){
	$('.modal-triger').on('click', function(){
		$('#modal').toggleClass('active');
		console.log('gg');
	});
	$('.modal-triger *').on('click', function(e){
		e.stopPropagation();
	});
});