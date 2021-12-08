@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - kartes skats, kurā caur integrētu google maps(?) dialogu
 - - var pārskatīt biedrībai piederošās medību teritorijas
 - - un to līgumu garumus. administrators var arī pievienot jaunus.
 - - - - - - - - - - - --}}

@section('moduleStyle')
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
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection