<?php

namespace App\Http\Controllers;

use App\Models\Portifolio;
use App\Models\PortifolioImage;
use Illuminate\Http\Request;

class PortifolioAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $portifolios = Portifolio::all();

        return view('admin.portifoliolist', ["portifolios" => $portifolios]);
    }

    public function portifolioCreate()
    {
        return view('admin.portifoliocreate');
    }

    public function store(Request $request)
    {
        $portifolio = new Portifolio();

        $portifolio->title = $request->title;
        $portifolio->status = $request->status;
        $portifolio->category = $request->category;
        $portifolio->client = $request->client;
        $portifolio->services = $request->services;
        $portifolio->description = $request->description;


        if($request->hasFile('image_cover') && $request->file('image_cover')->isValid()){
        
            $requestImage = $request->image_cover;

            $extension = $requestImage->extension();

            $imagemName =  md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; //Nome da imagem mas data e hora e extensao da imagem

            $requestImage->move(public_path("img/portifolio"), $imagemName); // Salva a imagem no public/img/equipe

            $portifolio->image_cover = $imagemName; // O nome da imagem que vai ser salvo no banco de dados
        }

        $portifolio->save();

        for($i = 0; $i < count($request->allFiles()['images']); $i++)
        {
            $file = $request->allFiles()['images'][$i];

            $PortifolioImage = new PortifolioImage();
            $PortifolioImage->portifolios_id = $portifolio->id;
            $PortifolioImage->path = $file->store("img/portifolio/" . $portifolio->id);
            //$PortifolioImage->portifolio = $portifolio->id;
            $PortifolioImage->save();
            unset($PortifolioImage);

        }

        // $portifolio->save();

        return redirect('admin/portifoliolist')->with("msg", "Portifólio cadastrado com sucesso!");
        
    }

    public function destroy($id)
    {
        Portifolio::findOrFail($id)->delete();

        return redirect('admin/portifoliolist')->with("msg", "Portifólio deletado com sucesso");
    }

    public function edit($id)
    {
        $portifolio = Portifolio::findOrFail($id);

        return view('admin.portifolioedit', ['portifolio' => $portifolio]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('image_cover') && $request->file('image_cover')->isValid()){
        
            $requestImage = $request->image_cover;

            $extension = $requestImage->extension();

            $imagemName =  md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; //Nome da imagem mas data e hora e extensao da imagem

            $requestImage->move(public_path("img/portifolio"), $imagemName); // Salva a imagem no public/img/equipe

            $data['image_cover'] = $imagemName; // O nome da imagem que vai ser salvo no banco de dados
        }

        Portifolio::findOrFail($request->id)->update($data);

        return redirect()->route('portifoliolist')->with("msg", "Portifólio editado com sucesso!");
    }
}
