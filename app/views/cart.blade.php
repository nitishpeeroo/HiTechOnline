@extends('logged_header')

<div class="col-md-offset-2 col-md-8">
    <h1>Mon Panier</h1>
    <?php
    $priceTotal = 0;
    if (!empty($cart['items'])) {
        ?>

        <div class="bar-div row">
            @foreach($cart as $cartLine)
            @foreach($cartLine as $cartItem)
            <div class="col-md-12">
                <div class="pull-left">{{$cartItem['nom']}} x 1 exemplaire(s)</div>
                <div class="pull-right">{{$cartItem['price']}} €</div>
                <?php $priceTotal += $cartItem['price']; ?>
            </div>
            @endforeach
            @endforeach
        </div>
        <div class="bar-div row">
            <div class="col-md-12">
                <div class="pull-left">Total</div>
                <div class="pull-right">{{$priceTotal}} €</div>
            </div>
        </div>
        <div class="row">
            <a class="btn btn-turquoise pull-right" href="{{ url('confirm_cart') }}">Acheter</a> 
        </div>
    <?php } else { ?>
        Votre panier semble vide 
        <a class="btn btn-turquoise" href="{{ url('index') }}">Faites des achats</a> 
    <?php } ?>

</div>
@extends('footer')