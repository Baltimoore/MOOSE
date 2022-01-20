@extends('member.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - attēlo visus medību biedrībā reģistrētos lietotājus
 - - - - - - - - - - - --}}

@section('moduleStyle')

.userType {
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    margin: 30px 15px;
    padding: 0 20px;
    display: grid;
}
    .userType > div {
        padding: 10px 0;
        display: grid;
        grid-template-columns: 50px auto 100px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    .userType > div:last-child { border: 0; }

.userPicture {  }
    .userPicture > img {
        object-fit: cover;
        width: 40px;
        height: 40px;
        background-color: var(--logo-fur-light);
        border-radius: 50%;
    }
.userName {
    font-weight: bold;
}

.empty { display: none!important; }

/* Piešķir visiem lietu konteineriem virsrakstus */
.userType::before {
    font-family: "Montserrat Alternates", sans-serif;
    position: absolute;
    margin-top: -13px;
    padding: 0 5px;
    margin-left: 20px;
    background: #fff;
}
    #userHead::before { content: 'Biedrības vadītāji'; }
    #userHand::before { content: 'Medību vadītāji'; }
    #userGun::before { content: 'Mednieki'; }
    #userRun::before { content: 'Dzinēji'; }
    #userOther::before { content: 'Cits'; }

/* lietotāja izveides poga */
#userCreate {
    margin-top:-10px;
    margin-bottom:15px;
    width:100%;
}
@endsection

@section('moduleTitle')
Lietotāju saraksts
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="userWrapper">
    <div id="userHead" class="userType">
        <div id="usr1">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Alnis Mūsis</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>

    <div id="userHand" class="userType">
        <div id="usr2">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Juris Padels</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr3">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Miķelis Zindars</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>
    
    <div id="userGun" class="userType">
        <div id="usr4">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Dāvids Lurjevs</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr5">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Storks Stārķis</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr6">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Bēre Lāce</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr7">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Vofs Vilks</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr8">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Foksis Lapsa</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr9">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Bevers Bebris</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>

    <div id="userRun" class="userType">
        <div id="usr10">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Labris Dors</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr11">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Veins Mārietis</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="usr12" class="empty">
            <div class="userPicture"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="userName" href="#">Hotto Taksis</a>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>

    <div id="userOther" class="userType empty">
        <div id="usr13">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="usr14">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="usr15">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
    </div>

    <a id="userCreate" class="w3-button w3-round-large" href="{{ route('profile-new') }}">Izveidot lietotāju</a>

</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection