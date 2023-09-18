@extends('layouts.app')

@section('content')
    <div id="equipe-create-container" class="col-md-8 offset-md-2">
        <h2>Dados: </h2>

        <form action="equipecreate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-group mb-3">
                    <label for="image" class="input-group-text">Foto:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Cargo:</span>
                <input type="text" class="form-control" id="office" name="office" placeholder="Digite o cargo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Facebook:</span>
                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Link Facebook">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Instagram:</span>
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Link Instagram">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Linkedin:</span>
                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Link Linkedin">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Twitter:</span>
                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Link Twitter">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">TikTok:</span>
                <input type="text" class="form-control" id="tiktok" name="tiktok" placeholder="Link Tiktok">
            </div>
            <br/>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>
@endsection
