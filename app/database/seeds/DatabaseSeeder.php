<?php

class DatabaseSeeder extends Seeder {
	
    public function run() {
        Eloquent::unguard();


        DB::table('client')->insert(array(
            array('nom' => 'nirmalasingam', 'prenom' => 'nemalaupan', 'email' => 'nirmalasingam@outlook.fr', 'password' => '$2y$10$twSAqR.bjNRI7k7PPmYZdOraXRLfj.IykaifKRd4yNl2ET0fEjHxG', 'adresse' => '88 avenue de rosny', 'complement_adresse' => 'BIS', 'code_postal' => '93130', 'ville' => 'noisy', 'isNewsLetter' => 1)
        ));

        DB::table('evenement')->insert(array(
            array('id' => 1, 'nom' => "Séance 1", 'debut_evenement' => '2015-08-31 00:00:00', 'fin_evenement' => '2015-08-31 23:00:00'),
            array('id' => 2, 'nom' => "Séance 2", 'debut_evenement' => '2015-08-31 00:00:00', 'fin_evenement' => '2015-08-31 23:00:00'),
            array('id' => 3, 'nom' => "Séance 3", 'debut_evenement' => '2015-08-31 00:00:00', 'fin_evenement' => '2015-08-31 23:00:00'),
            array('id' => 4, 'nom' => "Séance 4", 'debut_evenement' => '2015-08-27 00:00:00', 'fin_evenement' => '2015-08-27 00:00:00')
        ));

        DB::table('client_evenement')->insert(array(
            array('id' => 1, 'id_client' => 1, 'id_evenement' => 1)
        ));

        DB::table('produit')->insert(array(
            array('id' => 1, 'id_produit_caracteristique' => 1, 'quantite' => 25, 'id_categorie' => 1, 'image' => '', 'description' => 'Xbox One'),
            array('id' => 2, 'id_produit_caracteristique' => 1, 'quantite' => 25, 'id_categorie' => 1, 'image' => '', 'description' => 'PS4'),
            array('id' => 3, 'id_produit_caracteristique' => 1, 'quantite' => 25, 'id_categorie' => 1, 'image' => '', 'description' => 'Wii U')
        ));

        DB::table('produit_evenement')->insert(array(
            array('id' => 1, 'id_produit' => 1, 'id_evenement' => 1, 'quantite' => 50, 'prix_unitaire' => 500),
            array('id' => 2, 'id_produit' => 2, 'id_evenement' => 1, 'quantite' => 25, 'prix_unitaire' => 400),
            array('id' => 3, 'id_produit' => 3, 'id_evenement' => 1, 'quantite' => 10, 'prix_unitaire' => 300),
        ));
    }

}
