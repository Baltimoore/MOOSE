@extends('base')

<!-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - milzīga daļa koda prost kopēta no w3schools.com w3.css sadaļas
 - - logo nozagts no interneta (brūnais png) un pārzīmēts inkscape (zaļais svg)
 - - - - - - - - - - - -->

@section('globalStyles')
#loginForm > div { padding-bottom: 30px; }
#usrnm > label:first-child, #pswrd > label:first-child { font-weight: bold; }
.error { color:orange; outline:var(--logo-outline) }
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
        <h3 style="margin-bottom:-10px;color:var(--logo-fur-dark)">Mednieku Organizāciju Organizatoriskā Sistēma Extreme</h3>
        <h1 style="margin-bottom:3vh;color:var(--logo-outline)"><b>“MOOSE”</b></h1>

        <div id="loginForm" style="width:auto; max-width:400px; margin:auto">
            <div id="usrnm">
                <label>Lietotājvārds</label>
                <input class="w3-input w3-round-large" type="text" pattern="^[0-9]{6}-[0-9]{5}$" placeholder="123456-12345" required>
                <label class="error"></label>
            </div>
            <div id="pswrd">
                <label for="pswrd">Parole</label>
                <input class="w3-input w3-round-large" type="password" placeholder="Ievadiet paroli" required>
                <label class="error"></label>
            </div>

            <a class="w3-button w3-round-large" onclick="unameCheck()"><b>Pieslēgties</b></a>
            <br>
            <label><input class="w3-check" type="checkbox" checked="checked"> Saglabāt lietotājvārdu</label>
        </div>
    </div>
@endsection

@section('scripts')
    // Nosaka, uz kādu skatu novirzīt pieslēgušos lietotāju
    // Vajadzētu izveidot pārbaudi uz datubāzi, bet es to nu gan nemāku izdarīt tagad :D
    function unameCheck(){
    // Atlasam izmantojamos elementus un nolasam lietotājvārda vērtību
        var nDiv = document.getElementById("usrnm");
        var nAfter = nDiv.getElementsByClassName("error")[0];
        var nField = nDiv.getElementsByTagName("input")[0];
        var name = nField.value;

    // Noņemam esošos formatējumus
        nField.setAttribute("style", "");
        nAfter.innerHTML = "";

    // Lietotājs ir administrators
        if (name == "adminCredentials") { window.location = "/home" }
    // Lietotājvārds ir pareizi noformēts personas kods
        // (jeb lietotājs ir medību biedrības dalībnieks)
        else if (RegExp(nField.getAttribute("pattern")).test(name)) {
            // te vēl varētu pārbaudīt, vai ir reģistrēts datubāzē
            window.location = "/map";
        }
    // Lietotājvārda nederīguma paziņojums lietotājam
        else {
            nField.setAttribute("style", "outline:solid 2px orange");
                 if (name == "") { nAfter.innerHTML = "Lietotājvārds nedrīkst būt tukšs!"; }
            else if (RegExp(/^\d+$/).test(name)) { nAfter.innerHTML = "Trūkst domuzīmes!"; }
            else if (RegExp(/^\d{0,}-\d{0,}$/).test(name)) { nAfter.innerHTML = "Ciparu skaits nav pareizs!"; }
            else if (RegExp(/\D/).test(name)) { nAfter.innerHTML = "Jābūt tikai cipariem un vienai domuzīmei!"; }
            else { nAfter.innerHTML = "Nederīgs lietotājvārds"; }
        }
    }
@endsection