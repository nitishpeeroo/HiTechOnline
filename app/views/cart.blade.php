@extends('logged_header')
<?php
var_dump($cart);
?>

<div class="col-md-offset-2 col-md-8">
    <h1>Mon Panier</h1>
    @foreach($cart as $cartLine)

    @foreach($cartLine as $cartItem)
    <div class="bar-div row">
        {{$cartItem['id']}}
        {{$cartItem['price']}}
    </div>

    @endforeach
    @endforeach
</div>
@extends('footer')