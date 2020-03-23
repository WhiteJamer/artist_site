<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/reset.min.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/admin-panel.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&display=swap" rel="stylesheet">

</head>
    <body>
        <ul class="top-nav row justify-content-center">
            <li><a href="/">Главная</a></li>
            <li><a href="/admin/arts">Арты</a></li>
            <li><a href="#">Бан-лист</a></li>
            <li><a href="#">Статистика</a></li>
            <li><a href="#">Комментарии</a></li>
        </ul>
        @yield('content')
        <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
        <script src="/js/modal.js"></script>
        <script !src="">
            $('.delete-form').on('submit', function(e){
                if(!confirm($(this).attr('data-confirm')))
                e.preventDefault();
            })
        </script>
    </body>
</html>