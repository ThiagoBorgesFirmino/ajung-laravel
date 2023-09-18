<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    public function equipe(){
        
        $equipes = Equipe::all(); // Pega todos o dados que esta na tabela de equipe.

        return view('equipe', ['equipes' => $equipes]);
    }
    
}
