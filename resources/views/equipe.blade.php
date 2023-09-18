@extends('layouts.main')

@section('title', 'Página da Equipe da Ajung')

@section('content')
    <div>
        <img src="img/banner.jpg" alt="img-fluid" style="width:100%">
    </div>

    <div class="container conteudo-equipe">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Equipe</h1>
                <h2>Conheça nossa equipe que vai te atender.</h2>
                <hr>
            </div>
            
            @foreach ($equipes as $equipe)
                <div class="col col-3 caixa-equipe" id="equipe">
                    <div class="conteudo-caixa">
                        <img src="img/equipe/{{ $equipe->image }}" class="img-fluid" alt="{{ $equipe->name }}" style="width:100%">
                        <div class="caixa-texto">
                            <h5 class="title">{{ $equipe->name }}</h5>
                            <p class="text">{{ $equipe->office }}</p>
                            <ul>
                                @if( $equipe->facebook != "" )
                                <li>
                                    <a href="{{ $equipe->facebook }}" title="Facebook do(a) {{ $equipe->name }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                @endif
                                @if( $equipe->instagram != "" )
                                <li>
                                    <a href="{{ $equipe->instagram }}" title="Instagram do(a) {{ $equipe->name }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                @endif
                                @if( $equipe->linkedin != "" )
                                <li>
                                    <a href="{{ $equipe->linkedin }}" title="Linkedin do(a) {{ $equipe->name }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                                @endif
                                @if( $equipe->twitter != "" )
                                <li>
                                    <a href="{{ $equipe->twitter }}" title="X-Twitter do(a) {{ $equipe->name }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                @endif
                                @if( $equipe->titktok != "" )
                                <li>
                                    <a href="{{ $equipe->tiktok }}" title="TikTok do(a) {{ $equipe->name }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection