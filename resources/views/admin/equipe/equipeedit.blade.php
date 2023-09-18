@extends('layouts.app')

@section('content')
    <div id="equipe-create-container" class="col-md-8 offset-md-2">
        <h2>Alterando os dados de  {{ $equipe->name }}</h2>

        <form action="{{ route('equipeupdate',  $equipe->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-group mb-3">
                    <label for="image" class="input-group-text">Foto:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="{{ $equipe->name }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Cargo:</span>
                <input type="text" class="form-control" id="office" name="office" placeholder="Digite o cargo" value="{{ $equipe->office }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Facebook:</span>
                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Link Facebook" value="{{ $equipe->facebook }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Instagram:</span>
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Link Instagram" value="{{ $equipe->instagram }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Linkedin:</span>
                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Link Linkedin" value="{{ $equipe->linkedin }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Twitter:</span>
                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Link Twitter" value="{{ $equipe->twitter }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">TikTok:</span>
                <input type="text" class="form-control" id="tiktok" name="tiktok" placeholder="Link Tiktok" value="{{ $equipe->tiktok }}">
            </div>
            <br/>
            <input type="submit" class="btn btn-primary" value="Editar">
        </form>
    </div>
@endsection
