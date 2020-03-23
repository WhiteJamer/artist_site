@extends('layouts.admin')

@section('title', 'Список статей - Админ-панель')

@section('content')
    <div class="container-fluid">

    <div class="row justify-content-center mt-3 p-3">
        <div class="col-md">
            <div class="top-pagination" style="margin-bottom: 1rem">
                {{$arts->links('pagination.default')}}
            </div>
            <div class="actions row justify-content-center mt-1">
                <a href="{{ route('admin.arts.create') }}" class="btn btn-primary">Загрузить новый арт</a>
            </div>
        </div>
        <table class="table mt-3">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Арт</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Кол-во просмотров</th>
                <th scope="col">Опубликовано</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($arts as $art)
            <tr>
                <th scope="row">{{$art->id}}</th>
                <td>
                    <div class="image-item">
                        <a href="{{ route('admin.arts.show', $art->id) }}">
                            <img src="{{$art->getImageUrl()}}" alt="img">
                        </a>
                    </div>
                </td>
                <td>
                    <a href="{{route('site.arts.show', $art->id)}}">{{$art->title}}</a>
                </td>
                <td>
                    {{$art->getShortDescription()}}
                </td>
                <td>
                    {{$art->views}}
                </td>
                <td>
                    {{$art->created_at}}
                </td>
                <td>
                    <div class="col-md">
                        <div class="row justify-content-center">
                            <form action="{{ route('admin.arts.destroy', $art->id) }}"
                                  method="POST"
                                  class="delete-form"
                                  data-confirm="Вы действительно хотите удалить этот арт? ID: {{$art->id}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                            <a href="{{ route('admin.arts.edit', $art->id) }}" class="btn btn-secondary">Изменить</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            {{--Pagination--}}
            </tbody>
        </table>
        {{$arts->links('pagination.default')}}
    </div>
</div>
    <script !src="">
        on('.delete-form').on('submit', function(e){
            if(!confirm($(this).attr('data-confirm')))
            e.preventDefault();
        })
    </script>
@endsection