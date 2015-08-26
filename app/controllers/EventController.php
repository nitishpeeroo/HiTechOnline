<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventController
 *
 * @author pss
 */
class EventController extends \BaseController {

    public function showEvent($id) {

        $produits_evenement = DB::table('produit_evenement')
                ->where('id_evenement', '=', $id)
                ->get();
        
        foreach($produits_evenement as $produits_event) {
            $produit = DB::table('produit')
                ->where('id_produit', '=', $produits_event->id_produit)
                ->get();
            
            $produits[] = $produit;
        }

        return View::make('event_show')
                        ->with('event_id', $id)
                        ->with('produits_evenement', $produits_evenement)
                        ->with('produits', $produits);
    }
    public function joinEvent($id) {
        
    }

    public function createEvent() {
        return View::make('event_create');
    }

    public function listEvent() {

        return View::make('event_list');
    }

}
