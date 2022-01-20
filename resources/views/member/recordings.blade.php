@extends('member.base')

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
        grid-template-columns: 80px 100px auto 100px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    .vidArea > div:last-child { border: 0; }

.videoThumb {  }
    .videoThumb > img {
        object-fit: cover;
        width: 70px;
        height: 40px;
        background-color: var(--logo-fur-light);
    }
.videoName {
    font-weight: bold;
}
textarea { height: 100px; }
.vidArea > div > textarea {
    text-align: center;
    resize: vertical;
}

/* Pogu izmēri */
    div.editButtons > button { padding: 5px 15px; margin: 3px 0 }
    div.editButtons > button:first-child { margin-top: 10px; }
    div.editButtons > button:last-child, #addConfirm { margin-bottom: 10px; }
    div.editButtons > .moose-warn { padding: inherit 11px; }
    div.editButtons > .moose-cancel { padding: inherit 13px; }

/* Videoieraksta pievienošanas poga */
#userCreate {
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
@endsection

@section('moduleTitle')
Lietotāju saraksts
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="videoWrapper">
    <a id="userCreate" class="w3-button w3-round-large"
    onclick="document.getElementById('videoAdd').setAttribute('style','display:block;')">Augšupielādēt jaunu ierakstu</a>

    <div id="userHead" class="vidArea">
        <div id="vid1">
            <div class="videoThumb">
                <img src="/images/logo.svg" alt="Lietotāja profila attēls">
                <a href="#">Skatīt ierakstu</a>
            </div>
            <p class="videoName">2021-05-23</p>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("vid1")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="vid2">
            <div class="videoThumb">
                <img src="/images/logo.svg" alt="Lietotāja profila attēls">
                <a href="#">Skatīt ierakstu</a>
            </div>
            <p class="videoName">2021-05-16</p>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("vid2")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="vid3">
            <div class="videoThumb">
                <img src="/images/logo.svg" alt="Lietotāja profila attēls">
                <a href="#">Skatīt ierakstu</a>
            </div>
            <p class="videoName">2021-04-31</p>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("vid3")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="vid4">
            <div class="videoThumb">
                <img src="/images/logo.svg" alt="Lietotāja profila attēls">
                <a href="#">Skatīt ierakstu</a>
            </div>
            <p class="videoName">2021-04-07</p>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("vid4")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="vid5">
            <div class="videoThumb">
                <img src="/images/logo.svg" alt="Lietotāja profila attēls">
                <a href="#">Skatīt ierakstu</a>
            </div>
            <p class="videoName">2021-03-28</p>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="editButtons">
                <button class="w3-button w3-round-large" onclick='editFields("vid5")'>Labot</button>
                <button class="moose-delete w3-button w3-round-large">Dzēst</button>
            </div>
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
@endsection

@section('moduleScripts')
    //

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

    // Pārveido tekstu uz labojamu lauku, un nomaina pogas
    function editFields(callerID) {
        // Atlasa aprakstu, kas jāmaina par ievadlauku
        callerID = callerID.toString();
        var father = document.getElementById(callerID);
        var desc = father.getElementsByTagName("p")[1];

        // Saglabā oriģinālās vērtības
        valuesOld[callerID+"desc"] = desc.innerHTML;
        console.log(valuesOld);

        // Pārveido aprakstus uz ievadlaukiem
        var editDesc = document.createElement('textarea');
        editDesc.setAttribute("class", "invDesc w3-input w3-round-large");
        editDesc.setAttribute("type", "text");
        editDesc.innerHTML = desc.innerHTML;

        // Aizvieto teksta laukus uz labojamiem laukiem
        desc.replaceWith(editDesc);

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
        var desc = father.getElementsByTagName("textarea")[0];

        // Nosūtīšana uz datubāzi
        valuesNew[callerID+"desc"] = desc.value;
        console.log(valuesNew);
            // Ievieto skriptu, kas ievieto nolasītos datus DB, kad tā uzstādīta
        
        // Pārveidošana uz prastu teksta blāķi
        var updatedDesc = document.createElement('p');
        updatedDesc.setAttribute("class", "invDesc");
        updatedDesc.innerHTML = desc.value;

        // Pārveidojam ievadlauku uz teksta blāķi
        desc.replaceWith(updatedDesc);

        // pogu labotājfunkcija
        editButtons(callerID);
    }

    // Atceļ labošanas mainīgos, un atgriež iepriekšējos saglabātos datus
    function editCancel(callerID) {
        // Atlasa ievadlauku, no kura jāievāc dati
        callerID = callerID.toString();
        var father = document.getElementById(callerID);
        var desc = father.getElementsByTagName("textarea")[0];
        
        // Teksta blāķa izveide
        var updatedDesc = document.createElement('p');
        updatedDesc.setAttribute("class", "invDesc");
        updatedDesc.innerHTML = valuesOld[callerID+"desc"];

        // Pārveidojam ievadlauku uz teksta blāķi
        desc.replaceWith(updatedDesc);

        // pogu labotājfunkcija
        editButtons(callerID);
    }

    // Nomaina pogas no "Labot" un "Dzēst" atpakaļ uz "Mainīt" un "Atcelt"
    function editButtons(callerID) {
        var fatherButtons = document.getElementById(callerID).getElementsByClassName("editButtons")[0];
        editChange.setAttribute("onclick", 'editFields("'+callerID+'")');
        //editChange.setAttribute("onclick", 'removeEquip("'+callerID+'")');
        var insert = editChange.cloneNode(true);
        fatherButtons.getElementsByTagName("button")[0].replaceWith(insert);
        insert = editDelete.cloneNode(true);
        fatherButtons.getElementsByTagName("button")[1].replaceWith(insert);
    }
@endsection