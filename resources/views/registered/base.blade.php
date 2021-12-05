@extends('base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - lietotnes centrālais skats, kura saturu
 - - aizpilda katrs lietotnes modulis pa savam
 - - - - - - - - - - - --}}

@section('globalStyles')
    #navbar a.w3-button {
        align: center;
        min-width:120px;
        width: 8vw;
        max-width:200px;
    }
    #navbar a.w3-button:hover {
        color: var(--logo-outline)!important;
        background-color: var(--logo-bone-dark)!important;
        font-weight: bold;
    }
    #logo {
        font-size: 3vh;
        font-weight: bold;
        padding: 10px;
        background-color: var(--logo-fur-light);
        color: var(--logo-outline);
    }
    #logo img {
        height: 8vh;
        max-height: 100px;
        max-width: 100px;
    }
    @yield('moduleStyle')
@endsection

@section('title')
    ALNIS - @yield('moduleTitle')
@endsection

@section('navbar')
    <div id="logo">
        <label>
            <img src="/images/logo.svg" alt="Medību biedrības logo">
            Mednieku biedrība "Alnis"
        </label>
    </div>

    <div id="navbar" class="w3-bar" style="background-color:var(--logo-outline)">
        <a id="home" href="{{ route('home') }}" class="w3-bar-item w3-button">Centrs</a>
        <a id="calendar" href="{{ route('calendar') }}" class="w3-bar-item w3-button">Kalendārs</a>
        <a id="map" href="#" class="w3-bar-item w3-button">Karte</a>
        <a id="inventory" href="{{ route('inventory') }}" class="w3-bar-item w3-button">Inventārs</a>
        <a id="profile" href="{{ route('profile') }}" class="w3-bar-item w3-button w3-right">Profils</a>
    </div>
@endsection

@section('content')
    @yield('moduleContent')
@endsection

@section('scripts')
    // Pielipina skatu sarakstu lietotnes augšā kad scrollo
    // Zagts no https://www.w3schools.com/howto/howto_js_sticky_header.asp
    window.onscroll = function(){ stickifier() };

    var viewNavigator = document.getElementById("navbar");
    var logoArea = viewNavigator.offsetTop;
    
    function stickifier() {
        if (window.pageYOffset > logoArea) {
            viewNavigator.classList.add("w3-top");
        } else {
            viewNavigator.classList.remove("w3-top");
        }
    }
    
    @yield('moduleScripts')
@endsection