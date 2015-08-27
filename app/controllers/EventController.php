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

        $produits = DB::table('produit_evenement')
                ->join('produit', 'produit_evenement.id_produit', '=', 'produit.id_produit')
                ->where('id_evenement', '=', $id)
                ->select('produit.image', 'produit.description', 'produit_evenement.prix_unitaire', 'produit_evenement.quantite')
                ->get();

        $evenement = DB::table('evenement')
                ->where('id_evenement', '=', $id)
                ->get();

        return View::make('event_show')
                        ->with('event_id', $id)
                        ->with('evenements', $evenement)
                        ->with('produits', $produits);
    }

    public function joinEvent() {

        if (Request::ajax()) {
            $data = Input::all();
            $client_id = Session::get('client_id');

            DB::table('client_evenement')->insert(
                    array('id_client' => $client_id, 'id_evenement' => $data['event_id'])
            );

            //return Redirect::to('index/');
        }
    }

    public function FindBestSeller() {
        return View::make('best_seller');
        /* $last3events = DB::table('produit')
          ->where('id_produit', '=', $produits_event->id_produit)
          ->get(); */
        //orderBy('id', 'DESC')->get();
    }

    public function createEvent() {
        return View::make('event_create');
    }

    public function listEvent() {

        return View::make('event_list');
    }

}
