<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeCreateController extends Controller
{
    // function para somente estiver logado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function equipeCreate()
    {
        return view('admin.equipecreate');
    }

    public function store(Request $request)
    {
        // Equipe::create([
        //     'name'=>   $request->name,
        //     'office'=> $request->office
        // ]);

        $equipe = new Equipe();
        
        $equipe->name      = $request->name;
        $equipe->office    = $request->office;
        $equipe->facebook  = $request->facebook;
        $equipe->instagram = $request->instagram;
        $equipe->linkedin  = $request->linkedin;
        $equipe->twitter   = $request->twitter;
        $equipe->tiktok    = $request->tiktok;


        if($request->hasFile('image') && $request->file('image')->isValid()){
        
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imagemName =  md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; //Nome da imagem mas data e hora e extensao da imagem

            $requestImage->move(public_path("img/equipe"), $imagemName); // Salva a imagem no public/img/equipe

            $equipe->image = $imagemName; // O nome da imagem que vai ser salvo no banco de dados
        }

        $equipe->save();
        

        return redirect('/admin/equipelist')->with('msg', 'Menbro da equipe cadastrado com sucesso!');

    }
}
