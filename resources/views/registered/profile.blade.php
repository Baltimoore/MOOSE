@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - parāda galveno informāciju, kas par lietotāju ir saglabāta datubāzē
 - - - - - - - - - - - --}}

@section('moduleStyle')
/* Globālie moduļa izskata mainīgie */
#userWrapper {
    margin: auto;
    display: grid;
    justify-content: space-evenly;
}

#userHead {
    display: grid;
    height: 100px;
    display: grid;
    grid-template-columns: 100px auto;
    grid-template-rows: auto auto;
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
        border-top: 1px dashed var(--logo-outline);
        grid-column: 2;
        grid-row: 2;
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
        <div id="userPassport"></div>
        <div id="userHunting"></div>
        <div id="userParticipating"></div>
    </div>
</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection