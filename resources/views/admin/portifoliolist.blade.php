@extends('layouts.app')

@section('content')
    
    <div class="container container-portifolio-list margin-top">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Portifólio</h1>
            </div>
            <div class="col-md-6  text-right">
                <a href="portifoliocreate" class="btn btn-primary" style="float: right">Cadastrar</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-equipe">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th scope="col">Capa</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">titulo</th>
                            <th scope="col" colspan="2">Ação</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider align-middle">
                        @foreach ($portifolios as $portifolio)
                        <tr>
                            <td><img src="../img/portifolio/{{ $portifolio->image_cover }}" class="img-responsive" alt="{{ $portifolio->title }}"></td>
                            <td>
                                <p>{{ $portifolio->client }}</p>
                            </td>
                            <td>
                                <p>{{ $portifolio->category }}</p>
                            </td>
                            <td>
                                <p>{{ $portifolio->title }}</p>
                            </td>
                            <td class="text-center">
                                <a href="/admin/portifolioedit/{{ $portifolio->id }}" class="btn btn-info">Editar</a>
                            </td>
                            <td class="text-center">
                                <form action="/admin/portifoliolist/{{ $portifolio->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    
                </table>
            </div>
        </div>
    </div>
@endsection
