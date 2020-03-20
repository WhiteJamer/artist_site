@extends('layouts/app')
@section('title', 'ProjectART')

@section('content')
    <div class="container" style="margin-top: 5rem">
        <section id="art-information" class="ct-block mt-5">
            <div class="row justify-content-center" style="margin-top: 5rem">
                <div class="image-large">
                    <a href="{{$art->image_url}}">
                        <img src="{{$art->image_url}}" alt="{{$art->title}}">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1 class="mt-5 text-center">{{$art->title}}</h1>
                    <p>{{$art->description}}</p>
                </div>
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