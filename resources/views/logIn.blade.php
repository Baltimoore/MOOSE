@extends('base')

<!-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - milzīga daļa koda prost kopēta no w3schools.com w3.css sadaļas
 - - logo nozagts no interneta (brūnais png) un pārzīmēts inkscape (zaļais svg)
 - - - - - - - - - - - -->

@section('globalStyles')
    /* Nav nepieciešami globāli izskata mainīgie */
@endsection

@section('title')
Reģistrācija
@endsection

@section('navbar')
    <!-- Nav nepieciešams augšējais panelis uz doto brīdi -->
@endsection

@section('content')
    <div class="w3-container w3-center">
        <img style="height:40vh;max-height:700px;max-width:700px;"
             src="/images/logo.svg" alt="Medību biedrības logo">
        <h1 style="margin-bottom: 5vh"><b>Mednieku biedrība "Alnis"</b></h1>

        <div style="width:auto; max-width:400px; margin:auto">
            <label for="uname"><b>Lietotājvārds</b></label>
            <input class="w3-input w3-round-large" type="text" placeholder="ex: ei26745" name="uname" required>
            <br>
            <label for="psw"><b>Parole</b></label>
            <input class="w3-input w3-round-large" type="password" placeholder="Ievadiet paroli" name="psw" required>
            <br>
            <a class="w3-button w3-round-large" href="{{ route('map') }}"><b>Pieslēgties</b></a>
            <br>
            <label><input class="w3-check" type="checkbox" checked="checked"> Saglabāt lietotājvārdu</label>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota -->
@endsection