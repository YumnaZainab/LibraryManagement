<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class findBookController extends Controller
{
    public function bookFinding () { return view('findBook'); }
}
