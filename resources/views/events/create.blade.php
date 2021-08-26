@extends('layouts.maim')

@section('title', 'criar evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="fomrgroup">
                <label for="image">Imagem do evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
             </div>
            <div class="fomrgroup">
               <label for="title">Evento:</label>
               <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"> 
            </div>
            <div class="fomrgroup">
                <label for="date">Data do Evento:</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Nome do evento"> 
             </div>
            <div class="fomrgroup">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento"> 
            </div>
            <div class="fomrgroup">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="fomrgroup">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" placeholder="O que vai acontecer no evento?" class="form-control"></textarea>
            </div>
            <div class="fomrgroup">
                <label for="title">Adicione, itens de infra-estrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Bebida gratis"> Bebida gratis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Open food"> Open food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Brindes"> Brindes
                </div>
            </div>

            <input type="submit" value="Criar Evento" class="btn btn-primary" id="btn-create">
        </form>
    </div>
@endsection