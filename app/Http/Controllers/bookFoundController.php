<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;


class bookFoundController extends Controller
{
    public function index () {
        
        $title = Request::input('title');
        $book = DB::select('select * from book where title = ?', [$title]);
        if(count($book) > 0){
            return view('bookFound', ["book"=>$book]); }
        else{
            $error='No such book is available in the Library.';
            return redirect()-> back()-> with('alert', $error);
        }
}

}
