<?php

class ProfilController extends \BaseController {    
    
    function doEdit(){
     // Initialisation des champs 
     $nom =  "";
     $prenom =  "";
     $email =  "";
     $adresse =  "";
     $complement_adresse =  "";
     $code_postal =  ""; 
     $ville =  "";
     $isNewsLetter = false;
     // Infos de l'acteur de la session
     $id = Session::get('client_id');       
     $user = User::find($id); 
     if($user != null && $user !="" ){
         $nom =  $user->nom;
         $prenom =  $user->prenom;
         $email =  $user->email;
         $adresse =  $user->adresse;
         $complement_adresse =  $user->complement_adresse;
         $code_postal =  $user->code_postal;
         $ville =  $user->ville; 
         $isNewsLetterval = $user->isNewsLetter;      
         if($isNewsLetterval == 1 ) $isNewsLetter = true;
     }  
             
	return View::make('profil')
             ->with('nom',$nom)
             ->with('prenom',$prenom)
             ->with('email',$email)
             ->with('adresse',$adresse)
             ->with('complement_adresse',$complement_adresse)
             ->with('code_postal',$code_postal)
             ->with('ville',$ville)
             ->with('isNewsLetter',$isNewsLetter);

    }

    public function doSave() {

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
    }

    public function showOrder() {
        //récucpération de l'ID du client
        $id = Session::get('client_id');

        $commandes = DB::table('commande')
                ->where('id_client', '=', $id)
                ->get();
        $lignes_commandes = [];


        $commandes = DB::table('commande')
                ->where('commande.id_client', '=', $id)
                ->select('commande.id','commande.created_at')
                ->get();

        

        /*foreach ($commandes as $commande) {
            $lignes_commande = DB::table('ligne_commande')
                    ->where('id_client', '=', $id)
                    ->where('id_command', '=', $commande->id)
                    ->get();
            $lignes_commandes[] = $lignes_commande;
        }*/

        return View::make('order')
                        ->with('commandes', $commandes);
    }

}
