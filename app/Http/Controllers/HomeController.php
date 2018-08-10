<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Http\Controllers\Controller;

use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userProfile');
    }

    public function store(Request $req){

        $token = $req->input('token');
        if($token){
            try {
                $name = $req->input('name');
                $surname = $req->input('surname');
                $email = $req->input('email');
                DB::update("update users set name= '$name', surname = '$surname', email = '$email' where remember_token =?", [$token]);
                return "You have successfully updated your profile";
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }else{
            return "You are not a user";
        }
       
       
    }
}
