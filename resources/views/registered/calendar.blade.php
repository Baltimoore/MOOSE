@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - Attēlo visas biedrības reģistrētās medības
 - - - - - - - - - - - --}}

@section('moduleStyle')
#calendarWrapper {
    padding: 30px;
    padding-top:15px
}
#calendarController {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
    #calendarController button {
        font-weight: bold;
        background-color: var(--logo-outline);
        color: var(--logo-bone-light);
    }
    #calendarController button:hover {
        background-color: var(--logo-fur-dark)!important;
        color: var(--logo-bone-light)!important;
    }

#calendarContent {
    border: 1px solid var(--logo-fur-dark);
}

#calendarWeekdays, .week {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
}
#calendarWeekdays {
    grid-auto-rows: 30px;
    align-items: center;
    text-align: center;
    font-weight: bold;
    background-color: var(--logo-outline);
    color: var(--logo-bone-light);
}
    #calendarWeekdays div {
        border-right: 1px solid var(--logo-fur-dark);
    }

.week {
    grid-auto-rows: 100px;
    text-align: right;
}
    .day {
        padding: 10px;
        border-right: 1px solid var(--logo-fur-dark);
        border-top: 1px solid var(--logo-fur-dark);
        background-color: var(--logo-bone-light);
    }
    .day:last-child, #calendarWeekdays div:last-child { border-right:0 }

    .otherMonth {
        background-color: var(--logo-bone-dark);
    }

.date {
    background-color: var(--logo-outline);
    color: var(--logo-bone-light);
    padding: 5px;
    text-align: center;
	width: 33px;
	border-radius: 50%;
    float: right;
}
@endsection

@section('moduleTitle')
Medību kalendārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}    
    <h1>Šeit atrodas visu moduļu mazākas sadaļas</h1>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection