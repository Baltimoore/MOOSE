@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - attēlo visus medību biedrībā reģistrētos lietotājus
 - - - - - - - - - - - --}}

@section('moduleStyle')

.vidArea {
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    margin: 30px 15px;
    padding: 0 20px;
    display: grid;
}
    .vidArea > div {
        padding: 10px 0;
        display: grid;
        grid-template-columns: 100px 300px auto 100px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    .vidArea > div:last-child { border: 0; }

.videoThumb {  }
    .videoThumb > img {
        object-fit: cover;
        width: 40px;
        height: 40px;
        background-color: var(--logo-fur-light);
        border-radius: 50%;
    }
.videoName {
    font-weight: bold;
}

.empty { display: none!important; }

/* Piešķir visiem vietu konteineriem virsrakstus */
.vidArea::before {
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

@endsection

@section('moduleTitle')
Lietotāju saraksts
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="videoWrapper">
    <div id="userHead" class="vidArea">
        <div id="vid1">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Alnis Mūsis</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
    </div>

    <div id="userHand" class="vidArea">
        <div id="vid2">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Juris Padels</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid3">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Miķelis Zindars</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
    </div>
    
    <div id="userGun" class="vidArea">
        <div id="vid4">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Dāvids Lurjevs</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid5">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Storks Stārķis</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid6">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Bēre Lāce</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid7">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Vofs Vilks</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid8">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Foksis Lapsa</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid9">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Bevers Bebris</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
    </div>

    <div id="userRun" class="vidArea">
        <div id="vid10">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Labris Dors</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid11">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Veins Mārietis</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid12" class="empty">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">Hotto Taksis</a>
            <p class="videoDescription"></p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
    </div>

</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection