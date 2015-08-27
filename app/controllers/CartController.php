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

    public function addToCart() {
        if (Request::ajax()) {
            $data = Input::all();

            //$product = Produit::find($data['product_id']);

            $parsedata = [
                'id' => $data['product_id'],
                'price' => $data['price']
                //'product' => $product
            ];

            Session::push('cart.items', $parsedata);
        }
    }

    public function showCart() {

        $cart = Session::get('cart');

        return View::make('cart')
                        ->with('cart', $cart);
    }

}
