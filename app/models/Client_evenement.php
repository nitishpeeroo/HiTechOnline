<?php

            
class Client_evenement extends Eloquent {
    
    protected $table = 'client_evenement';
    protected $fillable = array('id', 'id_client', 'id_evenement');
}
