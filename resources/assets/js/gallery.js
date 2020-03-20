
$('.art-detail-triger').on('click', function (e) {
    var artId = $(this).attr('data-id')
    var imageUrl = $(this).attr('src');
    var imageTitle = $(this).attr('alt');
    var imageDescription = $(this).attr('data-description');
    e.stopPropagation();
    $('.modal__title').html('<h5>Галерея изображений</h5>');
    $('.modal__content').html(`
        <div class="row justify-content-center">
            <a href="/arts/${artId}">
                <img id="img-img" src="${imageUrl}" alt="${imageTitle}">
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="mt-5">${imageTitle}</h1>
                <p>${imageDescription}</p>
            </div>
        </div>
        `);

})