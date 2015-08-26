@extends('logged_header')
<?php
var_dump($produits_evenements);
?>
<div class="col-md-8">
    <h1>Vos évènements inscrits disponibles</h1>
</div>



<div class="col-md-4">
    <h1>Les ventes à venir</h1>  

    <div class="evenement-container col-md-12">
        @foreach($events as $event)
        <div class="evenement row">
            <h3>{{ $event->nom}}</h3>
            Début : {{ $event->debut_evenement}} <br />
            <a class="btn btn-turquoise" href="{{ $event->id_evenement}}">S'inscrire à la vente</a>
        </div>
        @endforeach
    </div>

</div>

@extends('footer')