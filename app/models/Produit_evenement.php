<?php

class Produit_evenement {

    protected $table = 'produit_evenement';
    protected $fillable = array('id', 'id_produit', 'id_evenement', 'quantite', 'prix_unitaire');

}
