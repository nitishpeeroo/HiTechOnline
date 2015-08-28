
@extends('logged_header')

<div class="container">
    <h1>Nos meilleurs ventes</h1>
    <div class="row">
        @foreach($produits as $produit)

        <div class="col-md-3 produit">
            <div class="produit-text">
                <div class="col-md-12">
                <div class="pull-left">
                    <h3>{{$produit->description}}</h3>
                </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@extends('footer')

