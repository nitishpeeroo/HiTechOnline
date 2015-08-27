@extends('logged_header')

<div class="container">
    @foreach($evenements as $evenement)
    <h1>Vente : {{$evenement->nom}}</h1>
    <div class="row">
        @foreach($produits as $produit)

        <div class="col-md-3 produit">
            <div class="produit-text">
                <div class="col-md-12">
                <div class="pull-left">
                    <h3>{{$produit->description}}</h3>
                    il reste {{$produit->quantite}} exemplaire(s) <br />
                </div>
                <div class="pull-right">
                    <span class="redColor">{{$produit->prix_unitaire}} € </span> <br />
                </div>
                </div>
                <div class="col-md-12">
                <a id="product_{{$produit->id}}_{{$produit->prix_unitaire}}" class="btn btn-turquoise addCart pull-right" href="#">Ajouter au panier</a>  
                </div>
            </div>
        </div>
        @endforeach

    </div>
    @endforeach
</div>

@extends('footer')

