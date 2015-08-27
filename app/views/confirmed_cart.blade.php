@extends('logged_header')

<div class="col-md-offset-2 col-md-8">
    <h1>Merci pour votre commande</h1>
    <div class="bar-div row">
        <div class="col-md-12">
            Votre commande a été valider, vous serez prévenus par mail lors de l'expédition des produits.<br />
            Bonne Journée.
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-turquoise pull-right" href="{{ url('index') }}">Retour a la page d'accueil</a> 
        </div>
    </div>
</div>
@extends('footer')