@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content pt-3 mobilehome">
                <a href="/show/767" id="l4d" class="bgHomeImg image-container"><img id="l4d" src="{{ asset('images/l4d.png') }}"><div class="mask d-flex justify-content-end align-items-end flex-column action h4 pr-3 pb-3">Left 4 Dead <br><small class="text-white">Explore</small></div></a>
                <a href="/show/54" id="ARK"  class="bgHomeImg image-container"><img id="ARK" src="{{ asset('images/ARK.png') }}"><div class="mask d-flex justify-content-end align-items-end flex-column action h4 pr-3 pb-3">Ark <br><small class="text-white">Explore</small></div></a>
                <a href="/show/235" id="re" class="bgHomeImg image-container"><img id="re" src="{{ asset('images/REM.png') }}"><div class="mask d-flex justify-content-end align-items-end flex-column action h4 pr-3 pb-3">Resident evil 2 <br><small class="text-white">Explore</small></div></a>
                <a href="/show/465" id="nier" class="bgHomeImg image-container"><img id="nier" src="{{ asset('images/nier.png') }}"><div class="mask d-flex justify-content-end align-items-end flex-column action h4 pr-3 pb-3">Nier automata <br><small class="text-white">Explore</small></div></a>
                <a href="/show/2412" id="b4b" class="bgHomeImg image-container"><img id="b4b" src="{{ asset('images/b4b.jpg') }}"><div class="mask d-flex justify-content-end align-items-end flex-column action h4 pr-3 pb-3">Metal gear rising <br><small class="text-white">Explore</small></div></a>
    </div>

    <div class="content pt-3 desktophome">
        <div id="app">
            <home-component>
            </home-component>
        </div>
    </div>
    <!-- /.content -->
@endsection