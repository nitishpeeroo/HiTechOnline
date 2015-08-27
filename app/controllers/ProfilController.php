<?php

class ProfilController extends \BaseController {
    
    
    function doEdit(){  
    $id = Session::get('client_id');       
    $user = User::find($id); 
      // $nom =  $user->nom;
       return var_dump($user);
//	return View::make('profil')
//                ->with('nom',$nom);
    }
    
    function doSave() {
        
        $id = Session::get('client_id');       
        $user = User::find($id);       
        // infos a mettre a jour
        $user->nom = Input::get('nom');
        $user->prenom = Input::get('prenom');
        $user->email = strtolower(Input::get('email'));
        $user->password = Hash::make(Input::get('password'));
        $user->adresse = Input::get('adresse');
        $user->complement_adresse = Input::get('complement_adresse');
        $user->code_postal = Input::get('code_postal');
        $user->ville = Input::get('ville');
        
        $user->save();
        
        return var_dump($user);
    }
}
