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

    public function addToCart($event_id) {
        if (Request::ajax()) {
            $data = Input::all();

            $product = Produit::find($data['product_id']);

            $parsedata = [
                'id' => $data['product_id'],
                'price' => $data['price'],
                'nom' => $product->description
            ];

            Session::push('cart.items', $parsedata);
        }
    }

    public function showCart() {

        $cart = Session::get('cart');

        return View::make('cart')
                        ->with('cart', $cart);
    }

    public function confirmCart() {
        $id = Session::get('client_id');
        $user = User::find($id);
        return View::make('confirm_cart')
                        ->with('user', $user);
    }

    public function confirmedCart() {
        $id = Session::get('client_id');
        $user = User::find($id);
        $data = array(
            'id_client' => $user->id
        );

        $commande = Commande::create($data);
        $cart_aray = Session::get('cart');

        foreach ($cart_aray as $c_array) {
            foreach ($c_array as $cart_line) {
                $data = array(
                    'id_client' => $user->id,
                    'id_produit' => $cart_line['id'],
                    'quantite' => 1,
                    'id_commande' => $commande->id
                );
                $ligne_commande = LigneCommande::create($data);
            }
        }
        
        Session::forget('cart');
        Session::put('cart.items', '');

        return View::make('confirmed_cart');
    }

}
