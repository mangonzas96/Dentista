<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Odontologo;
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
        if(Auth::User() -> Odontologo){
            return view('homeodontologo');
        } elseif (Auth::User() -> Paciente){
            return view('homepaciente');
        }else{
            return view('home');
        }
    }
}
