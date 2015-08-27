@extends('logged_header')
<?php
var_dump($produits);
?>

<div class="col-md-12">
    @foreach($evenements as $evenement)
    <h1>Vente : {{$evenement->nom}}</h1>
    @endforeach
    <div class="row">
        @foreach($produits as $produit)

        <div class="col-md-3 produit">
            <div class="produit-text">
                <h3>{{$produit->description}}</h3>
                <span class="redColor">{{$produit->prix_unitaire}} € </span> <br />
                il reste {{$produit->quantite}} exemplaire(s)
            </div>
        </div>
        @endforeach
    </div>
</div>

@extends('footer')

