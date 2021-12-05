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
        padding-top:10px;
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

/* Izliekamies, ka notiktu labošana */
.edit {
    padding: 3px 5px;
    height: 30px;
    width: 150px;
    margin-top: 10px;
    background: var(--logo-bone-dark);
    border: 1px solid var(--logo-outline);
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
        <div id="userID"><span id="userName" class="edit">Alnis Mūsis</span> - <span id="userRole">biedrības vadītājs</span></div>
        <a id="userEdit" href="#">Mainīt attēlu</a>
    </div>
    <div id="userBody">
        <div id="userPassport">
            <div id="userBirthDate" class="userData">
                <p>Personas kods:</p>
                <div class="edit">04121974-59734</div>
            </div>
            <div id="userPhone" class="userData">
                <p>Telefona numurs:</p>
                <div class="edit">16872687</div>
            </div>
        </div>
        <div id="userHunting">
            <div id="userLicenseExists" class="userData">
                <p>Ir medību license?</p>
                <p>Jā <input class="w3-check" type="checkbox" checked="checked"> Nē <input class="w3-check" type="checkbox"></p>
            </div>
            <div id="userLicenseNr" class="userData">
                <p>Medību licenses nr:</p>
                <div class="edit">am15971</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection