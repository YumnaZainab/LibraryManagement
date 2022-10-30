<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class deleteBookController extends Controller
{
    public function index () { return view('deleteBook'); }

    function book_delete(){
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
                DB::delete('delete from book where title = ? ', [$title]) ;
                $error='Book Deleted';
                return redirect()-> back()-> with('alert', $error);    
            }
            else{
                $error='This Book cannot be deleted\nAs it is issued.';
                return redirect()-> back()-> with('alert', $error);
            }
        }
        
        
    }
}
