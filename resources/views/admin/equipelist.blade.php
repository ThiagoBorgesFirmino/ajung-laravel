@extends('layouts.app')

@section('content')
    
    <div class="container margin-top">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Equipe</h1>
            </div>
            <div class="col-md-6  text-right">
                <a href="equipecreate" class="btn btn-primary" style="float: right">Cadastrar</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-equipe">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Imagem</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cargo</th>
                            <th scope="col" colspan="2">Ação</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider align-middle">
                        @foreach ($equipes as $equipe)
                        <tr>
                            <td><img src="../img/equipe/{{ $equipe->image }}" class="img-responsive" alt="{{ $equipe->name }}"></td>
                            <td>
                                <p>{{ $equipe->name }}</p>
                            </td>
                            <td>
                                <p>{{ $equipe->office }}</p>
                            </td>
                            <td class="text-center">
                                <a href="/admin/equipe/equipeedit/{{ $equipe->id }}" class="btn btn-info">Editar</a>
                            </td>
                            <td class="text-center">
                                <form action="/admin/equipelist/{{ $equipe->id }}" method="POST">
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
