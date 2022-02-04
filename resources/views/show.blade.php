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
            @if(empty($userfavorites->steam_game_id))
                <form action="{{ route('store', $game->id) }}" method="POST">
                @csrf
                    <div class="form-group d-none">
                        <input type="text" name="steam_game_id" class="form-control" id="steam_game_id" value="{{$game->id}}" maxlength="255" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                    <button type="submit" class="btn btn-link third "><i class="far fa-star fa-2x third"></i> <span class='h3'>Add to favorite</span></button>
                    </div>
                </form>
            @else
                <form action="{{route('destroy', $game->id)}}" method="POST">
                @csrf
                @method('DELETE')
                    <div class="form-group d-none">
                        <input type="text" name="steam_game_id" class="form-control" id="steam_game_id" value="{{$game->id}}" maxlength="255" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                    <button type="submit" class="btn btn-link third deleteFavorite" data-id="{{$game->id}}" data-token="{{ csrf_token() }}"><i class="fas fa-star fa-2x third"></i><span class='h3'>Unfavorite</span></button>
                    </div>
                </form>
            @endif
                <a class="btn btn-action" target="_blank" href="{{$game->link}}">GET IT NOW !</a>
            </div>

            <div class="contentshow pt-3 showcarousel">
                <div id="slidershow">
                    @foreach ($gamerandomsleft as $gamerandom)
                    <a href="{{$gamerandom->id}}">
                        <img class="gameRandomShow" src="{{$gamerandom->img_url}}" class="cover">
                    </a>
                    @endforeach
                    <a href="{{$game->id}}">
                        <img class="gameShow" src="{{$game->img_url}}" class="cover">
                    </a>
                    @foreach ($gamerandomsright as $gamerandom)
                    <a href="{{$gamerandom->id}}">
                        <img class="gameRandomShow" src="{{$gamerandom->img_url}}" class="cover">
                    </a>
                    @endforeach
                </div>
            </div>
    </div>
</div>

@endsection