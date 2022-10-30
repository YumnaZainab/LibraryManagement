<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class returnBookController extends Controller
{
    public function returnn () { return view('returnBook'); }

    function book_return(){
        $cnic = Request::input('CNIC') ;
        $title = Request::input('code') ;

        $B_id = DB::select('select * from book where title = ? ' , [$title]);

        foreach ($B_id as $book){

                $searchID = $book->book_id;

                $available = $book->available;

            }

            $readerId = DB::select('select * from reader where cnic = ? ' , [$cnic]);

            foreach ($readerId as $reader){
    
                $searchRID = $reader->reader_id;    
    
            }
    
        DB::delete( 'delete from issuedbooks where book_id = ? and reader_id = ?', [$searchID, $searchRID]) ;    

        DB::delete( 'delete from reader where book_id = ? and cnic = ?', [$searchID, $cnic]) ;

        $available = $available + 1;

        DB::update('update book set available=? where book_id= ?', [$available, $searchID]);

        $error='Book Returned';
        return redirect()-> back()-> with('alert', $error);
    }
}
