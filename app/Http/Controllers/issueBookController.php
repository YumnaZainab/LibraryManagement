<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class issueBookController extends Controller
{
    public function issue () { return view('issueBook'); }

    function book_issue(){

        $cnic = Request::input('CNIC') ;

        $f_name = Request::input('rn') ;

        $l_name = Request::input('ln') ;

        $title = Request::input('code') ;

        $issueD = Request::input('iDate') ;

        $returnD = Request::input('rDate') ;

        $B_id = DB::select('select * from book where title = ? ' , [$title]);
        
        foreach ($B_id as $book){

                $searchID = $book->book_id;

                $available = $book->available;

            }

        DB::insert( 'insert into reader (firstName, lastName, cnic, book_id) values(?, ?, ?, ?)' , [$f_name, $l_name, $cnic, $searchID]) ;

        $readerId = DB::select('select * from reader where cnic = ? ' , [$cnic]);

        foreach ($readerId as $reader){

            $searchRID = $reader->reader_id;    

        }

        DB::insert( 'insert into issuedbooks (book_id, reader_id, issueDate, returnDate) values(?, ?, ?, ?)' , [$searchID, $searchRID, $issueD, $returnD]

        ) ;

        $available = $available - 1;

        DB::update('update book set available=? where book_id= ?', [$available, $searchID]);

        $error='Book Issued';
        return redirect()-> back()-> with('alert', $error);

    }
}
