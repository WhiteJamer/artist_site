// Закрывает и открывает модольное окно.
$('body').on('click', '.modal-triger', function(e){
	e.preventDefault();
	$('#modal').toggleClass('active');
	$('#modal .modal__wrapper').animate({ scrollTop: 0},1);
});
