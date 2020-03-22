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
    </body>
</html>