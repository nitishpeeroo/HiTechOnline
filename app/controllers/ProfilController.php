<?php

class ProfilController extends \BaseController {

    public function doEdit() {
        $id = Session::get('client_id');
        $user = User::find($id);
        // $nom =  $user->nom;
        return var_dump($user);
//	return View::make('profil')
//                ->with('nom',$nom);
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

        return var_dump($user);
    }

    public function showOrder() {
        //récucpération de l'ID du client
        $id = Session::get('client_id');

        $commandes = DB::table('commande')
                ->where('id_client', '=', $id)
                ->get();
        $lignes_commandes = [];


        $test = DB::table('commande')
                ->select(DB::raw('sum(ligne_commande.prix), commande.id'))
                ->where('commande.id_client', '=', $id)
                ->join('ligne_commande', 'ligne_commande.id_commande', '=', 'commande.id')
                ->join('produit', 'ligne_commande.id_produit', '=', 'produit.id')
                ->groupBy('commande.id')
                ->get();

        return var_dump($test);

        foreach ($commandes as $commande) {
            $lignes_commande = DB::table('ligne_commande')
                    ->where('id_client', '=', $id)
                    ->where('id_commande', '=', $commande->id)
                    ->get();
            $lignes_commandes[] = $lignes_commande;
        }

        return View::make('order')
                        ->with('commandes', $commandes)
                        ->with('lignes_commandes', $lignes_commandes);
    }

}
