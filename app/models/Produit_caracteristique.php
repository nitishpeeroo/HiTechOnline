<?php

class Produit_caracteristique extends Eloquent {

    protected $table = 'produit_caracteristique';
    protected $fillable = array('id', 'id_produit', 'id_caracteristique', 'valeur');

}
