@extends('layouts.app')

@section('title', 'Загрузить новый арт')

@section('content')
    <div class="container">
        <form action="{{route('admin.arts.store')}}" method="POST" enctype="multipart/form-data" class="form-group">
            {{csrf_field()}}
            <label for="file" class="mt-1">Изображение:</label>
            <input type="file" name="file" id="file" class="form-control">
            <label for="title">Название работы:</label>
            <input type="text" name="title" id="title" class="form-control">
            <label for="description">Описание:</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            <button type="submit" class="btn-success">Сохранить</button>
        </form>
    </div>

@endsection