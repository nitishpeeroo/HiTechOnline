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
        // condition d'inscription
        $rules = array(   
            'nom' => 'required|min:1',
            'prenom' => 'required|min:1',
            'adresse' => 'required|min:1',
            'code_postal' => 'required|min:5',
            'ville' => 'required|min:1',
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        // On récupere  les infos du formulaire
        $nom = Input::get('nom');
        $prenom = Input::get('prenom');
        $email = strtolower(Input::get('email'));
        $password = Hash::make(Input::get('password'));
        $adresse = Input::get('adresse');
        $complement_adresse = Input::get('complement_adresse');
        $code_postal = Input::get('code_postal');
        $ville = Input::get('ville'); 
        
        $userdata = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $password,
            'adresse' => $adresse,
            'complement_adresse' => $complement_adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'isNewsLetter' => 0
        );
        // Create user
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
              return Redirect::to('/');
        } else {
            $user = User::create($userdata); 
            $user_con = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            if (Auth::attempt($user_con)) {               
                return Redirect::intended('index/');
            } else {
                // validation not successful, send back to form
                return Redirect::to('/')
                        ->withErrors($validator)
                        ->withInput(Input::except('password'));
        }
       }     
    }

    public function doLogin() {      
        // validate the info, create rules for the inputs
        $rules = array(
            'email_login' => 'required|email', // make sure the email is an actual email
            'password_login' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {

            return Redirect::to('/')
                            ->withErrors($validator)
                            ->withInput(Input::except('password_login')) 
                            ->withInput(Input::except('email_login'));
        } else {
            //return Redirect::to('index');
            // create our user data for the authentication
            $user = array(
                'email' => Input::get('email_login'),
                'password' => Input::get('password_login')
            );           
            // var_dump(Auth::attempt($user));
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
