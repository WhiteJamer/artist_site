@extends('layouts.app')

@section('title', 'Все арты')

@section('content')
    <div class="container">
        <div id="arts-list" class="image-list row">
            {{-- 6 последних артов --}}
            @foreach($arts as $art)
                <div class="image-item ">

                        <img class="modal-triger art-detail-triger"
                             src="{{$art->image_url}}"
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
