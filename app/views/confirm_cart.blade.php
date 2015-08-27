@extends('logged_header')

<div class="col-md-offset-2 col-md-8">
    <h1>Confirmer l'adresse</h1>
    <div class="bar-div row">
        <div class="col-md-12">
            {{$user->nom}} {{$user->prenom}} <br />
            {{$user->adresse}} <br />
            {{$user->code_postal}} {{$user->ville}}
        </div>
    </div>
    <div class="row">
        <a class="btn btn-turquoise pull-right" href="{{ url('cart_confirmed') }}">Confirmer</a> 
    </div>


</div>
@extends('footer')