<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Stroage;



use App\Models\Ficheiros;

use App\Models\User;


class ficheiroController extends Controller
{

    public function listautilizadores()
    {

        $user = user::all();
        return view('listautilizadores', compact('user'));
    }


   
    public function novoficheiro()
    {
        return view('novoficheiro');
    }
    public function listapastas()
    {
        return view('listapastas');
    }
   




    public function store(Request $request)
    {

        $data = new ficheiros();


        $file = $request->file;

        $filename = time() . '.' . $file->getClientOriginalExtension();

        $request->file->move('FicheirosArmazenados', $filename);

        $data->file = $filename;

        $data->tipo = $request->tipo;
        $data->nome = $request->nome;
        $data->descricao = $request->descricao;
        $data->utilizador = $request->utilizador;

        $data->save();
        return redirect()->back();



    }


    public function listaficheiro()
    {

        $data = ficheiros::all();
        return view('listaficheiro', compact('data'));
    }


    public function download(Request $request, $file)
    {


        return response()->download(public_path('FicheirosArmazenados/' . $file));
    }



    public function visualizarficheiro($id)
    {
        $data = ficheiros::find($id);

        return view('visualizarficheiro', compact('data'));


    }








}



