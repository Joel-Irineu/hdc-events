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
                <label for="title">Evento:</label>
                <textarea name="description" id="description" placeholder="O que vai acontecer no evento?" class="form-control"></textarea>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary" id="btn-create">
        </form>
    </div>
@endsection