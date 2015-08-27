<?php

class Produit extends Eloquent {

    protected $table = 'produit';
    protected $fillable = array('id', 'id_produit_caracteristique', 'quantite', 'id_categorie', 'id_categorie', 'image', 'description','nom');

}
