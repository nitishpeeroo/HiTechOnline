@extends('logged_header')
<div class="col-md-8">
    <h1>Ventes disponibles</h1>
    <div class="evenement-container col-md-12">         
        @if($isevt)
        @for ($i = 1; $i < count($event_current); $i++)     
        <div class="evenement row">
            <a href="{{ url('event/'.$event_current[$i][0]->id.'/show') }}"><h3>{{ $event_current[$i][0]->nom}}</h3></a>
            Début : {{ $event_current[$i][0]->debut_evenement}} | 
            <a class="btn btn-turquoise" href="{{ url('event/'.$event_current[$i][0]->id.'/show') }}">Accèder à la vente</a>          
        </div>
        @endfor
        @endif
    </div>
</div>

<div class="col-md-4">
    <h1>Ventes à venir</h1>  

    <div class="evenement-container col-md-12">
        @foreach($events as $event)
        <div class="evenement row">
            <h3>{{ $event->nom}}</h3>
            Début : {{ $event->debut_evenement}} | 
            <a id="event_id{{$event->id}}" class="btn btn-turquoise joinEvent pull-right" href="#">Je participe</a>          
        </div>
        @endforeach
    </div>

</div>

@extends('footer')