@extends('layouts/app')
@section('title', 'ProjectART')

@section('content')
    <div class="container">
        <section id="art-information" class="ct-block mt-5">
            <div class="row justify-content-center">
                <div class="image-large">
                    <a href="{{$art->image_url}}">
                        <img src="{{$art->getImageUrl()}}">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1 class="mt-5 text-center">{{$art->title}}</h1>
                    <p>{{$art->description}}</p>
                </div>
            </div>
            <div class="row justify-content-between mt-3 ct-block">
                <span><b>Дата публикации:</b> {{$art->getCreatedAt()}}</span>
                <span><b>Изменено:</b> {{$art->getUpdatedAt()}}</span>
            </div>
        </section>

        <section id="art-comments" class="mt-3">
            <script type="text/javascript">
                VK.init({apiId: 7366934, onlyWidgets: true});
            </script>

                <div id="vk_comments"></div>
                <script type="text/javascript">
                    VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
                </script>
        </section>
    </div>
@endsection