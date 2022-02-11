@extends('layouts.app')

@section('content')

<div class="bgWrapper overflowfav bgWrapperbg">
    <div class="searchDesk">
    @foreach (auth()->user()->favorites as $favorite)
        <div class="card my-3 bg-transparent searchDeskImg imgsearch">
            <a href="/show/{{$favorite->id}}"><span class="badge btn-action">{{ Str::limit($favorite->categories, 13) }}</span><img src="{{$favorite->img_url}}" class="imgSearchimg" alt="{{$favorite->names}}" /></a>
        </div>
    @endforeach    
    </div>
</div>
    {{-- <div id="app">
        <div class="container py-3 overflow-hidden">
            <favorite-component></favorite-component>
        </div>
    </div> --}}

@endsection