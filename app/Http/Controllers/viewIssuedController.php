<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class viewIssuedController extends Controller
{

    function view() {

        $bookData = DB::select('select * from book');    
        return view('viewIssued', ["bookData"=>$bookData]);

    }
}
