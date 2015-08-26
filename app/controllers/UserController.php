<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author pss
 */
class UserController extends \BaseController {

    function doRegistration() {
        $nom = Input::get('nom');
        $prenom = Input::get('prenom');
        $email = strtolower(Input::get('email'));
        $password = Hash::make(Input::get('password'));
        $adresse = Input::get('adresse');
        $complement_adresse = Input::get('complment_adresse');
        $code_postal = Input::get('code_postal');
        $ville = Input::get('ville');


        // validate the info, create rules for the inputs
        $rules = array(
            'nom' => 'required|text',
            'prenom' => 'required|text',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'adresse' => 'required|text',
            'code_postal' => 'required|text',
            'ville' => 'required|text'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        /* if ($validator->fails()) {
          return Redirect::to('/');
          } */

        $userdata = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'identifiant' => $email,
            'password' => $password,
            'adresse' => $adresse,
            'complment_adresse' => $complement_adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'isNewsLetter' => 0
        );
        $user = User::create($userdata);

        // Info de connexion
        $user_con = array(
            'email' => $email,
            'password' => $password
        );

        return var_dump(Auth::attempt($user_con));
        if (Auth::attempt($user_con)) {
            $id = Auth::user()->id;
            return var_dump($user_con);
        } else {
            //validation not successful, send back to form
            return Redirect::to('/');
            //return var_dump($user_con);
        }
    }

    public function doLogin() {
        $email = Input::get('email');
        $password = Hash::make(Input::get('password'));


        // validate the info, create rules for the inputs
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {

            return Redirect::to('/')
                            ->withErrors($validator) // send back all errors to the login form
                            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            //return Redirect::to('index');
            // create our user data for the authentication
            $user = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            /// var_dump(Auth::attempt($user));
            // attempt to do the login
            if (Auth::attempt($user)) {
                $id = Auth::user()->id;
                return Redirect::intended('index/' . $id);
            } else {
                // validation not successful, send back to form
                return Redirect::to('/');
            }
        }
    }

    public function doLogout() {

        Auth::logout();
        Cache::flush();
        Session::clear();
        return Redirect::to('/');
    }

}
