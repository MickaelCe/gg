@extends('layouts.app')

@section('content')

<div class="bgWrapper overflow-hidden">
    <div class="bginfos">
        <img src="{{$game->img_url}}" class="cover">
    </div>
    <div class="infos">
            <div class="gamename px-2">
                <h3 class="text-center"><span class="action">{{$game->names}}</span></h3>
                <h6 class="text-white text-center">{{$game->dates}}</h6>
            </div>
            <img class="gameimg" src="{{$game->img_url}}">
            <div class="gamedev text-white">
                <h3><span class="action">Developer :</span></h3>
                <h4>{{$game->developer}}</h4>
            </div>
            <div class="gamereview text-white">
                <h3><span class="action">Reviews :</span></h3>
                <h5 class="px-5">{{$game->user_reviews}}</h5>
            </div>
            <div class="gameaction text-white">
                <p><i class="far fa-star action"></i> Add to favorite<p>
                <a class="btn btn-action" target="_blank" href="{{$game->link}}">GET IT NOW !</a>
            </div>
    </div>
</div>

@endsection