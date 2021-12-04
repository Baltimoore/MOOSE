@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - lietotnes centrālais skats, no kura var pāriet uz visiem pārējiem
 - - - - - - - - - - - --}}

@section('moduleStyle')
    /* Nav globāli moduļa izskata mainīgie */
@endsection

@section('moduleTitle')
centrālais skats
@endsection

@section('moduleContent')
    <h1>Galvenais lietotnes skats, kurā parādās visi moduļi samazinātā skatā</h1>

<div id="calendarWrapper">
    <div id="calendarController">
        <button id="mPrevious" class="w3-button w3-circle"><</button> <!-- Nomaina datumus uz iepriekšējo mēnesi -->
        <h1 id="M-Y">Maijs 2022</h1>
        <button id="mFollowing" class="w3-button w3-circle">></button> <!-- Nomaina datumus uz nākamo mēnesi -->
    </div>
    <div id="calendarContent">
        <div id="calendarWeekdays">
            <div>Pr</div>
            <div>Ot</div>
            <div>Tr</div>
            <div>Ce</div>
            <div>Pk</div>
            <div>Se</div>
            <div>Sv</div>
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
                    <div class="date">6</div>
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
                <div class="day">
                    <div class="date">12</div>
                </div>
                <div class="day">
                    <div class="date">13</div>
                </div>
                <div class="day">
                    <div class="date">14</div>
                </div>
                <div class="day">
                    <div class="date">15</div>
                </div>
            </div>
            <div class="week">
                <div class="day">
                    <div class="date">16</div>
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
                    <div class="date">21</div>
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
                    <div class="date">26</div>
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