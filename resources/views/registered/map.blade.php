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
    <h1>Ievieto te kkādu fotku; man slinkums meklēt un taisīt tagad</h1>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection