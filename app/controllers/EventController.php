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

        //on récupère les produits
        $produits = DB::table('produit_evenement')
                ->join('produit', 'produit_evenement.id_produit', '=', 'produit.id')
                ->where('id_evenement', '=', $id)
                ->select('produit.id', 'produit.image', 'produit.description', 'produit_evenement.prix_unitaire', 'produit_evenement.quantite')
                ->get();

        //on récupère les evenements
        $evenement = DB::table('evenement')
                ->where('id', '=', $id)
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

            //on lie un client à un evenement dans la base
            DB::table('client_evenement')->insert(
                    array('id_client' => $client_id, 'id_evenement' => $data['event_id'])
            );
        }
    }

    public function FindBestSeller() {
        //on prend les 3 derniers evenements
        $produits = DB::table('ligne_commande')
                ->groupBy('evenement_id')
                ->orderBy('evenement_id', 'desc')
                ->take(3)
                ->get();
        //var_dump(count($produits));
        $event_top = '';
        for ($i = 0; $i < count($produits); $i++) {
            $event_top[] = $produits[$i]->evenement_id;
        }
        
        // on prends les 10 produits des 3derniers evenements
        $produit_top = DB::table('ligne_commande')
                ->select('id_produit')
                ->whereIn('evenement_id', $event_top)
                ->groupBy('id_produit')
                ->take(10)
                ->get();
        
          $id_produits = '';
        for ($i = 0; $i < count($produit_top); $i++) {
            $id_produits[] = $produit_top[$i]->id_produit;
        }
        
        
        $bestseller = DB::table('produit')
                ->whereIn('id', $id_produits)
                ->get();
        
        return View::make('best_seller')
                ->with('produits',$bestseller);
    }

    public function createEvent() {
        return View::make('event_create');
    }

    public function listEvent() {

        return View::make('event_list');
    }

}
