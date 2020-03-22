<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/reset.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/snippets.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap&subset=cyrillic" rel="stylesheet">
    {{--VK Widgets API--}}
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>


</head>
<body>
<div class="wrapper">
    <div class="navbar-fixed">
        <div class="container">
            <li><a href="/">Главная</a></li>
            <li><a href="#arts">Работы</a></li>
            <li><a href="#feedback">Контакты</a></li>
        </div>
    </div>
    @yield('content')
    <footer class="mt-5 row justify-content-center">
        <span class="develop" style="margin-right: 0.3rem">develop by</span>
        <span><a href="http://github.com/WhiteJamer/">Whitejamer</a></span>
    </footer>
    {{-- Модальное окно --}}
    <div id="modal" class="modal__overlay modal-triger">
        <div class="modal__wrapper">
            <div class="col-md">
                <div class="modal__header">
                    <div class="modal__title"><h5>Галерея изображений</h5></div>
                    <div><i class="modal-triger">&#10006;</i></div>

                </div>
                <div class="modal__content col-md">
                    {{-- Тут должен быть контент модального окна --}}
                </div>
                <section class="comment-section row">
                    <div class="col-md">
                        <div class="comment-item row">
                            <div class="col-md">
                                <div class="row">
                                    <span class="ml-3"><b>Username</b></span>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">

                                        <img class="comment__img" src="/images/avatar-1.png" alt="avatar">
                                    </div>

                                    <div class="col-md">
                                        <div class="comment__text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed qui voluptatem quam, ipsum repellendus. Iste porro, facere sunt ipsa quia hic. Iure at omnis quos molestiae esse natus, eveniet, sit quisquam provident facere eum quo velit? Laborum, eius porro! Commodi beatae, est tenetur labore incidunt reiciendis! Tenetur repellat, vitae exercitationem.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment-item row">
                            <div class="col-md">
                                <div class="row">
                                    <span class="ml-3"><b>Username</b></span>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">

                                        <img class="comment__img" src="/images/avatar-1.png" alt="avatar">
                                    </div>

                                    <div class="col-md">
                                        <div class="comment__text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed qui voluptatem quam, ipsum repellendus. Iste porro, facere sunt ipsa quia hic. Iure at omnis quos molestiae esse natus, eveniet, sit quisquam provident facere eum quo velit? Laborum, eius porro! Commodi beatae, est tenetur labore incidunt reiciendis! Tenetur repellat, vitae exercitationem.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment-item row">
                            <div class="col-md">
                                <div class="row">
                                    <span class="ml-3"><b>Username</b></span>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">

                                        <img class="comment__img" src="/images/avatar-1.png" alt="avatar">
                                    </div>

                                    <div class="col-md">
                                        <div class="comment__text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed qui voluptatem quam, ipsum repellendus. Iste porro, facere sunt ipsa quia hic. Iure at omnis quos molestiae esse natus, eveniet, sit quisquam provident facere eum quo velit? Laborum, eius porro! Commodi beatae, est tenetur labore incidunt reiciendis! Tenetur repellat, vitae exercitationem.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment-item row">
                            <div class="col-md">
                                <div class="row">
                                    <span class="ml-3"><b>Username</b></span>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">

                                        <img class="comment__img" src="/images/avatar-1.png" alt="avatar">
                                    </div>

                                    <div class="col-md">
                                        <div class="comment__text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed qui voluptatem quam, ipsum repellendus. Iste porro, facere sunt ipsa quia hic. Iure at omnis quos molestiae esse natus, eveniet, sit quisquam provident facere eum quo velit? Laborum, eius porro! Commodi beatae, est tenetur labore incidunt reiciendis! Tenetur repellat, vitae exercitationem.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <form action="" class="form-group feedback_form">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Оставьте комментарий" class="form-control"></textarea>
                            <button class="btn btn-send">Оставить комментарий</button>
                        </form>
                    </div>
                </section>
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
    <script>

    </script>
</div>
</body>
</html>