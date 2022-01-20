@extends('base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - administratora biedrības saraksta skats
 - - paziņojumi atradīsies atsevišķos failos
 - - - - - - - - - - - --}}

@section('globalStyles')
#logo {
    font-size: 4vh;
    font-weight: bold;
    padding: 10px;
    background-color: var(--logo-fur-light);
    color: var(--logo-outline);
}
    #logo img {
        height: 8vh;
        max-height: 100px;
        max-width: 100px;
    }
/* -------------------------------------------- */
#societyList {
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    margin: 30px 15px;
    padding: 0 20px;
    display: grid;
}
    #societyList > div {
        padding: 10px 0;
        display: grid;
        grid-template-columns: auto 125px 115px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    #societyList > div:last-child { border: 0; }

.socName { font-weight: bold; }

#societyList > div > textarea {
    height: 50px;
    width: 350px;
    text-align: center;
    resize: vertical;
}

/* Pogu izmēri */
#societyList > div > button {
    width: 110px;
    margin: 3px 0
}

/* Biedrības pievienošanas poga */
#societyCreate {
    margin-top:15px;
    margin-bottom:-15px;
    width:100%;
}

/* Popup aizvēršanas poga */
.addButton {
    position: absolute;
    font-size: 20pt;
    top: -21px;
    right: -20px;
    padding: 0px 12px;
}
/* -------------------------------------------- */
@yield('popupStyle')
@endsection

@section('title')
MOOSE sistēma @yield('popupTitle')
@endsection

@section('navbar')
    <div id="logo">
        <label>
            <img src="/images/logo.svg" alt="Sistēmas logo">
            Administratora skats
        </label>
    </div>
@endsection

@section('content')
<div id="adminWrapper">
    <a id="societyCreate" class="w3-button w3-round-large"
        onclick="document.getElementById('videoAdd').setAttribute('style','display:block;')">Reģistrēt jaunu biedrību</a>

    <div id="societyList">
        <div id="soc1">
            <p class="socName">Mednieku biedrība "Alnis"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc1")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc2">
            <p class="socName">Mednieku organizācija "Briedis</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc2")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc3">
            <p class="socName">Mednieku klubs "Vērši"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc3")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc4">
            <p class="socName">Mednieku biedrība "Bebrs"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc4")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc5">
            <p class="socName">Medību pulks "Savanna"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc5")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc6">
            <p class="socName">Mednieku biedrība "Mežacūka"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc6")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc7">
            <p class="socName">Medību kolektīvs "Lapsa"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc7")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc8">
            <p class="socName">Medību sanāksme "Lūši"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc8")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc9">
            <p class="socName">Studentu medību sapulce "Poters ar Bisi"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc9")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc10">
            <p class="socName">Mednieku kolektīvs "Ilkniz"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc10")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
        <div id="soc11">
            <p class="socName">Gvido Hotuļeva biedrība "Pusmūžā"</p>
            <button class="w3-button w3-round-large" onclick='editFields("soc11")'>Pārdēvēt</button>
            <button class="moose-delete w3-button w3-round-large">Dzēst</button>
        </div>
    </div>
</div>

<div id="videoAdd" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
        <header class="w3-container">
            <span class="w3-button w3-circle addButton w3-display-topright"
                onclick='document.getElementById("videoAdd").setAttribute("style", "")'>&times;</span>
            <h2 id="addWhat">Pievienot ierakstu</h2>
        </header>
        <div class="w3-container">
            <div class="w3-row-padding">
                <div class="w3-col m6 l10">
                    <label>Ieraksta uzņemšanas datums</label>
                    <input id="addDate" class="w3-input w3-round-large" type="date" required>
                </div>
                <div class="w3-col m6 l2">
                    <label>Pievienot video failu</label>
                    <input id="addFile" class="w3-input w3-round-large" type="file" accept=".mp4" required>
                </div>
            </div>
            <div class="w3-row-padding">
                <div class="w3-col">
                    <label>Video ieraksta apraksts</label>
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
@yield('popupContent')
@endsection

@section('scripts')
// Labošanas funkcionalitātes ārējie mainīgie
    const valuesOld = [];
    const valuesNew = [];
