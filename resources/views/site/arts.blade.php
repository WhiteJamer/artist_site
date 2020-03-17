@foreach($recentArts as $art)
    <div class="image-item ">
        <img class="modal-triger art-detail-triger" src="{{$art->image_url}}" alt="{{$art->title}}" data-description="{{$art->description}}">
    </div>
@endforeach