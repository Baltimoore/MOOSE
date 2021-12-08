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
    #calendarController button { padding:8px 15px; }

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
    color: var(--logo-outline);
    background-color: orange;
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
    margin-top: 5px;
}

/* notikumu popup izskata definīcijas */
#calendarCUD > div > header > span {
    position: absolute;
    font-size: 20pt;
    top: -21px;
    right: -20px;
    padding: 0px 12px;
}
#cudDate {
    padding-left:10px;
    content-align:centre;
}

#cudButtons { margin: 0 33px 20px; }
    #cudConfirm { width: 250px; }
    #cudEdit, #cudDelete {
        display: none;
        width: 180px;
        color: var(--logo-outline);
    }
    #cudEdit { background-color:orange; }
    #cudDelete { background-color: tomato; }
@endsection

@section('moduleTitle')
Medību kalendārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
    
    <div id="calendarWrapper">
        <div id="calendarController">
            <button id="mPrevious" class="w3-button w3-circle"><</button> <!-- Domāts nomainīt datumus uz iepriekšējo mēnesi -->
            <h1 id="M-Y">Maijs 2022</h1>
            <button id="mFollowing" class="w3-button w3-circle">></button> <!-- Domāts nomainīt datumus uz nākamo mēnesi -->
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
                    <div class="day" style="border:2px solid orange">
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
                                <a class="w3-button w3-round-large" 
                                   onclick="document.getElementById('calendarCUD').style.display='block'">Reģistrēt notikumu</a>
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

        <!-- Notikuma reģistrēšanas/modificēšanas logs -->
        <div id="calendarCUD" class="w3-modal">
            <div class="w3-modal-content w3-card-4">
                <header class="w3-container">
                    <span onclick="document.getElementById('calendarCUD').style.display='none'"
                        class="w3-button w3-circle addButton w3-display-topright">&times;</span>
                    <h2 id="cudWhat">Pievienot notikumu</h2>
                </header>
                <div id="cudInfo" class="w3-container">
                    <div class="w3-row-padding">
                        <div class="w3-col m6 l4">
                            <label>Medību tips</label>
                            <select id="cudType" class="w3-select w3-round-large">
                                <option hidden disabled selected>Atlasiet tipu</option>
                                <option value="run">Dzinējmedības</option>
                                <option value="gun">Medības</option>
                            </select>
                            <label>Medību vadītājs</label>
                            <select id="cudLead" class="w3-select w3-round-large">
                                <option hidden disabled selected>Atlasiet vadītāju</option>
                                <option value="jp45987">Juris Padels</option>
                                <option value="mz12375">Miķelis Zindars</option>
                            </select>
                        </div>
                        <div class="w3-col m6 l4">
                            <label>Medību norises datums</label>
                            <input id="cudDate" type="date" class="w3-select w3-round-large">
                        </div>
                    </div><hr>
                    <div class="w3-row-padding">
                        <div class="w3-col m12 l5">
                            <label>Medību vieta</label>
                            <select id="cudArea" class="w3-select w3-round-large">
                                <option hidden disabled selected>Atlasiet rajonu</option>
                                <option value="run">Mežs "Zemzariņi"</option>
                                <option value="gun">Mežs "Klubiņi"</option>
                            </select>
                            <div id="cudMap" style="background-color: var(--logo-fur-dark);height:250px;margin:10px;border:2px solid var(--logo-outline)"></div>
                        </div>
                        <div class="w3-col m12 l7">
                            <label>Sapulcēšanās vietas apraksts</label>
                            <textarea id="cudDesc" class="w3-input w3-round-large" style="resize:none" maxlength="500" placeholder="Aprakstiet vietu, kur medību dalībniekiem pulcēties">Ziemeļu pusē pie gandrīz aizaugušā ugunskura</textarea>
                        </div>
                    </div>
                </div>
                <div id="cudButtons">
                    <a id="cudConfirm" class="w3-button w3-round-large" href="#">Reģistrēt jaunu notikumu</a>
                    <a id="cudEdit" class="w3-button w3-round-large" href="#">Labot notikumu</a>
                    <a id="cudDelete" class="w3-button w3-round-large" href="#">Dzēst notikumu</a>
                </div>                
                <footer class="w3-container">
                    <p>Palīgteksts atrodas šeit</p>
                </footer>
            </div>
        </div>
    </div>
@endsection

@section('moduleScripts')
    {{-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
         nekāda papildus funkcionalitāte maketam nav plānota --}}
@endsection