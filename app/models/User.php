<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('remember_token');
    protected $fillable = array('nom', 'prenom','email', 'password', 'adresse', 'complement_adresse', 'code_postal', 'ville', 'isNewsLetter');
    
  
}
