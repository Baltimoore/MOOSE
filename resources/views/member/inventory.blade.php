@extends('member.base')

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
        grid-template-columns: 150px auto 80px 75px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    .inventoryType > div:last-child { border: 0; }

.inventoryType > div > .invName { font-weight: bold; }
.inventoryType > div > .invAmnt { font-style: italic; }

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
#addConfirm { margin: 0 15px 10px; align:right; }

/* Izliekamies, ka notiktu labošana */
.inventoryType > div { min-height: 100px; }
.inventoryType > div > textarea {
    height: 70px;
    text-align: center;
}
    textarea.invName { resize: none; width: 125px; }
    textarea.invDesc { resize: vertical; }
    input.invAmnt {
        height:30px;
        width: 60px;
        margin-left:10px;
    }

div.edit {
    padding: 20px 0;
    font-weight:bold;
}
div.editButtons {}
    div.editButtons > button { padding: 5px 15px; margin: 3px 0 }
    div.editButtons > button:first-child { margin-top:10px; }
    div.editButtons > button:last-child { margin-bottom:10px; }
    div.editButtons > .moose-warn { padding: 5px 11px; }
    div.editButtons > .moose-cancel { padding: 5px 13px; }
@endsection

@section('moduleTitle')
Inventārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="inventoryWrapper">
    <div id="inventoryEquip" class="inventoryType">
        <button id="addEquip" class="w3-button w3-circle addButton" onclick='addInventory("Equip")'>+</button>
        <div id="inv1">
            <p class="invName">Kombinzons (rudens)</p>
            <p class="invDesc">Rudens medību kombinzons; izskaties itkā būtu lapu čupa</p>
            <p class="invAmnt">5 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv1")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>

    <div id="inventoryTech" class="inventoryType">
        <button id="addTech" class="w3-button w3-circle addButton" onclick='addInventory("Tech")'>+</button>
        <div id="inv4">
            <p class="invName">Piekabe (skārda)</p>
            <p class="invDesc">Tā prastā piekabe bez jumta kur samest liekos štruntus kurus nav bail atstāt brīvā gaisā</p>
            <p class="invAmnt">1 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv4")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv5">
            <p class="invName">Piekabe (sarkanā)</p>
            <p class="invDesc">Piekabe ar jumtu, kur parasti liekam uzšķērstos dzīvniekus no medībām</p>
            <p class="invAmnt">1 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv5")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv6">
            <p class="invName">Saldētava</p>
            <p class="invDesc">Guļamkastes ko Dāvids paķēra pa lēto izsolē; paturam tajā pārdodamos gaļas gabalus</p>
            <p class="invAmnt">3 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv6")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>
    
    <div id="inventoryGame" class="inventoryType">
        <button id="addGame" class="w3-button w3-circle addButton" onclick='addInventory("Game")'>+</button>
        <div id="inv7">
            <p class="invName">Brieža ciska</p>
            <p class="invDesc">Brieža ciska kas brieža ciska</p>
            <p class="invAmnt">8 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv7")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv8">
            <p class="invName">Zaķa āda</p>
            <p class="invDesc">Nodīrāta zaķa āda. Apstrādāta tikai tik tālu ka visa gaļa no tās nokasīta. Nekādu caurumu nav.</p>
            <p class="invAmnt">1 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv8")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv9">
            <p class="invName">Stirnas plauša</p>
            <p class="invDesc">Nav tas smukākais gadījums, bet nav nekādas ložu driskas, tā kādroši var cept pankūku.</p>
            <p class="invAmnt">2 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv9")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>

    <div id="inventoryBones" class="inventoryType">
        <button id="addBones" class="w3-button w3-circle addButton" onclick='addInventory("Bones")'>+</button>
        <div id="inv10">
            <p class="invName">Brieža ragi</p>
            <p class="invDesc">3 gadus veca buka nomestie ragi ko atradām mežā. Galvaskausa šiem līdzi nebūs</p>
            <p class="invAmnt">1 pāris</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv10")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv11">
            <p class="invName">Mežacūkas kāja (ar spalvu)</p>
            <p class="invDesc">Laba lieta ko dot savam suņam grauzt. Sīkas gaļas driskas varbūt pie šīm ir palikušās.</p>
            <p class="invAmnt">3 gab.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("inv11")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>

    <div id="inventoryOther" class="inventoryType empty">
        <button id="addOther" class="w3-button w3-circle addButton" onclick='addInventory("Other")'>+</button>
        <div id="inv13">
            <p class="invName"></p>
            <p class="invDesc"></p>
            <p class="invAmnt"></p>
        </div>
        <div id="inv14">
            <p class="invName"></p>
            <p class="invDesc"></p>
            <p class="invAmnt"></p>
        </div>
        <div id="inv15">
            <p class="invName"></p>
            <p class="invDesc"></p>
            <p class="invAmnt"></p>
        </div>
    </div>

    <!-- Medījuma pievienošanas logs -->
    <div id="inventoryAdd" class="empty">
        <div class="w3-modal-content w3-card-4">
            <header class="w3-container">
                <span class="w3-button w3-circle addButton w3-display-topright"
                      onclick='document.getElementById("inventoryAdd").setAttribute("class", "empty")'>&times;</span>
                <h2 id="addWhat">Pievienot lietiņu</h2>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding">
                    <div class="w3-col m7 l9">
                        <label>Inventāra nosaukums</label>
                        <input id="addName" class="w3-input w3-round-large" type="text" required>
                    </div>
                    <div class="w3-col m3 l2">
                        <label>Daudzums</label>
                        <input id="addAmount" class="w3-input w3-round-large" type="number" required>
                    </div>
                    <div class="w3-col m2 l1">
                        <label>Mērs</label>
                        <select id="addMeasure" class="w3-select w3-round-large" name="option" required>
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
                        <textarea id="addDescription" class="w3-input w3-round-large" style="resize:none"></textarea>
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
    // Inventāra pievienošanas dialoga parādīšanās, un
    // Inventāra pievienošanas dialoga pielāgošana, atkarība no kurienes izsaukts.
        function addInventory(callerID) {
            var modal = document.getElementById('inventoryAdd');
            modal.setAttribute("class", "w3-modal");
            modal.setAttribute("style", "display:block");
            modal = modal.getElementsByTagName("h2")[0];
            var title = modal.innerHTML;
            console.log(title);
            // Baigi garais paskaidrojums: Sākumā nolasa dialoga virsraksta tekstu ("Pievienot "),
            // tam pievieno sadaļas virstakstu bez pēdējā burta.
            // Noņemnto burtu aizvieto ar 'u', veidojot vārda akuzatīva (atbild uz jautājumu 'ko?') formu.
            title = title.substr(0, title.indexOf(' ')+1) + 
                    getComputedStyle(document.getElementById(("inventory"+callerID).toString()), ':before').getPropertyValue('content').toString().slice(1, -2).toLowerCase() + 'u';
            console.log(title);
            modal.innerHTML = title;
        }



    // Labošanas funkcionalitātes ārējie mainīgie
        const valuesOld = [];
        const valuesNew = [];
    // Labošanā izmantoto pogu definīcijas
    // (lai nav atkārtoti jāveido tās katru reizi kā notiek izmaiņas)
        const editCfrm = document.createElement('button');
        editCfrm.setAttribute("class", "moose-warn w3-button w3-round-large");
        editCfrm.innerHTML = "Mainīt";
        // --- 
        const editCncl = document.createElement('button');
        editCncl.setAttribute("class", "moose-cancel w3-button w3-round-large");
        editCncl.innerHTML = "Atcelt";
        // ---
        const editChange = document.createElement('button');
        editChange.setAttribute("class", "w3-button w3-round-large");
        editChange.innerHTML = "Labot";
        // ---
        const editDelete = document.createElement('button');
        editDelete.setAttribute("class", "moose-delete w3-button w3-round-large");
        editDelete.innerHTML = "Dzēst";

    // Pārveido tekstus uz labojamiem laukiem, un nomaina pogas
    function editFields(callerID) {
        // Atlasa aprakstus, kurus jāmaina par ievadlaukiem
        callerID = callerID.toString();
        var father = document.getElementById(callerID);
        var name = father.getElementsByTagName("p")[0];
        var desc = father.getElementsByTagName("p")[1];
        var amnt = father.getElementsByTagName("p")[2];

        // Saglabā oriģinālās vērtības
        valuesOld[callerID+"name"] = name.innerHTML;
        valuesOld[callerID+"desc"] = desc.innerHTML;
        valuesOld[callerID+"amnt"] = amnt.innerHTML;
        console.log(valuesOld);

        // Pārveido aprakstus uz ievadlaukiem
        var editName = document.createElement('textarea');
        editName.setAttribute("class", "invName w3-input w3-round-large");
        editName.setAttribute("type", "text");
        editName.innerHTML = name.innerHTML;

        var editDesc = document.createElement('textarea');
        editDesc.setAttribute("class", "invDesc w3-input w3-round-large");
        editDesc.setAttribute("type", "text");
        editDesc.innerHTML = desc.innerHTML;

        var editAmnt = document.createElement('input');
        editAmnt.setAttribute("class", "invAmnt w3-input w3-round-large");
        editAmnt.setAttribute("type", "number");
        editAmnt.setAttribute("value", amnt.innerHTML.match(/\d+/));

        // Aizvieto teksta laukus uz labojamiem laukiem
        name.replaceWith(editName);
        desc.replaceWith(editDesc);
        amnt.replaceWith(editAmnt);

        // Nomaina pogas   "Labot" un "Dzēst"   uz   "Mainīt" un "Atcelt"
        var fatherButtons = father.getElementsByClassName("editButtons")[0];

        var insert = editCfrm.cloneNode(true);
        insert.setAttribute("onclick", 'editConfirm("'+callerID+'")');
        fatherButtons.getElementsByTagName("button")[0].replaceWith(insert);

        var insert = editCncl.cloneNode(true);
        insert.setAttribute("onclick", 'editCancel("'+callerID+'")');
        fatherButtons.getElementsByTagName("button")[1].replaceWith(insert);
    }

    // Saglabā ievadītos datus par izmaiņām
    function editConfirm(callerID) {
        // Atlasa ievadlaukus, no kuriem jāievāc dati
        callerID = callerID.toString();
        var father = document.getElementById(callerID);
        var name = father.getElementsByTagName("textarea")[0];
        var desc = father.getElementsByTagName("textarea")[1];
        var amnt = father.getElementsByTagName("input")[0];

        // Nosūtīšana uz datubāzi
        valuesNew[callerID+"name"] = name.value;
        valuesNew[callerID+"desc"] = desc.value;
        valuesNew[callerID+"amnt"] = amnt.value;
        console.log(valuesNew);
            // Ievieto skriptu, kas ievieto nolasītos datus DB, kad tā uzstādīta
        
        // Pārveidošana uz prastiem teksta blāķiem
        var updatedName = document.createElement('p');
        updatedName.setAttribute("class", "invName");
        updatedName.innerHTML = name.value;

        var updatedDesc = document.createElement('p');
        updatedDesc.setAttribute("class", "invDesc");
        updatedDesc.innerHTML = desc.value;

        var updatedAmnt = document.createElement('p');
        updatedAmnt.setAttribute("class", "invAmnt");
        updatedAmnt.innerHTML = amnt.value + 
            valuesOld[callerID+"amnt"].substring(valuesOld[callerID+"amnt"].indexOf(' '));

        // Pārveidojam ievadlaukus uz teksta blāķiem
        name.replaceWith(updatedName);
        desc.replaceWith(updatedDesc);
        amnt.replaceWith(updatedAmnt);

        // pogu labotājfunkcija
        editButtons(callerID);
    }

    // Atceļ labošanas mainīgos, un atgriež iepriekšējos saglabātos datus
    function editCancel(callerID) {
        // Atlasa ievadlaukus, no kuriem jāievāc dati
        callerID = callerID.toString();
        var father = document.getElementById(callerID);
        var name = father.getElementsByTagName("textarea")[0];
        var desc = father.getElementsByTagName("textarea")[1];
        var amnt = father.getElementsByTagName("input")[0];
        
        // Teksta blāķu izveide
        var updatedName = document.createElement('p');
        updatedName.setAttribute("class", "invName");
        updatedName.innerHTML = valuesOld[callerID+"name"];

        var updatedDesc = document.createElement('p');
        updatedDesc.setAttribute("class", "invDesc");
        updatedDesc.innerHTML = valuesOld[callerID+"desc"];

        var updatedAmnt = document.createElement('p');
        updatedAmnt.setAttribute("class", "invDesc");
        updatedAmnt.innerHTML = valuesOld[callerID+"amnt"];

        // Pārveidojam ievadlaukus uz teksta blāķiem
        name.replaceWith(updatedName);
        desc.replaceWith(updatedDesc);
        amnt.replaceWith(updatedAmnt);

        // pogu labotājfunkcija
        editButtons(callerID);
    }

    // Nomaina pogas no "Labot" un "Dzēst" atpakaļ uz "Mainīt" un "Atcelt"
    function editButtons(callerID) {
        var fatherButtons = document.getElementById(callerID).getElementsByClassName("editButtons")[0];

        var insert = editChange.cloneNode(true);
        insert.setAttribute("onclick", 'editFields("'+callerID+'")');
        fatherButtons.getElementsByTagName("button")[0].replaceWith(insert);

        insert = editDelete.cloneNode(true);
        //insert.setAttribute("onclick", 'removeEquip("'+callerID+'")');
        fatherButtons.getElementsByTagName("button")[1].replaceWith(insert);
    }
@endsection