<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/reset.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap&subset=cyrillic" rel="stylesheet">
    {{--VK Widgets API--}}
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>


</head>
<body>
<div class="navbar justify-content-center">
    <li><a href="/">Главная</a></li>
    <li><a href="/arts">Все работы</a></li>
</div>
<div class="wrapper">
    @yield('content')
    <footer class="mt-5 row justify-content-center">
        <span class="develop" style="margin-right: 0.3rem">develop by</span>
        <span><a href="http://github.com/WhiteJamer/">Whitejamer</a></span>
    </footer>
    {{-- Модальное окно --}}
    <div id="modal" class="modal__overlay">
        <div class="modal__wrapper">
            <div class="col-md">
                <div class="modal__header justify-content-end">
                    <div><i class="modal-triger">&#10006;</i></div>

                </div>
                <div class="modal__content col-md">
                    {{-- Тут должен быть контент модального окна --}}
                </div>
            </div>
        </div>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="/js/modal.js"></script>
    <script src="/js/gallery.js"></script>
    {{-- LOAD-MORE BTN --}}
    <script>
        var pageNumber = 2;
        $('.load-more-btn').on('click', function(e){
            e.preventDefault();
            loadMoreArts();
        });

        function loadMoreArts() {
            $.ajax({
                type : 'GET',
                url: "/arts/load-more?page=" + pageNumber,
                success : function(data){
                    pageNumber +=1;
                    if(data.length == 0){
                        $('.load-more-btn').remove();
                    }else{
                        $('#arts-list').append(data.html);
                    }
                },
                error: function(data){
                    alert('Ошибка ' + data);
                },
            });
        }

    </script>
</div>
</body>
</html>