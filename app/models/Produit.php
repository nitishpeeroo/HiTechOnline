<?php

class Produit extends Eloquent{
    protected $fillable = array('libelle','prix','quantite','image','description');

    /**
     * @Descripion Relationship between Role to User
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    
}

