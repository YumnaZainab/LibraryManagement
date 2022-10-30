<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class booksAvailableController extends Controller
{
    public function availableBooks () { 

            $bookData = DB::select('select * from book');    
            return view('booksAvailable', ["bookData"=>$bookData]);
    
     }
}
