@extends('registered.base')

<!-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - Attēlo visas biedrības reģistrētās medības
 - - - - - - - - - - - -->

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
    <!-- Moduļa galvenā satura sadaļa -->
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
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">26</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">27</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">28</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">29</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">30</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">1</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">2</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">3</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">4</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">5</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">6</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">7</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">8</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">9</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">10</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">11</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">12</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">13</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">14</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">15</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">16</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">17</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">18</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">19</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">20</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">21</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">22</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">23</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">24</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">25</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">26</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">27</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">28</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">29</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                </div>
                <div class="week">
                    <div class="day">
                        <div class="date">30</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day">
                        <div class="date">31</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">1</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">2</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">3</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">4</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                    <div class="day otherMonth">
                        <div class="date">5</div>
                        <div class="event">
                            <div class="event-desc"></div>
                            <div class="event-time"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('moduleScripts')
    <!-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota -->
@endsection