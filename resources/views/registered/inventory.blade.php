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

/* pievienošanas pogas uz līnijām */
.addButton {
    position: absolute;
    font-size: 20pt;
    top: -21px;
    right: -20px;
    padding: 0px 12px;
}

/* popup pogas izkārtojums */
#addConfirm { margin: 0 15px 10px; align:right;}

@endsection

@section('moduleTitle')
Inventārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="inventoryWrapper">
    <div id="inventoryEquip" class="inventoryType">
        <button id="addEquip" class="w3-button w3-circle addButton">+</button>
        <div id="inv1">
            <p class="name">Kombinzons (rudens)</p>
            <p class="description">Rudens medību kombinzons; izskaties itkā būtu lapu čupa</p>
            <p class="amount">5 gab.</p>
        </div>
    </div>

    <div id="inventoryTech" class="inventoryType">
        <button id="addTech" class="w3-button w3-circle addButton">+</button>
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
        <button id="addGame" class="w3-button w3-circle addButton"
        onclick="document.getElementById('inventoryAdd').style.display='block'">+</button>
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
        <button id="addBones" class="w3-button w3-circle addButton">+</button>
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
        <button id="addOther" class="w3-button w3-circle addButton">+</button>
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

    <!-- Medījuma pievienošanas logs -->
    <div id="inventoryAdd" class="w3-modal">
        <div class="w3-modal-content w3-card-4">
            <header class="w3-container">
                <span onclick="document.getElementById('inventoryAdd').style.display='none'"
                      class="w3-button w3-circle addButton w3-display-topright">&times;</span>
                <h2 id="addWhat">Pievienot medījumu</h2>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding">
                    <div class="w3-col m7 l9">
                        <label>Inventāra nosaukums</label>
                        <input id="addName" class="w3-input w3-round-large" type="text"
                               value="Meža cūkas ribas">
                    </div>
                    <div class="w3-col m3 l2">
                        <label>Daudzums</label>
                        <input id="addAmount" class="w3-input w3-round-large" type="number"
                               value="15">
                    </div>
                    <div class="w3-col m2 l1">
                        <label>Mērs</label>
                        <select id="addMeasure" class="w3-select w3-round-large" name="option">
                            <option value="" disabled selected>Mērs</option>
                            <option value="gab">gab.</option>
                            <option value="kg">kg</option>
                            <option value="l">l</option>
                        </select>
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-col">
                        <label>Inventāra apraksts</label>
                        <textarea id="addDescription" class="w3-input w3-round-large" style="resize:none">Viena vai divas var būt lauztas</textarea>
                    </div>
                </div>
                
                    <a id="addConfirm" class="w3-button w3-round-large" href="#">Pievienot jaunu inventāru</a>
            </div>
            <footer class="w3-container">
                <p>Palīgteksts atrodas šeit</p>
            </footer>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    // Inventāra pievienošanas popups (tikai medījumam pieslēgts)
    var modal = document.getElementById('inventoryAdd');
@endsection