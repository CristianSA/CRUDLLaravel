<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    /* Función que creará un usuario nuevo */
    public function createUser(){
        return view('user.new');
    }
    /* Función que guardará el usuario en nuestra base de datos */
    public function addUser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('home');
    }
    /* Función que mostrará la vista del perfil de usuario con sus datos correspondientes
        dado un id
    */
    public function editUser($id){
        /* Declaramos la variable usuario, la cual almacenará los datos del usuarios correspondiente
            a su id
        */
        /* Buscará el usuario por su id y si no lo encuentra lanzará una excepción */
        $usuario = User::findOrFail($id);
        return view('user.edit', compact(
            'usuario'
        ));
    }
    /* Función que actualizará los datos del usuario que haya modificado el cliente dado su id */
    public function saveUser($id, Request $request){
        $usuario = User::find($id)
        ->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->route('user.edit', ['id' => $id]);
    }
}
