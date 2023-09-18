<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {
        $equipe = Equipe::findOrFail($id);

        return view('/equipe/admin.equipeedit', ['equipe' => $equipe]);
    }
}
