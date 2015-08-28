@extends('logged_header')

<div class="col-md-offset-2 col-md-8">
    <h1>Mes Commandes</h1>

    <?php if (!empty($commandes)) { ?>

        @foreach($commandes as $commande)
        <div class="evenement row">
            Ma commande du {{$commande->created_at}}
        </div>
        @endforeach
        <?php
    } else {
        ?>
        Vous n'avez aucune commande, 
        <a class="btn btn-turquoise" href="#">Regarder nos ventes !</a>          

    <?php } ?>
</div>
@extends('footer')