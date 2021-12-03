@extends('base')

<!-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - lietotnes centrālais skats, kura saturu
 - - aizpilda katrs lietotnes modulis pa savam
 - - - - - - - - - - - -->

@section('globalStyles')
    #navbar a.w3-button {
        align: center;
        color: var(--logo-bone-light);
        min-width:120px;
        width: 8vw;
        max-width:200px;
    }
    #navbar a.w3-button:hover {
        color: var(--logo-outline);
        background-color: var(--logo-bone-dark);
        font-weight: bold;
    }
    @yield('moduleStyle')
@endsection

@section('title')
    ALNIS - @yield('moduleTitle')
@endsection

@section('navbar')
    <div id="navbar" class="w3-bar" style="background-color:var(--logo-outline)">
        <a id="home" href="{{ route('home') }}" class="w3-bar-item w3-button">Centrs</a>
        <a id="calendar" href="{{ route('calendar') }}" class="w3-bar-item w3-button">Kalendārs</a>
        <a id="map" href="#" class="w3-bar-item w3-button">Karte</a>
        <a id="inventory" href="#" class="w3-bar-item w3-button">Inventārs</a>
        <a id="profile" href="#" class="w3-bar-item w3-button w3-right">Profils</a>
    </div>
@endsection

@section('content')
    @yield('moduleContent')
@endsection

@section('scripts')
    <!-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota -->
    @yield('moduleScripts')
@endsection