// Labošanā izmantoto pogu definīcijas
// (lai nav atkārtoti jāveido tās katru reizi kā notiek izmaiņas)
    const editCfrm = document.createElement('button');
    editCfrm.setAttribute("class", "moose-warn w3-button w3-round-large");
    editCfrm.innerHTML = "Apstiprināt";
    // --- 
    const editCncl = document.createElement('button');
    editCncl.setAttribute("class", "moose-cancel w3-button w3-round-large");
    editCncl.innerHTML = "Atcelt";
    // ---
    const editChange = document.createElement('button');
    editChange.setAttribute("class", "w3-button w3-round-large");
    editChange.innerHTML = "Pārdēvēt";
    // ---
    const editDelete = document.createElement('button');
    editDelete.setAttribute("class", "moose-delete w3-button w3-round-large");
    editDelete.innerHTML = "Dzēst";

    // Pārveido tekstu uz labojamu lauku, un nomaina pogas
function editFields(callerID) {
    // Atlasa biedrības nosaukumu, kas jāmaina par ievadlauku
    callerID = callerID.toString();
    var father = document.getElementById(callerID);
    var name = father.getElementsByTagName("p")[0];

    // Saglabā oriģinālās vērtības
    valuesOld[callerID+"name"] = name.innerHTML;
    console.log(valuesOld);

    // Pārveido aprakstus uz ievadlaukiem
    var editName = document.createElement('textarea');
    editName.setAttribute("class", "w3-input w3-round-large");
    editName.setAttribute("type", "text");
    editName.innerHTML = name.innerHTML;

    // Aizvieto teksta laukus uz labojamiem laukiem
    name.replaceWith(editName);

    // Nomaina pogas   "Labot" un "Dzēst"   uz   "Mainīt" un "Atcelt"
    var insert = editCfrm.cloneNode(true);
    insert.setAttribute("onclick", 'editConfirm("'+callerID+'")');
    father.getElementsByTagName("button")[0].replaceWith(insert);

    var insert = editCncl.cloneNode(true);
    insert.setAttribute("onclick", 'editCancel("'+callerID+'")');
    father.getElementsByTagName("button")[1].replaceWith(insert);
}

// Saglabā ievadītos datus par izmaiņām
function editConfirm(callerID) {
    // Atlasa ievadlaukus, no kuriem jāievāc dati
    callerID = callerID.toString();
    var father = document.getElementById(callerID);
    var name = father.getElementsByTagName("textarea")[0];

    // Nosūtīšana uz datubāzi
    valuesNew[callerID+"name"] = name.value;
    console.log(valuesNew);
        // Ievieto skriptu, kas ievieto nolasītos datus DB, kad tā uzstādīta
    
    // Pārveidošana uz prastu teksta blāķi
    var updatedDesc = document.createElement('p');
    updatedDesc.setAttribute("class", "socName");
    updatedDesc.innerHTML = name.value;

    // Pārveidojam ievadlauku uz teksta blāķi
    name.replaceWith(updatedDesc);

    // pogu labotājfunkcija
    editButtons(callerID);
}

// Atceļ labošanas mainīgos, un atgriež iepriekšējos saglabātos datus
function editCancel(callerID) {
    // Atlasa ievadlauku, no kura jāievāc dati
    callerID = callerID.toString();
    var father = document.getElementById(callerID);
    var name = father.getElementsByTagName("textarea")[0];
    
    // Teksta blāķa izveide
    var updatedDesc = document.createElement('p');
    updatedDesc.setAttribute("class", "socName");
    updatedDesc.innerHTML = valuesOld[callerID+"name"];

    // Pārveidojam ievadlauku uz teksta blāķi
    name.replaceWith(updatedDesc);

    // pogu labotājfunkcija
    editButtons(callerID);
}

// Nomaina pogas no "Labot" un "Dzēst" atpakaļ uz "Mainīt" un "Atcelt"
function editButtons(callerID) {
    var father = document.getElementById(callerID);

    var insert = editChange.cloneNode(true);
    insert.setAttribute("onclick", 'editFields("'+callerID+'")');
    father.getElementsByTagName("button")[0].replaceWith(insert);

    insert = editDelete.cloneNode(true);
    //insert.setAttribute("onclick", 'removeEquip("'+callerID+'")');
    father.getElementsByTagName("button")[1].replaceWith(insert);
}
@yield('popupScripts')
@endsection