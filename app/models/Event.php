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
class Event extends Eloquent
{
    protected $table = 'evenement';
    protected $fillable = array('libelle_evenement','debut_evenement', 'fin_evenement');
}
