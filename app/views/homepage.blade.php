@extends('logged_header')
<?php
var_dump($produits_evenements);
?>
<div class="col-md-8">
    <h1>Ventes disponibles</h1>
</div>



<div class="col-md-4">
    <h1>Ventes à venir</h1>  

    <div class="evenement-container col-md-12">
        @foreach($events as $event)
        <div class="evenement row">
            <a href="{{ url('event/'.$event->id_evenement.'/show') }}"><h3>{{ $event->nom}}</h3></a>
            Début : {{ $event->debut_evenement}} <br />
            <a class="btn btn-turquoise" href="{{ url('event/'.$event->id_evenement.'/join') }}">Je participe</a>
        </div>
        @endforeach
    </div>

</div>

@extends('footer')