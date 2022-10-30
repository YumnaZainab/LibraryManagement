<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function signup () { return view('signUp'); }

    function storeAdmin() {     
    
        $usrname = Request::input('username');
        $email = Request::input('email');
        $pass = Request::input('pass');

        $hash = $tablepass->Password;
        $verify = password_verify($pass, $hash);

        DB::insert('insert into admin (username, email, password) values (?, ?, ?)', [$usrname , $email, $pass]);
        $msg = "Librarian Added Successfully";
        return redirect('/home') -> with('alert', $msg);
		
    }

    function matchAdmin() {

        $usrname = Request::input('username');

        $pass = Request::input('pass');



        $loginData = DB::select('select * from admin where username = ?', [$usrname]);

     

        if (count($loginData) > 0){

           

            foreach ($loginData as $tablepass) {



                if (($tablepass->password) == $pass){

                    return redirect('adminDashboard');

                }

                else{

                    $error='Password does not match';

                    return redirect()->back()->with('alert', $error);

                }

            }

        }else{

            $error='username does not match';

            return redirect()->back()->with('alert', $error);

        }

    }
}
