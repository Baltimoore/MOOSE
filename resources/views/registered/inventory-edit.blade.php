@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - attēlo medību biedrībai piederošo ekipējumu sarakstu
 - - - - - - - - - - - --}}

@section('moduleStyle')

.inventoryType {
    position: relative;
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    margin: 30px 15px;
    padding: 0 20px;
    display: grid;
}
    .inventoryType > div {
        padding: 10px 0;
        display: grid;
        grid-template-columns: 150px auto 80px 75px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    .inventoryType > div:last-child { border: 0; }

.inventoryType > div > .invName { font-weight: bold; }
.inventoryType > div > .invAmount { font-style: italic; }

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
.inventoryType > div { min-height: 100px; }
.inventoryType > div > textarea {
    height: 70px;
    text-align: center;
}
    textarea.invName { resize: none; width: 125px; }
    textarea.invDescription { resize: vertical; }
    input.invAmount {
        height:30px;
        width: 60px;
        margin-left:10px;
    }

div.edit {
    padding: 20px 0;
    font-weight:bold;
}
div.editButtons {}
    div.editButtons > button { padding: 5px 15px; }
    div.editButtons > .editUpdate { margin-bottom: 5px; }
    div.editButtons > .editRemove:hover {  }

@endsection

@section('moduleTitle')
Inventāra labošana
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="inventoryWrapper">
    <div id="inventoryEquip" class="inventoryType">
        <div id="inv1">
            <p class="invName">Kombinzons (rudens)</p>
            <p class="invDescription">Rudens medību kombinzons; izskaties itkā būtu lapu čupa</p>
            <p class="invAmount">5 gab.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
    </div>

    <div id="inventoryTech" class="inventoryType">
        <div id="inv4">
            <textarea class="invName w3-input w3-round-large" type="text">Piekabe (skārda)</textarea>
            <textarea class="invDescription w3-input w3-round-large" type="text">Tā prastā piekabe bez jumta kur samest liekos štruntus</textarea>
            <input class="invAmount w3-input w3-round-large" type="number" value="1">
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv5">
            <p class="invName">Piekabe (sarkanā)</p>
            <p class="invDescription">Piekabe ar jumtu, kur parasti liekam uzšķērstos dzīvniekus no medībām</p>
            <p class="invAmount">1 gab.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="inv6">
            <textarea class="invName w3-input w3-round-large" type="text">Saldētava</textarea>
            <textarea class="invDescription w3-input w3-round-large" type="text">Guļamkastes kurās uzturam pārdodamos gaļas gabalus</textarea>
            <input class="invAmount w3-input w3-round-large" type="number" value="3">
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>
    
    <div id="inventoryGame" class="inventoryType">
        <div id="inv7">
            <p class="invName">Brieža ciska</p>
            <p class="invDescription">Brieža ciska kas brieža ciska</p>
            <p class="invAmount">8 gab.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="inv8">
            <textarea class="invName w3-input w3-round-large" type="text">Zaķa āda</textarea>
            <textarea class="invDescription w3-input w3-round-large" type="text">Nodīrāta zaķa āda. Nekādu caurumu nav.</textarea>
            <input class="invAmount w3-input w3-round-large" type="number" value="1">
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv9">
            <textarea class="invName w3-input w3-round-large" type="text">Stirnas plauša</textarea>
            <textarea class="invDescription w3-input w3-round-large" type="text">Nav glīts gabals, bet ir ēdams.</textarea>
            <input class="invAmount w3-input w3-round-large" type="number" value="2">
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="invx">
            <div class="invName">Meža cūkas ribas</div>
            <div class="invDescription">Viena vai divas var būt lauztas</div>
            <div class="invAmount">15 gab</div>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
    </div>

    <div id="inventoryBones" class="inventoryType">
        <div id="inv10">
            <textarea class="invName w3-input w3-round-large" type="text">Brieža ragi</textarea>
            <textarea class="invDescription w3-input w3-round-large" type="text">3 gadus veca buka nomestie ragi. Galvaskausa nav.</textarea>
            <input class="invAmount w3-input w3-round-large" type="number" value="1">
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv11">
            <textarea class="invName w3-input w3-round-large" type="text">Mežacūkas kāja (ar spalvu)</textarea>
            <textarea class="invDescription w3-input w3-round-large" type="text">Laba suņa graužammanta.</textarea>
            <input class="invAmount w3-input w3-round-large" type="number" value="3">
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection