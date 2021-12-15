@extends('registered.base')

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
        grid-template-columns: 80px 150px auto 100px;
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

.empty { display: none!important; }

@endsection

@section('moduleTitle')
Lietotāju saraksts
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="videoWrapper">
    <div id="userHead" class="vidArea">
        <div id="vid1">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">2021-05-23</a>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid2">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">2021-05-16</a>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid3">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">2021-04-30</a>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid4">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">2021-04-08</a>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
        <div id="vid5">
            <div class="videoThumb"><img src="/images/logo.svg" alt="Lietotāja profila attēls"></div>
            <a class="videoName" href="#">2021-03-25</a>
            <p class="videoDescription">baigi lielais video apraksts ar lieliem un svarīgiem vārdiem, teksts aizņems baigi daudz vietas - veselus 500 simbolus, ja no galvas pareizi atminos. tā kā jāaizņem ļoti daudz vietas.</p>
            <div class="edit w3-button w3-round-large">Labot</div>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection