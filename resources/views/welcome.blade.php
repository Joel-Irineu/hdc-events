@extends('layouts.maim')

@section('title', 'HDC Events')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Proximos Eventos</h2>
        <p>Veja os eventos dos proximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                        <h4 class="card-title">{{$event->title}}</h4>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais...</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0)
                <p>Não há eventos disponiveis</p>
            @endif
        </div>
    </div>
@endsection