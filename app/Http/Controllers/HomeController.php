<?php

namespace App\Http\Controllers;

use App\User;
use App\Pasien;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pasien = Pasien::all();
        $user = User::where('role', '!=', 'Admin')->get();
        session()->put('pasien',$pasien);
        session()->put('user',$user);
        // dd(session()->get("pasien"));

        // dd($user);
        return view('layouts.conquer2');
    }
}
