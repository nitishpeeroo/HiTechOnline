@extends('logged_header')
<div class="col-md-8">
    <h1>Ventes disponibles</h1>
</div>



<div class="col-md-4">
    <h1>Ventes à venir</h1>  

    <div class="evenement-container col-md-12">
        @foreach($events as $event)
        <div class="evenement row">
            <h3>{{ $event->nom}}</h3>
            Début : {{ $event->debut_evenement}} <br />
            <a class="btn btn-turquoise" href="{{ url('event/'.$event->id_evenement.'/join') }}">Je participe</a>
        </div>
        @endforeach
    </div>

</div>

@extends('footer')