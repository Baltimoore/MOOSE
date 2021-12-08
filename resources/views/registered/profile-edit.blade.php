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
    grid-template-columns: var(--display-minWidth)-10px;
    justify-content: space-evenly;
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
    grid-template-rows: 55px 45px;
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
    #userReplaceImg {
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

/* Izliekamies, ka notiktu labošana */
.edit { background-color: var(--logo-fur-dark); }
#userID {
    display: grid;
    grid-template-columns: 200px auto;
    margin-top: 25px;
}
#userID > .edit {
    padding: 0 10px;
    margin-top:-3px;
}
    #userName, #userRole {
        width:180px;
        height:30px;
    }
    #userReplaceImg { margin-left: 10px; }

#userPassport > div > input.edit, #userHunting > div > input.edit {
    height: 30px;
    width: 150px;
    margin-top: 11px;
}

#userEdit {
    padding-top: 15px;
    display: grid;
    justify-content: space-around;
    align-content: center;
}
    #userConfirm, #userCancel {
        grid-column: 1/3;
        width:90%;
        margin-bottom: 15px;
    }
    #userConfirm {
        background-color: orange;
        color: var(--logo-outline);
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
        <div id="userID">
            <input id="userName" class="edit w3-input w3-round-large" type="text" value="Alnis Mousis">
            <select id="userRole" class="edit w3-select w3-round-large" name="option">
                <option disabled selected hidden>Biedra loma</option>
                <option value="Vad">Biedrības vadītājs</option>
                <option value="Org">Medību organizators</option>
                <option value="Med">Mednieks</option>
                <option value="Dzi">Dzinējs</option>
            </select>
        </div>
        <a id="userReplaceImg" href="#">Mainīt attēlu</a>
    </div>
    <div id="userBody">
        <div id="userPassport">
            <div id="userBirthDate" class="userData">
                <p>Personas kods:</p>
                <input id="addName" class="edit w3-input w3-round-large" type="text" value="04121974-59734">
            </div>
            <div id="userPhone" class="userData">
                <p>Telefona numurs:</p>
                <input id="addName" class="edit w3-input w3-round-large" type="text" value="16872687">
            </div>
        </div>
        <div id="userHunting">
            <div id="userLicenseExists" class="userData">
                <p>Ir medību license?</p>
                <p>Jā <input class="w3-check" type="checkbox" checked="checked"> Nē <input class="w3-check" type="checkbox"></p>
            </div>
            <div id="userLicenseNr" class="userData">
                <p>Medību licenses nr:</p>
                <input id="addName" class="edit w3-input w3-round-large" type="text" value="am15971">
            </div>
        </div>
        <div id="userEdit">
            <button id="userConfirm" class="w3-button w3-round-large" href="{{ route('profile') }}">Labot biedrības dalībnieka datus</button>
            <button id="userCancel" class="w3-button w3-round-large" href="{{ route('profile') }}">Atcelt datu labošanu</button>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection