<?php

class LigneCommande extends Eloquent
{
    protected $table = 'ligne_commande';
    protected $fillable = array('id', 'id_client', 'id_produit', 'id_commande', 'quantite', 'date_commande');
}
