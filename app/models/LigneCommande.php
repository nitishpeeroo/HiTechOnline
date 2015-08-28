<?php

class LigneCommande extends Eloquent
{
    protected $table = 'ligne_commande';
    protected $fillable = array('id', 'id_client', 'id_produit', 'id_command', 'quantite', 'date_commande', 'evenement_id');
}
