<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/reset.min.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/css/admin-panel.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&display=swap" rel="stylesheet">

</head>
<body>
<ul class="top-nav row justify-content-center">
    <li><a href="/">Главная</a></li>
    <li><a href="#">Арты</a></li>
    <li><a href="#">Бан-лист</a></li>
    <li><a href="#">Статистика</a></li>
    <li><a href="#">Комментарии</a></li>
</ul>
<div class="container-fluid">
    <div class="row justify-content-center mt-3 p-3">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Арт</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($arts as $art)
            <tr>
                <th scope="row">1</th>
                <td>
                    <div class="image-item">
                        <a href="#">
                            <img src="{{$art->image_url}}" alt="img">
                        </a>
                    </div>
                </td>
                <td><a href="#">{{$art->title}}</a></td>
                <td>{{$art->getShortDescription()}}</td>
                <td>
                    <div class="col-md">
                        <a href="" class="btn btn-danger">Удалить</a>
                        <a href="" class="btn btn-secondary">Изменить</a>
                        <a href="" class="btn btn-primary">Скрыть</a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>