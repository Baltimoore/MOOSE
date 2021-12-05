@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - Attēlo visas biedrības reģistrētās medības
 - - - - - - - - - - - --}}

@section('moduleStyle')
#calendarWrapper {
    padding: 30px;
    padding-top: 15px;
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

div.day > div.date {
    background-color: var(--logo-outline);
    color: var(--logo-bone-light);
    padding: 5px;
    text-align: center;
	width: 33px;
	border-radius: 50%;
    float: right;
}

/* Medību info lietas */
div.day > div.date.hunt {
    background-color: firebrick;
}

.date > .w3-dropdown-content {
    background-color: var(--logo-fur-light);
    width: 200px;
    padding: 10px;
    grid-template-columns: 50px auto;
}

.date.w3-dropdown-hover:hover > .w3-dropdown-content {
    display: grid;
}
.date > .w3-dropdown-content > label { text-align:left; }
.date > .w3-dropdown-content > b { text-align:center; }
.date > .w3-dropdown-content > b.huntNone { grid-column: 1 / 3 }
.date > .w3-dropdown-content > a.w3-button {
    grid-column: 1 / 3;
    padding: 10px;
    margin-top: 5px;
    font-weight: bold;
    color: var(--logo-bone-light);
    background-color: var(--logo-outline);
}
@endsection

@section('moduleTitle')
Medību kalendārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
    
    <div id="calendarWrapper">
        <div id="calendarController">
            <button id="mPrevious" class="w3-button w3-circle"><</button> <!-- Nomaina datumus uz iepriekšējo mēnesi -->
            <h1 id="M-Y">Maijs 2022</h1>
            <button id="mFollowing" class="w3-button w3-circle">></button> <!-- Nomaina datumus uz nākamo mēnesi -->
        </div>
        <div id="calendarContent">
            <div id="calendarWeekdays">
                <div>Pirmdiena</div>
                <div>Otrdiena</div>
                <div>Trešdiena</div>
                <div>Ceturdiena</div>
                <div>Piektdiena</div>
                <div>Sestdiena</div>
                <div>Svētdiena</div>
            </div>
            <div id="calendarDates">
                <div class="week">
                    <div class="day otherMonth">
                        <div class="date">25</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">26</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">27</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">28</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">29</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">30</div>
                    </div>
                    <div class="day">
                        <div class="date">1</div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">2</div>
                    </div>
                    <div class="day">
                        <div class="date">3</div>
                    </div>
                    <div class="day">
                        <div class="date">4</div>
                    </div>
                    <div class="day">
                        <div class="date">5</div>
                    </div>
                    <div class="day">
                        <div class="w3-dropdown-hover date hunt">6
                            <div class="w3-dropdown-content w3-round-large">
                                <label>Datums:</label> <b id="huntDate">6. maijs</b>
                                <label>Tips:</label> <b id="huntType">Medības</b>
                                <label>Vada:</label> <b id="huntLead">Alnis Mūsis</b>
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">7</div>
                    </div>
                    <div class="day">
                        <div class="date">8</div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">9</div>
                    </div>
                    <div class="day">
                        <div class="date">10</div>
                    </div>
                    <div class="day">
                        <div class="date">11</div>
                    </div>
                    <div class="day" style="border:2px solid firebrick">
                        <div class="date">12
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">13</div>
                    </div>
                    <div class="day">
                        <div class="date hunt">14</div>
                    </div>
                    <div class="day">
                        <div class="date">15</div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="w3-dropdown-hover date">16
                            <div class="w3-dropdown-content w3-round-large">
                                <label>Datums:</label> <b id="huntDate">16. maijs</b>
                                <b class="huntNone">Datumā nav reģistrētu notikumu</b>
                                <a class="w3-button w3-round-large" href="{{-- route('eventCUD') --}}">Reģistrēt notikumu</a>
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">17</div>
                    </div>
                    <div class="day">
                        <div class="date">18</div>
                    </div>
                    <div class="day">
                        <div class="date">19</div>
                    </div>
                    <div class="day">
                        <div class="date">20</div>
                    </div>
                    <div class="day">
                        <div class="w3-dropdown-hover date hunt">21
                            <div class="w3-dropdown-content w3-round-large">
                                <label>Datums:</label> <b id="huntDate">21. maijs</b>
                                <label>Tips:</label> <b id="huntType">Medības</b>
                                <label>Vada:</label> <b id="huntLead">Juris Padels</b>
                                <a class="w3-button w3-round-large" href="#">Pieteikties</a>
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">22</div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">23</div>
                    </div>
                    <div class="day">
                        <div class="date">24</div>
                    </div>
                    <div class="day">
                        <div class="date">25</div>
                    </div>
                    <div class="day">
                        <div class="w3-dropdown-hover date hunt">26
                            <div class="w3-dropdown-content w3-round-large">
                                <label>Datums:</label> <b id="huntDate">26. maijs</b>
                                <label>Tips:</label> <b id="huntType">Medības</b>
                                <label>Vada:</label> <b id="huntLead">Miķelis Zindars</b>
                                <a class="w3-button w3-round-large" href="#">Pieteikties</a>
                                <a class="w3-button w3-round-large" href="{{-- route('eventCUD') --}}">Labot notikumu</a>
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">27</div>
                    </div>
                    <div class="day">
                        <div class="date">28</div>
                    </div>
                    <div class="day">
                        <div class="date">29</div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">30</div>
                    </div>
                    <div class="day">
                        <div class="date">31</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">1</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">2</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">3</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">4</div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection