<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commande
 *
 * @author pss
 */

class Commande extends Eloquent
{
    protected $table = 'commande';
    protected $fillable = array('id', 'id_client');
}