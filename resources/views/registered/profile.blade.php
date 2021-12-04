@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - parāda galveno informāciju, kas par lietotāju ir saglabāta datubāzē
 - - - - - - - - - - - --}}

@section('moduleStyle')
/* Globālie moduļa izskata mainīgie */
#userWrapper {
    margin-top:30px;
    display: grid;
    justify-content: space-evenly;
    grid-template-columns: var(--display-minWidth)-10px;
}
#userWrapper > div {
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    display: grid;
    margin-bottom: 30px;
}

div#userHead {
    border-color: var(--logo-outline);
    background-color: var(--logo-fur-light);
    grid-template-columns: 100px 550px;
    grid-template-rows: 50px 50px;
}
    #userImage {
        margin:auto;
        grid-column: 1;
        grid-row: 1 / 3;
    }
        #userImage img{
            object-fit: cover;
            width: 80px;
            height: 80px;
            background-color: var(--logo-fur-light);
            border-radius: 50%;
        }
    #userID {
        margin:20px 0 -20px 0;
    }
        #userName {
            font-size: 24px;
            font-weight: bold;
        }
        #userRole {
            font-size: 16px;
            font-style: italic;
        }
    #userEdit {
        border-top: 1px dashed var(--logo-fur-light);
        grid-column: 2;
        grid-row: 2;
    }

#userBody {
    background-color: var(--logo-bone-light);
}
#userBody > div {
    border-bottom: 2px dotted var(--logo-fur-dark);
}
#userBody > div:last-child { border: 0; }

#userBody div.userData {
    display: grid;
    grid-template-columns: 200px 450px;
    border-bottom: 1px dashed var(--logo-fur-light);
}
#userBody div.userData:last-child { border: 0; }
    #userBody div.userData > p:first-child {
        margin-right:20px;
        font-weight: bold;
        text-align:right;
    }
    #userBody div.userData > p:last-child {
        font-style: italic;
    }

#eventsParticipating { padding: 0 20px; }
    #eventsParticipating > div {
        display: grid;
        grid-template-columns: 100px 80px 100px auto 100px;
        border-bottom: 1px dashed var(--logo-fur-light);
        align-items: center;
        text-align: center;
    }
    #eventsParticipating > div:first-child {
        border-bottom: 2px solid var(--logo-fur-dark);
        font-weight: bold;
    }
    #eventsParticipating > div:last-child { border: 0; }

#eventsParticipating .w3-button {
    background-color: var(--logo-fur-dark);
}
#eventsParticipating .w3-button:hover {
    background-color: var(--logo-bone-dark)!important;
}
@endsection

@section('moduleTitle')
Profils
@endsection

@section('moduleContent')
{{-- Moduļa galvenā satura sadaļa --}}
<div id="userWrapper">
    <div id="userHead">
        <div id="userImage"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
        <div id="userID"><span id="userName">Alnis Mūsis</span> - <span id="userRole">biedrības vadītājs</span></div>
        <a id="userEdit" href="#">Labot profila informāciju</a>
    </div>
    <div id="userBody">
        <div id="userPassport">
            <div id="userBirthDate" class="userData">
                <p>Personas kods:</p>
                <p>04121974-59734</p>
            </div>
            <div id="userPhone" class="userData">
                <p>Telefona numurs:</p>
                <p>16872687</p>
            </div>
        </div>
        <div id="userHunting">
            <div id="userLicenseExists" class="userData">
                <p>Ir medību license?</p>
                <p>Jā</p>
            </div>
            <div id="userLicenseNr" class="userData">
                <p>Medību licenses nr:</p>
                <p>am1597</p>
            </div>
        </div>
    </div>
    <div id="eventsParticipating">
        <div id="titles">
            <p>Medību organizators</p>
            <p>Medību tips</p>
            <p>Medību norises datums</p>
            <p>Medību norises vieta</p>
            <p>Atteikties no piedalīšanās medībās</p>
        </div>
        <div id="event1">
            <p id="event1Organiser">Juris Padels</p>
            <p id="event1Type">Medības</p>
            <p id="event1Date">21-05-2022</p>
            <p id="event1Location"><a href="{{-- route('map') --}}">Mežs "Zemzariņi"</a></p>
            <button id="event1Deny" class="w3-button w3-round-large">Atteikties</button>
        </div>
        <div id="event2">
            <p id="event2Organiser">Miķelis Zindars</p>
            <p id="event2Type">Dzinēj-medības</p>
            <p id="event2Date">25-05-2022</p>
            <p id="event2Location"><a href="{{-- route('map') --}}">Mežs "Klubiņi"</a></p>
            <button id="event2Deny" class="w3-button w3-round-large">Atteikties</button>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection