@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - attēlo medību biedrībai piederošo ekipējumu sarakstu
 - - - - - - - - - - - --}}

@section('moduleStyle')
/* Globālie moduļa izskata mainīgie */
@endsection

@section('moduleTitle')
Inventārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="inventoryWrapper">
    <div id="inventoryEquip">
        <div id="inv1">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv2">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv3">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
    </div>

    <div id="inventoryTech">
        <div id="inv4">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv5">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv6">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
    </div>
    
    <div id="inventoryGame">
        <div id="inv7">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv8">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv9">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
    </div>

    <div id="inventoryBones">
        <div id="inv10">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv11">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
        <div id="inv12">
            <p class="name"></p>
            <p class="description"></p>
            <p class="amount"></p>
        </div>
    </div>

    <div id="inventoryOther">
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