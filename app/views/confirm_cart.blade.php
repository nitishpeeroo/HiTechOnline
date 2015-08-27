@extends('logged_header')
<?php
var_dump($user);
?>

<div class="col-md-offset-2 col-md-8">
    <h1>Confirmer l'adresse</h1>

        <div class="bar-div row">
            <div class="col-md-12">
                <div class="pull-left"></div>
                <div class="pull-right"></div>
            </div>
        </div>
        <div class="row">
            <a class="btn btn-turquoise pull-right" href="{{ url('cart_confirmed') }}">Confirmer</a> 
        </div>
 

</div>
@extends('footer')