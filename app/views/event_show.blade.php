@extends('logged_header')
<?php
var_dump($produits);
var_dump($evenements);
?>

<div class="col-md-12">
    @foreach($evenements as $evenement)
    <h1>Vente : {{$evenement->nom}}</h1>
    {{$evenement->id_evenement}}
    <div class="row">
        @foreach($produits as $produit)

        <div class="col-md-3 produit">
            <div class="produit-text">
                <h3>{{$produit->description}}</h3>
                <span class="redColor">{{$produit->prix_unitaire}} € </span> <br />
                il reste {{$produit->quantite}} exemplaire(s) <br />
               <a id="product_{{$produit->id_produit}}_{{$produit->prix_unitaire}}" class="btn btn-turquoise addCart" href="#">Ajouter au panier</a>  
            </div>
        </div>
        @endforeach
        
    </div>
    @endforeach
</div>

@extends('footer')

