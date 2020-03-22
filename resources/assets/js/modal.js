// Закрывает и открывает модольное окно.
$(document).on('click', '.modal-triger', function(e){
	e.stopPropagation();
	$('#modal').toggleClass('active');
	$('#modal .modal__wrapper').animate({ scrollTop: 0},1);
	console.log('gg');
	return false;
});