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
                ->join('produit', 'produit_evenement.id_produit', '=', 'produit.id')
                ->where('id_evenement', '=', $id)
                ->select('produit.id', 'produit.image', 'produit.description', 'produit_evenement.prix_unitaire', 'produit_evenement.quantite')
                ->get();

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

            DB::table('client_evenement')->insert(
                    array('id_client' => $client_id, 'id_evenement' => $data['event_id'])
            );

            //return Redirect::to('index/');
        }
    }
    
    public function FindBestSeller() {      
         $produits = DB::table('ligne_commande')
                ->groupBy('evenement_id')
                ->orderBy('evenement_id','desc')
                ->take(3)
                ->get();
             var_dump(count($produits));
              $event_top = '';
             for($i = 0; $i < count($produits) ; $i++ )  {                           
                    $event_top[] =  $produits[$i]->evenement_id ;                  
                }             
            $produit_top = DB::table('ligne_commande')
                        ->select('id_produit')             
                        ->whereIn('evenement_id',$event_top)
                        ->groupBy('id_produit')
                        ->get();                                                            
             return var_dump($produit_top);           
    }

    public function createEvent() {
        return View::make('event_create');
    }

    public function listEvent() {

        return View::make('event_list');
    }
   
}
