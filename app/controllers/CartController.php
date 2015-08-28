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
class cartController extends \BaseController {

    //fonction qui ajoute des produits dans le panier
    public function addToCart($event_id) {
        if (Request::ajax()) {
            //on récupère les informations envoyer avec ajax
            $data = Input::all();

            // on récupère les informations du produit
            $product = Produit::find($data['product_id']);

            //on prépare les donnée à insérer dans la session cart
            $parsedata = [
                'id' => $data['product_id'],
                'price' => $data['price'],
                'nom' => $product->description,
                'evenement_id' => $data['evenement_id'] 
            ];

            // on charge la session cart avec les nouvelles données.
            Session::push('cart.items', $parsedata);
        }
    }

    public function showCart() {

        //on récupère la session cart
        $cart = Session::get('cart');

        return View::make('cart')
                        ->with('cart', $cart);
    }

    public function confirmCart() {
        //on récupère l'id du client
        $id = Session::get('client_id');
        
        //on trouve le client avec son id
        $user = User::find($id);
        
        return View::make('confirm_cart')
                        ->with('user', $user);
    }

    public function confirmedCart() {
        //on récupère l'id du client
        $id = Session::get('client_id');
        
        //on trouve le client avec son id
        $user = User::find($id);
        
        //on charge les données pour la création de la commande
        $data = array(
            'id_client' => $user->id
        );

        //on créer une nouvelle commande
        $commande = Commande::create($data);
        
        //on récupère les données de la session cart
        $cart_aray = Session::get('cart');

        foreach ($cart_aray as $c_array) {
            foreach ($c_array as $cart_line) {
                
                //on charge les données avant de créer une nouvelle ligne de commande
                $data = array(
                    'id_client' => $user->id,
                    'id_produit' => $cart_line['id'],
                    'quantite' => 1,
                    'id_command' => $commande->id
                );
                // pour chaque tour, on crée une nouvelle ligne de commande dans la base
                $ligne_commande = LigneCommande::create($data);
            }
        }
        
        //on supprime la session cart, et on la recrée vide. 
        Session::forget('cart');
        Session::put('cart.items', '');


        return View::make('confirmed_cart');
    }

}
