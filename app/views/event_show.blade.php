@extends('logged_header')
{{$event_id}}
<?php
var_dump($produits);
var_dump($produits_evenement);

?>

<div class="col-md-12">
    <h1>Vente : </h1>
    <div class="row">
        @foreach($produits as $produit)
        <div class="produit col-md-3">
            {{$produit->description}}
        </div>
        @endforeach
    </div>
</div>


@extends('footer')

