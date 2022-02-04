@extends('layouts.app')

@section('content')

<div class="bgWrapper overflow-hidden">
    <div class="infosFav">
    @foreach (auth()->user()->favorites as $favorite)
        <div class="card my-3 bg-transparent">
            <a href="/show/{{$favorite->id}}" data-aos="fade-left"><span class="badge btn-action">{{$favorite->categories}}</span><img src="{{$favorite->img_url}}" class="imgsearch" alt="{{$favorite->names}}" /></a>
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