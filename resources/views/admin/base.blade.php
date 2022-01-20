@extends('base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - administratora biedrības saraksta skats
 - - paziņojumi atradīsies atsevišķos failos
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
/* -------------------------------------------- */
@yield('moduleStyle')
@endsection

@section('title')
MOOSE sistēma @yield('moduleTitle')
@endsection

@section('navbar')
    <div id="logo">
        <label>
            <img src="/images/logo.svg" alt="Sistēmas logo">
            Administratora skats
        </label>
    </div>
@endsection

@section('content')

@yield('popupContent')
@endsection

@section('scripts')
@yield('popupScripts')
@endsection