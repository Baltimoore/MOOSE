@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - kartes skats, kurā caur integrētu google maps(?) dialogu
 - - var pārskatīt biedrībai piederošās medību teritorijas
 - - un to līgumu garumus. administrators var arī pievienot jaunus.
 - - - - - - - - - - - --}}

@section('moduleStyle')
    /* Nav globāli moduļa izskata mainīgie */
@endsection

@section('moduleTitle')
medību teritorijas
@endsection

@section('moduleContent')
    <div id="mapInteractive" style="background-color: var(--logo-fur-dark);border:2px solid var(--logo-outline);margin:10px;height:500px;">
        <h1>Ievieto te kkādu fotku; man slinkums meklēt un taisīt tagad</h1>
    </div>
    <div id="mapInfo" style="background-color: var(--logo-bone-light);border:2px solid var(--logo-outline);margin-top:30px;height:200px;">
        <p>info par atlasītu teritoriju</p>
    </div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection