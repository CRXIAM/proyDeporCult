<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{


    use RegistersUsers,HasPermissions;

   

    public function register(Request $request)
    {
        // Validar los datos del formulario de registro
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user= User::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
        ]);

           if ($user) {
        // Autenticar al usuario
        Auth::login($user);
        $user->assignRole('Alumno');
        event(new Registered($user));
        return redirect(RouteServiceProvider::HOME);
    } else {
        // Si el registro no fue exitoso, redirigir al inicio de sesión
        return redirect()->route('login')->with('error', 'El registro ha fallado. Por favor, intenta nuevamente.');
    }


        
    }

 
}
