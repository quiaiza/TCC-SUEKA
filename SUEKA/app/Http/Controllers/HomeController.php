<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function adminHome()
    {
        return view('administrador');
    }


    public function esquecesenha()
    {
        return view('esquecesenha');
    }


}