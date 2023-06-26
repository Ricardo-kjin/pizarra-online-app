<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\User;
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
        $user=User::findOrfail(auth()->user()->id);
        if (auth()->user()->role=='admin') {
            $salas=$user->userSalas()->get();
        } else {
            $salas=$user->salas()->get();
        }
        // dd($salas);
        return view('salas.index',compact('salas'));
    }
}
