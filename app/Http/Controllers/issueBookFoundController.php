<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class issueBookFoundController extends Controller
{
    public function index () { 
        $title = Request::input('title');
        $book = DB::select('select * from book where title = ?', [$title]);
        if(count($book) == 0){
            $error='No such book is available in the Library.';
            return redirect()-> back()-> with('alert', $error);
        }
        else{
            $book = DB::select('select * from book, reader, issuedbooks where book.book_id = reader.book_id and book.book_id = issuedbooks.book_id and book.title = ? ', [$title]);
  
            if(count($book) > 0){
                return view('issueBookFound', ["book"=>$book]); 
            }
            else{
                $error='This book is not issued yet.';
                return redirect()-> back()-> with('alert', $error);
            }
        }
    }
}
