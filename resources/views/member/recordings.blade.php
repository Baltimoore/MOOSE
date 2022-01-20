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

.vidArea > div > textarea {
    height: 100px;
    text-align: center;
    resize: vertical;
}
div.editButtons {}
    div.editButtons > button { padding: 5px 15px; margin: 3px 0 }
    div.editButtons > button:first-child { margin-top:10px; }
    div.editButtons > button:last-child { margin-bottom:10px; }
    div.editButtons > .moose-warn { padding: 5px 11px; }
    div.editButtons > .moose-cancel { padding: 5px 13px; }

@endsection

@section('moduleTitle')
Lietotāju saraksts
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="videoWrapper">
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
@endsection

@section('moduleScripts')
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

        editCfrm.setAttribute("onclick", 'editConfirm("'+callerID+'")');
        fatherButtons.getElementsByTagName("button")[0].replaceWith(editCfrm);

        editCncl.setAttribute("onclick", 'editCancel("'+callerID+'")');
        fatherButtons.getElementsByTagName("button")[1].replaceWith(editCncl);
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

        fatherButtons.getElementsByTagName("button")[0].replaceWith(editChange);
        fatherButtons.getElementsByTagName("button")[1].replaceWith(editDelete);
    }
@endsection