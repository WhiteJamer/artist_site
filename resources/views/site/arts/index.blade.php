@extends('layouts.app')

@section('title', 'Все арты')

@section('content')
    <div class="container">
        <h1 class="text-center">Все арты</h1>
        <div id="arts-list" class="image-list row">
            @foreach($arts as $art)
                <div class="image-item ">

                        <img class="modal-triger art-detail-triger"
                             src="{{$art->getImageUrl()}}"
                             alt="{{$art->title}}"
                             data-description="{{$art->description}}"
                             data-id="{{$art->id}}"
                        >
                </div>
            @endforeach
        </div>
        {{--Pagination--}}
        {{$arts->links('pagination.default')}}
    </div>
@endsection
