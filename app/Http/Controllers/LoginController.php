<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\SuperUser; // Importa el modelo SuperUser
class LoginController extends Controller
{
    protected $guard = 'users';
     public function index(){
         return view("admin.auth.login");
     }
     public function login(Request $request)
     {
         $credentials = $request->only('email', 'password');

         if (Auth::guard('users')->attempt($credentials)) {
             //El administrador ha iniciado sesión correctamente
            return redirect()->route('admin.welcome');
         }

         //Si el inicio de sesión falla, redirige de nuevo al formulario de inicio de sesión con un mensaje de error
         return back()->withErrors(['email' => 'Credenciales incorrectas']);
     }


}
