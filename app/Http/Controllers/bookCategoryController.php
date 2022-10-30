<?php

namespace App\Http\Controllers;

use Request;

use Illuminate\Support\Facades\DB;

class bookCategoryController extends Controller
{
    public function bookk () { return view('bookCategory'); }

    function category_add(){
        $category = Request::input('category') ;
        DB::insert( 'insert into categories (category) values(?)' , [$category]) ;
        $error='Book Category Added';
        return redirect()-> back()-> with('alert', $error);

    }
}
