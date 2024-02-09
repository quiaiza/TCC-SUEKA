<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

 
class AutenticacaoController extends Controller
{
    public function registar()
    {
        return view('registar');
    }
 
    public function registarPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipo = $request->tipo;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Registado com Sucesso');
    }
 
    public function login()
    {
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
       
 
            if(auth()->user()->tipo == 0)
            {
                return redirect('/administrador');
            }
            else
            {
                return redirect('/home');
            }
        }
        else
        {
            return redirect()
            ->route("login")
            ->with("error",'Incorrect email or password');
        }
    
    }




    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }



    
}