<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HitTechDataBase extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // Table acteur 
        Schema::create('acteur', function($table) {
            $table->increments('id');
            $table->string('role');
            $table->string('identifiant');
            $table->string('password');
            $table->timestamps();
            });	                      
        // Table Produit
        Schema::create('produit', function($table) {
            $table->increments('id');
            $table->integer('id_produit_caracteristique');
            $table->double('quantite');
            $table->integer('id_categorie');
            $table->string('image');
            $table->string('description');
            $table->string('nom');
            $table->timestamps();
        });
        // Caractéristique
        Schema::create('caracteristique', function($table) {
            $table->increments('id');
            $table->Sring('type_caracteristique');
            $table->timestamps();
        });
        // Produit caracteristique
        Schema::create('produit_caracteristique', function($table) {
            $table->increments('id');
            $table->integer('id_produit');
            $table->integer('id_carateristique');
            $table->string('valeur'); 
            $table->timestamps();
        });
        // categorie
        Schema::create('categorie', function($table) {
            $table->increments('id');
            $table->string('libelle');
            $table->integer('id_parent');
            $table->timestamps();
        });
        // client
        Schema::create('client', function($table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('password');
            $table->string('adresse');
            $table->string('complement_adresse');
            $table->integer('code_postal');
            $table->string('ville');
            $table->boolean('isNewsLetter');
            $table->timestamps();
        });
        // newsletter
        Schema::create('newsletter', function($table) {
            $table->increments('id');
            $table->string('objet');
            $table->string('message');
            $table->timestamp('horodateur');
            $table->timestamps();
        });
        Schema::create('client_newsletter', function($table) {
            $table->increments('id');
            $table->integer('id_newsletter');
            $table->integer('id_client');
            $table->timestamps();
        });
        // commande
        Schema::create('commande', function($table) {
            $table->increments('id');
            $table->integer('id_client'); 
            $table->timestamps();
            }); 
        Schema::create('ligne_commande', function($table) {
            $table->increments('id');
            $table->integer('id_client');
            $table->integer('id_produit');
            $table->integer('id_command');
            $table->integer('quantite');
            $table->timestamp('date_commande');
            $table->timestamps();
        });
        // livreur
        Schema::create('livreur', function($table) {
            $table->increments('id');
            $table->integer('societe');
            $table->integer('tarif');
            $table->timestamp('date_estimation');
            $table->timestamps();
        });
        Schema::create('commande_livreur', function($table) {
            $table->increments('id');
            $table->integer('id_commande');
            $table->integer('id_livreur'); 
            $table->timestamps();
            });	 
        Schema::create('detail', function($table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('id_commande');
            $table->timestamps();
        });
        Schema::create('detail_livreur', function($table) {
            $table->increments('id');
            $table->integer('id_livreur');
            $table->integer('id_commande');
            $table->string('valeur');
            $table->timestamps();
        });
        //           
        Schema::create('evenement', function($table) {
            $table->increments('id');
	    $table->string('nom');
            $table->string('description_evenement');
            $table->timestamp('debut_evenement');
            $table->timestamp('fin_evenement');
            $table->timestamps();
        });
        Schema::create('produit_evenement', function($table) {
            $table->increments('id');
            $table->integer('id_produit');
            $table->integer('id_evenement');
            $table->double('quantite');
            $table->String('prix_unitaire');
            $table->timestamps();
        });
        Schema::create('client_evenement', function($table) {
            $table->increments('id');
            $table->integer('id_client');
            $table->integer('id_evenement');
            $table->timestamps();
        });
        //                    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('acteur');
        Schema::drop('produit');
        Schema::drop('caracteristique');       
        Schema::drop('categorie');
        Schema::drop('client');
        Schema::drop('newsletter');
        Schema::drop('client_newsletter');
        Schema::drop('commande'); //////////////////////////////////////
        Schema::drop('ligne_commande');
        Schema::drop('livreur');
        Schema::drop('commande_livreur');
        Schema::drop('detail');
        Schema::drop('detail_livreur');
        Schema::drop('evenement');
        Schema::drop('produit_evenement');
        Schema::drop('client_evenement');
        Schema::drop('produit_caracteristique');
    }

}
