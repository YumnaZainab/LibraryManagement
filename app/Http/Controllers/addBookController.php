<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class addBookController extends Controller
{

    public function index(){
        $categories = DB::select('select * from categories');
        return view('addBook', ["categories"=>$categories]);
    }

    function book_add(){
        $title = Request::input('tb') ;
        $author = Request::input('ab') ;
        $des = Request::input('db') ;
        $category = Request::input('catg') ;
        $issuess = Request::input('num') ;
        $availablee = Request::input('num') ;
        DB::insert( 'insert into book (title, author_name, description, category, issues, available) values(?, ?, ?, ?, ?, ?)' , [$title, $author, $des, $category, $issuess, $availablee ]) ;
        $error='Book Added';
        return redirect()-> back()-> with('alert', $error);
    }
}
