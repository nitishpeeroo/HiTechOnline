<?php

class Produit extends Eloquent {

    protected $table = 'produit';
    protected $fillable = array('id_produit', 'id_produit_caracteristique', 'quantite', 'id_categorie', 'id_categorie', 'image', 'description');

}
