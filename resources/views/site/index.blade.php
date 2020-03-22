@extends('layouts/app')

@section('title', 'ProjectART')

@section('content')
<div class="header">
    <div class="header__bg">
        <div class="row justify-content-center align-items-center" style="height: 100%;">
            <div class="col-md-4">
                <div class="header__info">
                    <!-- Photo -->
                    <div class="header_author__photo"></div>
                    <!-- Author Info -->
                    <div class="author__info text-center">
                        <div class="name">
                            <h1>Имя Фамилия</h1>
                        </div>
                        <div class="career mt-4">
                            <h3>Должность</h3>
                        </div>
                    </div>
                    <!-- Secondary info -->
                    <div class="other__info">
                        <p>
                            Цитата...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- Message -->
    <div class="row ct-block mt-5">
        <div class="col-md-12">
            <h1>Hello everyone!</h1>
            <p>Сегодня я вкусно покушал...</p>
            <p>Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое. Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой коричневый, выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле держалось готовое вот-вот окончательно сползти одеяло. Его многочисленные, убого тонкие по сравнению с остальным телом ножки беспомощно копошились у него перед глазами. «Что со мной случилось?» – подумал он. Это не было сном. Его комната, настоящая, разве что слишком маленькая, но обычная комната, мирно покоилась в своих четырех хорошо знакомых стенах. Над столом, где были разложены распакованные образцы сукон – Замза</p>
        </div>
        <!-- End -->
    </div>
    <!-- Arts -->
    <div id="arts" class="row ct-block mt-5">
        <div class="col-md-12">
            <h2 class="image-list__label text-center">Последние работы</h2>

            <div id="arts">
                <div id="arts-list" class="image-list row">
                    {{-- 6 последних артов --}}
                    @foreach($recentArts as $art)
                        <div class="image-item ">
                            <img class="modal-triger art-detail-triger" src="{{$art->getImageUrl()}}" alt="{{$art->title}}" data-description="{{$art->description}}" data-id="{{$art->id}}">
                        </div>
                    @endforeach
                </div>
                <a href="#" class="load-more-btn row justify-content-center mt-3">
                    Показать еще...
                </a>
            </div>
            {{--                <div class="image-list__more mt-5">--}}
            {{--                    <div class="message">--}}
            {{--                        <a href="">--}}
            {{--                            <h3>Больше моих работ в моем Instagram</h3>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                    <div class="instagram-gravity"><img src="/images/instagram-gravity.png" alt="instagram-img"></div>--}}
            {{--                </div>--}}

        </div>
    </div>
    <!-- End -->
    <form id="feedback" action="/" class="form-group row feedback_form ct-block mt-3">
        <h3 class="mt-5" style="color: #fff;">Форма обратной связи</h3>
        <div class="mt-3">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="email" placeholder="Ваш email">
        </div>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Введите ваше сообщение"></textarea>
        <button type="submit" class="btn btn-send">Отправить</button>
    </form>
</div>
@endsection