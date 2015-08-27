<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ligne_commande
 *
 * @author pss
 */
class Ligne_commande extends Eloquent
{
    protected $table = 'ligne_commande';
    protected $fillable = array('id', 'id_client', 'id_produit', 'quantite', 'date_commande');
}
