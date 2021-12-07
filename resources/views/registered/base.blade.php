@extends('base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - lietotnes centrālais skats, kura saturu
 - - aizpilda katrs lietotnes modulis pa savam
 - - - - - - - - - - - --}}

@section('globalStyles')
#logo {
    font-size: 4vh;
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
#navbar a.w3-button {
    min-width:100px;
    width: 8vw;
    max-width:200px;
    padding: 8px 0;
}
    #navbar > div.w3-dropdown-hover {  }
    #navbar > div.w3-dropdown-hover > .w3-dropdown-content { min-width:0; }
    #navbar > div.w3-dropdown-hover > .w3-dropdown-content > a { padding-left: 10px; }
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
        <a id="map" href="{{ route('map') }}" class="w3-bar-item w3-button">Karte</a>
        <a id="inventory" href="{{ route('inventory') }}" class="w3-bar-item w3-button">Inventārs</a>
        <a id="recordings" href="{{ route('recordings') }}" class="w3-bar-item w3-button">Ieraksti</a>
        <div class="w3-dropdown-hover w3-right">
            <a id="profile" class="w3-button" href="{{ route('profile') }}">Profils</a>
            <div class="w3-dropdown-content w3-bar-block" style="right:0">
                <a id="profile-list" href="{{ route('profile-list') }}" class="w3-bar-item w3-button w3-right">Profilu saraksts</a>
            </div>
        </div>
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