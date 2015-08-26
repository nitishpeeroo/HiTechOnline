<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author pss
 */
class Evenement extends Eloquent
{
    protected $table = 'evenement';
    protected $fillable = array('id_evenement', 'nom', 'debut_evenement', 'fin_evenement');
}
