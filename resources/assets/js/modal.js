$(document).ready(function(){
	$('.modal-triger').on('click', function(){
		$('#modal').toggleClass('active');
		$('#modal').animate({ scrollTop: 0},3000);
		console.log('gg');
		return false;
	});
	$('.modal-triger *').on('click', function(e){
		e.stopPropagation();
	});
});