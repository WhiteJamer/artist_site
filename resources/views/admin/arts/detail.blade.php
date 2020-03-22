<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div class="container">

    <div class="col-md">
        <div class="row mt-3">
            <a href="#" class="btn btn-secondary">Изменить</a>
            <a href="#" class="btn btn-danger">Удалить</a>
        </div>
        <table class="table mt-3">
            <tbody>
                <tr>
                    <th>Картинка</th>
                    <th><div class="image-item">
                            <img src="{{$art->getImageUrl()}}" alt="{{$art->title}}}">
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>{{$art->id}}</th>
                </tr>
                <tr>
                    <th>Название</th>
                    <th>
                        <a href="{{route('site.arts.show', $art->id)}}">{{$art->title}}</a>
                    </th>
                </tr>
                <tr>
                    <th>Описание</th>
                    <th>{{$art->description}}</th>
                </tr>
                <tr>
                    <th>Кол-во просмотров</th>
                    <th>{{$art->views}}</th>
                </tr>
                <tr>
                    <th>Дата публикации</th>
                    <th>{{$art->created_at}}</th>
                </tr>
                <tr>
                    <th>Последнее обновление</th>
                    <th>{{$art->updated_at}}</th>
                </tr>
                <tr>
                    <th>Автор</th>
                    <th>{{$art->user->name}}</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>