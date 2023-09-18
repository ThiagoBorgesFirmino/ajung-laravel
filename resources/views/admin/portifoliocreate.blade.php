@extends('layouts.app')

@section('content')
    <div id="equipe-create-container" class="col-md-8 offset-md-2">
        <h2>Dados: </h2>

        <form action="portifoliocreate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-group mb-3">
                    <label for="image" class="input-group-text">Capa:</label>
                    <input type="file" name="image_cover" id="image_cover" class="form-control">
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"id="inputGroup-sizing-default">Ativo:</span>
                <select name="status" id="status">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Cliente:</span>
                <input type="text" class="form-control" id="client" name="client" placeholder="Digite o nome do Cliente">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Serviços:</span>
                <input type="text" class="form-control" id="services" name="services" placeholder="Digite os servicos desse cliente">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Titulo:</span>
                <input type="text" class="form-control" id="title" name="title" placeholder="Digite o Titulo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Categoria:</span>
                <select name="category" id="category">
                    <option value="0">Web/Ecommece</option>
                    <option value="1">Fotografia</option>
                    <option value="2">Vídeos</option>
                    <option value="3">Branding/Design</option>
                </select>
                {{-- <input type="text" class="form-control" id="category" name="category" placeholder="Digite o Categoria"> --}}
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Descricao:</span>
                <textarea name="description" id="description"  rows="10" class="form-contro" style="width:100%"></textarea>  
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <label for="image" class="input-group-text">Galeria:</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>
@endsection
