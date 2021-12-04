@extends('registered.base')

<!-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - Attēlo visas biedrības reģistrētās medības
 - - - - - - - - - - - -->

@section('moduleStyles')
    /* Globālie moduļa izskata mainīgie */
    table {
        width: 100%;
    }
@endsection

@section('moduleTitle')
Medību kalendārs
@endsection

@section('moduleContent')
    <!-- Moduļa galvenā satura sadaļa -->
    <table style="text-align:center;margin:auto">
        <thead>
            <tr>
                <td>
                    <button id="mPrevious"><</button>
                </td>
                <td colspan="5">
                    <h1 id="M-Y">Mēnesis Gads</h1>
                </td>
                <td>
                    <button id="mFollowing">></button>
                </td>
            </tr>
            <tr>
                <td>Pirmdiena</td>
                <td>Otrdiena</td>
                <td>Trešdiena</td>
                <td>Ceturdiena</td>
                <td>Piektdiena</td>
                <td>Sestdiena</td>
                <td>Svētdiena</td>
            </tr>
        </thead>
        <tbody id="calendarDates">
            <tr>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
            </tr>
            <tr>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
            </tr>
            <tr>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
            </tr>
            <tr>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
            </tr>
            <tr>
                <td>30</td>
                <td>31</td>
                <td>b</td>
                <td>b</td>
                <td>b</td>
                <td>b</td>
                <td>b</td>
            </tr>
        </tbody>
    </table>
@endsection

@section('moduleScripts')
    <!-- Uz doto brīdi būs tikai redirecti starp mājaslapām;
        nekāda papildus funkcionalitāte maketam nav plānota -->
@endsection