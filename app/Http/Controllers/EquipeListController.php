<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeListController extends Controller
{
    // function para somente estiver logado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $equipes = Equipe::all(); // Pega todos o dados que esta na tabela de equipe.

        return view('admin.equipelist', ['equipes' => $equipes]);
    }
}
