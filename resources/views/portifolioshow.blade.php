@extends('layouts.main')

@section('title', "A.Jung - ". $portifolio->client ." - ". $portifolio->title )

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center detalhe-portifolio">

                <h1>{{ $portifolio->client }}</h1>
                <img src="/img/portifolio/{{ $portifolio->image_cover }}" class="img-fluid" alt="{{ $portifolio->title }}">
                <br/>
                <h2>{{ $portifolio->title }}</h2>
                <p><b>Descricão:</b><br/> {{ $portifolio->description }}</p>
                <p><b>Serviços:</b> {{ $portifolio->services }}</p>
            </div>
            @foreach($portifolio->images() as $item)
            
                {{ dd($item) }}
            @endforeach
        </div>
    </div>

@endsection