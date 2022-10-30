<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;


class updateBookController extends Controller
{
    public function index(){
        return view('updateBook');
    }

    public function book_update($title){
        $issuess = Request::input('num') ;
        DB::update( 'update book set issues = ? where title = ? ', [$issuess, $title]) ;
        DB::update( 'update book set available = ? where title = ? ', [$issuess, $title]) ;
        $error='Book Updated';
        return redirect()-> back()-> with('alert', $error);
    }
}
