@extends('member.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - kartes skats, kurā caur integrētu google maps(?) dialogu
 - - var pārskatīt biedrībai piederošās medību teritorijas
 - - un to līgumu garumus. administrators var arī pievienot jaunus.
 - - - - - - - - - - - --}}

@section('moduleStyle')
/* pagaidu iemestā attēla formāts*/
#mapInteractive {
    background-color: var(--logo-fur-dark);
    border: 2px solid var(--logo-outline);
    margin: 10px;
    height: 60%;
}
    #mapInteractive > img {
        height: 100%;
        width: 100%;
    }

/* atlasītās teritorijas info gabals */
#mapInfo {
    background-color: var(--logo-bone-light);
    border:2px solid var(--logo-outline);
    margin-top: 30px;
    padding: 10px;
    height:200px
}
    #mapInfo > #recordingsList {
        float: right;
        width: 250px;
    }
    #mapInfo > #mapName {
        font-family: "Montserrat Alternates", sans-serif;
        font-size: 14pt;
    }
    #mapInfo > div > * { display: inline-block; }
    #mapInfo p { line-height:0; }
    #mapInfo > div > label { font-weight: bold; }

/* piešķir medību notikumu sarakstam virsrakstu */
#areaEvents::before {
    font-family: "Montserrat Alternates", sans-serif;
    position: absolute;
    margin-top: -13px;
    padding: 0 5px;
    margin-left: 20px;
    background: #fff;
    content:'Tuvākie teritorijas medību notikumi';
}
/* medību notikumu saraksta saturs */
#areaEvents {
    border: 2px solid var(--logo-outline);
    border-radius: 25px;
    margin: 30px 0;
    padding: 0 10px;
}
    #areaEvents > div {
        padding: 10px 0;
        display: grid;
        grid-template-columns: 130px 150px 250px 100px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    #areaEvents > div:last-child { border: 0; }
    #areaEvents > #eventLegend {
        font-weight: bold;
        border-bottom: 2px dashed var(--logo-fur-dark);
        padding-bottom: 0;
    }
    .eventDescription {
        grid-column: 1 / -1;
        line-height: 1;
    }


@endsection

@section('moduleTitle')
medību teritorijas
@endsection

@section('moduleContent')
    <div id="mapInteractive" style="">
        <img src="/images/map.png" alt="">
    </div>
    <div id="mapInfo" style="">
        <a id="recordingsList" class="w3-button w3-round-large" href="{{ route('recordings') }}">Apskatīt teritorijas ierakstus</a>
        <p id="mapName">Mežs "Zemzariņi"</p>
        <div id="mapArea"><label>Platība:</label> <p>12</p>km&sup2;</div>
        <div id="mapLicense"><label>Medību atļauja sniegta:</label> <a id="licenseOwner">Medību biedrība "Alnis"</a></div>
        <div id="mapLicenseDate"><label>Medību atļaujas termiņš:</label> <p id="licenseDate">2018-2023</p></div>
        <p>papildus teritorijas informācija</p>
    </div>
    <div id="areaEvents">
        <div id="eventLegend">
            <p>Datums</p>
            <p>Medību tips</p>
            <p>Medību vadītājs</p>
            <p>Pieteikties medībām</p>
        </div>
        <div id="evnt1" class="eventInfo">
            <p>14. maijs</p>
            <b>Dzinējmedības</b>
            <a href="#">Alnis Mūsis</a>
            <a class="w3-button w3-round-large" href="#">Pieteikties</a>
            <p class="eventDescription">Sapulcējamies pie nolauztās pastkastes</p>
        </div>
        <div id="evnt2" class="eventInfo">
            <p>21. maijs</p>
            <b>Medības</b>
            <a href="#">Juris Padels</a>
            <a class="w3-button w3-round-large" href="#">Pieteikties</a>
            <p class="eventDescription">Sapulcējamies pie 3. izcirstās gravas no Jaunmuižas ceļa</p>
        </div>
    </div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection