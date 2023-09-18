<?php

namespace App\Http\Controllers;

use App\Models\Portifolio;
use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    public function portifolio(){

        $portifolios = Portifolio::all();

        return view('portifolio', ["portifolios" => $portifolios]);
    }

    public function show($id)
    {
        $portifolio = Portifolio::findOrFail($id);

        //  var_dump($portifolio);

        return view('portifolioshow', ["portifolio" => $portifolio]);
    }
}
