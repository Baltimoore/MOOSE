@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - lietotnes centrālais skats, no kura var pāriet uz visiem pārējiem
 - - - - - - - - - - - --}}

@section('moduleStyle')
    /* Nav globāli moduļa izskata mainīgie */
@endsection

@section('moduleTitle')
centrālais skats
@endsection

@section('moduleContent')
    <h1>Galvenais lietotnes skats, kurā parādās visi moduļi samazinātā skatā</h1>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection