<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkUserCredentials extends Controller {
    public function homepage() {
        return view ('registered.home');
    }
}
