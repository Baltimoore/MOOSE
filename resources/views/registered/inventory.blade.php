@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - attēlo medību biedrībai piederošo ekipējumu sarakstu
 - - - - - - - - - - - --}}

@section('moduleStyle')
.inventoryWrapper {
    display: grid;
    justify-content: space-evenly;
    grid-template-columns: var(--display-minWidth)-10px;
}

.inventoryType {
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    margin-top: 30px;
    padding: 0 20px;
    display: grid;
}
    .inventoryType > div {
        padding: 0;
        display: grid;
        grid-template-columns: 150px auto 80px 75px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    .inventoryType > div:last-child { border: 0; }

.inventoryType > div > .name {
    font-weight: bold;
}
.inventoryType > div > .amount {
font-style: italic;
}

.empty { display: none!important; }

/* Piešķir visiem lietu konteineriem virsrakstus */
.inventoryType::before {
    font-family: "Montserrat Alternates", sans-serif;
    position: absolute;
    margin-top: -13px;
    padding: 0 5px;
    margin-left: 20px;
    background: #fff;
}
    #inventoryEquip::before { content: 'Ekipējums'; }
    #inventoryTech::before { content: 'Tehnika'; }
    #inventoryGame::before { content: 'Medījums'; }
    #inventoryBones::before { content: 'Kauli'; }
    #inventoryOther::before { content: 'Cits'; }

/* Izliekamies, ka notiktu labošana */
.inventoryType > div:first-child { margin-top: 10px; }
.inventoryType > div:last-child { margin-bottom: 10px; }
.inventoryType > div > div {
    padding: auto 0;
    height: 60px;
    margin: 5px; 
    background: var(--logo-bone-dark);
    border: 1px solid var(--logo-outline);
}
div.amount{padding-top:17px}
div.delete {
    padding:0;
    padding-top:18px;
    font-weight:bold;
    color:var(--logo-fur-light);
    background-color:var(--logo-outline)!important;
}

@endsection

@section('moduleTitle')
Inventārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="inventoryWrapper">
    <div id="inventoryEquip" class="inventoryType">
        <div id="inv1">
            <div class="name">Kombinzons (rudens)</div>
            <div class="description">Rudens medību kombinzons; izskaties itkā būtu lapu čupa</div>
            <div class="amount">5</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>

    <div id="inventoryTech" class="inventoryType">
        <div id="inv4">
            <div class="name">Piekabe (skārda)</div>
            <div class="description">Tā prastā piekabe bez jumta kur samest liekos štruntus</div>
            <div class="amount">1</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="inv5">
            <div class="name">Piekabe (sarkanā)</div>
            <div class="description">Piekabe ar jumtu, kur parasti liekam uzšķērstos dzīvniekus no medībām</div>
            <div class="amount">1</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="inv6">
            <div class="name">Saldētava</div>
            <div class="description">Guļamkastes kurās uzturam pārdodamos gaļas gabalus</div>
            <div class="amount">3</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>
    
    <div id="inventoryGame" class="inventoryType">
        <div id="inv7">
            <div class="name">Brieža ciska</div>
            <div class="description">Brieža ciska kas brieža ciska</div>
            <div class="amount">8</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="inv8">
            <div class="name">Zaķa āda</div>
            <div class="description">Nodīrāta zaķa āda. Nekādu caurumu nav.</div>
            <div class="amount">1</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="inv9">
            <div class="name">Stirnas plauša</div>
            <div class="description">Nav glīts gabals, bet ir ēdams.</div>
            <div class="amount">2</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="invx">
            <div class="name">Meža cūkas ribas</div>
            <div class="description">Viena vai divas var būt lauztas</div>
            <div class="amount">15</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>

    <div id="inventoryBones" class="inventoryType">
        <div id="inv10">
            <div class="name">Brieža ragi</div>
            <div class="description">3 gadus veca buka nomestie ragi. Galvaskausa nav.</div>
            <div class="amount">1</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
        <div id="inv11">
            <div class="name">Mežacūkas kāja (ar spalvu)</div>
            <div class="description">Laba suņa graužammanta.</div>
            <div class="amount">3</div>
            <div class="delete w3-button w3-round-large">Dzēst</div>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection