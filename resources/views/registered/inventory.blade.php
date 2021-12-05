@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - attēlo medību biedrībai piederošo ekipējumu sarakstu
 - - - - - - - - - - - --}}

@section('moduleStyle')

.inventoryType {
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    margin: 30px 15px;
    padding: 0 20px;
    display: grid;
}
    .inventoryType > div {
        padding: 0;
        display: grid;
        grid-template-columns: 150px auto 80px;
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

@endsection

@section('moduleTitle')
Inventārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="inventoryWrapper">
    <div id="inventoryEquip" class="inventoryType">
        <div id="inv1">
            <p class="name">Kombinzons (rudens)</p>
            <p class="description">Rudens medību kombinzons; izskaties itkā būtu lapu čupa</p>
            <p class="amount">5 gab.</p>
        </div>
    </div>

    <div id="inventoryTech" class="inventoryType">
        <div id="inv4">
            <p class="name">Piekabe (skārda)</p>
            <p class="description">Tā prastā piekabe bez jumta kur samest liekos štruntus kurus nav bail atstāt brīvā gaisā</p>
            <p class="amount">1 gab.</p>
        </div>
        <div id="inv5">
            <p class="name">Piekabe (sarkanā)</p>
            <p class="description">Piekabe ar jumtu, kur parasti liekam uzšķērstos dzīvniekus no medībām</p>
            <p class="amount">1 gab.</p>
        </div>
        <div id="inv6">
            <p class="name">Saldētava</p>
            <p class="description">Guļamkastes ko Dāvids paķēra pa lēto izsolē; paturam tajā pārdodamos gaļas gabalus</p>
            <p class="amount">3 gab.</p>
        </div>
    </div>
    
    <div id="inventoryGame" class="inventoryType">
        <div id="inv7">
            <p class="name">Brieža ciska</p>
            <p class="description">Brieža ciska kas brieža ciska</p>
            <p class="amount">8 gab.</p>
        </div>
        <div id="inv8">
            <p class="name">Zaķa āda</p>
            <p class="description">Nodīrāta zaķa āda. Apstrādāta tikai tik tālu ka visa gaļa no tās nokasīta. Nekādu caurumu nav.</p>
            <p class="amount">1 gab.</p>
        </div>
        <div id="inv9">
            <p class="name">Stirnas plauša</p>
            <p class="description">Nav tas smukākais gadījums, bet nav nekādas ložu driskas, tā kādroši var cept pankūku.</p>
            <p class="amount">2 gab.</p>
        </div>
    </div>

    <div id="inventoryBones" class="inventoryType">
        <div id="inv10">
            <p class="name">Brieža ragi</p>
            <p class="description">3 gadus veca buka nomestie ragi ko atradām mežā. Galvaskausa šiem līdzi nebūs</p>
            <p class="amount">1 pāris</p>
        </div>
        <div id="inv11">
            <p class="name">Mežacūkas kāja (ar spalvu)</p>
            <p class="description">Laba lieta ko dot savam suņam grauzt. Sīkas gaļas driskas varbūt pie šīm ir palikušās.</p>
            <p class="amount">3 gab.</p>
        </div>
    </div>

    <div id="inventoryOther" class="inventoryType empty">
        <div id="inv13">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv14">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv15">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
    </div>

</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection