<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* Llamamos al modelo User para realizar las diferentes acciones que tenemos planteadas en este proyecto */
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* Declaramos una variable usuarios el cual obtendrá un array de los usuarios registrados */
        $usuarios = User::get();
        /* Devolvemos el array a nuestra vista home */
        return view('home', compact(
            'usuarios'
        ));
    }
}
