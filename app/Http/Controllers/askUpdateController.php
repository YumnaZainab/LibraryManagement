<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class askUpdateController extends Controller
{
    public function index () { return view('askUpdate'); }

    function bookCheck(){
        $title = Request::input('title') ;
        $B_id = DB::select('select * from book where title = ? ' , [$title]);

        foreach ($B_id as $book){
                $searchID = $book->book_id;
        }
        if(count($B_id)==0){
            $error='This Book is not available in the Library.';
            return redirect()-> back()-> with('alert', $error);
        }
        else{
            $id = DB:: select('select * from issuedbooks where book_id = ? ', [$searchID]);
            if (count ($id) == 0 ){
                $categories = DB::select('select * from categories');
                return view('updateBook', ["B_id"=>$B_id]);  
            }
            else{
                $error='This Book cannot be updated\nAs it is issued.';
                return redirect()-> back()-> with('alert', $error);
            }
        }
        
        
    }
}
