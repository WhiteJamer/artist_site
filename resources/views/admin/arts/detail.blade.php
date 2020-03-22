@extends('layouts.admin')

@section('title', 'Арт - ' . $art->title .' - Админ-панель')

@section('content')
<div class="container">

    <div class="col-md">
        <div class="row mt-3">
            <a href="#" class="btn btn-secondary">Изменить</a>
            <form action="{{ route('admin.arts.destroy', $art->id) }}" method="POST" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
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
@endsection