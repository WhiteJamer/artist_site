<div class="container">
    <div id="arts-list" class="image-list row">
        {{-- 6 последних артов --}}
        @foreach($recentArts as $art)
            <div class="image-item ">
                <img class="modal-triger art-detail-triger" src="{{$art->image_url}}" alt="{{$art->title}}" data-description="{{$art->description}}" data-id="{{$art->id}}">
            </div>
        @endforeach
    </div>
</div>