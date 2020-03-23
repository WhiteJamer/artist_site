@extends('layouts.admin')

@section('title', 'Изменить арт')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form action="{{ route('admin.arts.update', $art->id) }}" method="POST" enctype="multipart/form-data" class="form-group">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="image-item">
                <img src="{{$art->getImageUrl()}}" alt="{{$art->title}}">
            </div>

            <label for="file" class="mt-1">Изображение:</label>
            <input type="file" name="file" id="file" class="form-control">

            <label for="title">Название работы:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$art->title}}">

            <label for="description">Описание:</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$art->description}}</textarea>

            <button type="submit" class="btn-success">Сохранить</button>
        </form>
    </div>

@endsection