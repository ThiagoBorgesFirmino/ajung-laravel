@extends('layouts.main')

@section('title', 'A.Jung Soluções Corporativas LTDA')

@section('content')
    <div>
        <img src="img/banner.jpg" alt="img-fluid" style="width:100%">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center titulo-portifolio">
                <h1>Portifólio</h1>
                <h2>Veja um pouco de nosso trabalhos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-12">
                <nav class="text-center nav-categorias">
                   <a href="" id="0">Web/Ecommerce</a>
                   <a href="" id="1">Fotografia</a>
                   <a href="" id="2">Vídeos</a>
                   <a href="" id="3">Branding/Design</a>
                   <a href="" id="4">Todos</a>
                </nav>
            </div>
        </div>
        <div class="row">
            @foreach ($portifolios as $portifolio)
                <div class="col col-md-3" id="{{ $portifolio->category }}">
                    <div class="caixa-portifolio">
                        <a href="portifolioshow/{{ $portifolio->id }}" title={{ $portifolio->client }}>
                            <img src="img/portifolio/{{ $portifolio->image_cover }}" class="card-img-top" alt="{{ $portifolio->title }}">
                            <div class="conteudo-portifolio">
                                <h5 class="card-title">{{ $portifolio->client }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection