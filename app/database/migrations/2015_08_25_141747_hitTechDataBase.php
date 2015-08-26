<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HitTechDataBase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	     // Table acteur 
	    Schema::create('acteur', function($table){           
            $table->increments('id_acteur');
            $table->string('role');
            $table->string('identifiant');
            $table->string('password');           
            $table->timestamps();
            });	                      
            // Table Produit
            Schema::create('produit', function($table){           
            $table->increments('id_produit');
            $table->integer('id_produit_caracteristique');
            $table->double('quantite');
            $table->integer('id_categorie');
            $table->string('image');
            $table->string('description');
            $table->timestamps();
            });
         // Caractéristique
            Schema::create('caracteristique', function($table){
            $table->increments('id_caracteristique');
            $table->string('type_caracteristique');
            $table->timestamps();
            });               
         // Produit caracteristique
            Schema::create('produit_caracteristique', function($table){
            $table->increments('id_produit_caracteristique');
            $table->integer('id_produit');
            $table->integer('id_carateristique');
            $table->string('valeur');  
            $table->timestamps();
            });
         // categorie
            Schema::create('categorie', function($table){
            $table->increments('id_categorie');
            $table->string('libelle');
            $table->integer('id_parent'); 
            $table->timestamps();
            });
         // client
            Schema::create('client', function($table){
            $table->increments('id_client');
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
            Schema::create('newsletter', function($table){
            $table->increments('id_newsletter');
            $table->string('objet');
            $table->string('message');
            $table->timestamp('horodateur');   
            $table->timestamps();
            });
            Schema::create('client_newsletter', function($table){
            $table->increments('id_client_newsletter');         
            $table->integer('id_newsletter')->unsigned();
            $table->integer('id_client')->unsigned();
            $table->foreign('id_newsletter')->references('id_newsletter')->on('newsletter');
            $table->foreign('id_client')->references('id_client')->on('client');
            $table->timestamps();
            });
         // commande
            Schema::create('commande', function($table){
            $table->increments('id_commande');
            $table->integer('id_client')->unsigned();;
            $table->foreign('id_client')->references('id_client')->on('client');        
            }); 
            // ligne de commande
            Schema::create('ligne_commande', function($table){
            $table->increments('id');
            $table->integer('id_client');
            $table->integer('id_produit');
            $table->integer('quantite');
            $table->timestamp('date_commande');
            });           
         // livreur
            Schema::create('livreur', function($table){
            $table->increments('id_livreur');         
            $table->integer('societe');
            $table->integer('tarif');
            $table->timestamp('date_estimation');          
            });            
            Schema::create('commande_livreur', function($table){
            $table->increments('id_commande_livreur');
            $table->integer('id_commande')->unsigned();
            $table->integer('id_livreur')->unsigned();
            $table->foreign('id_commande')->references('id_commande')->on('commande');
            $table->foreign('id_livreur')->references('id_livreur')->on('livreur');        
            });
	    Schema::create('detail', function($table){
            $table->increments('id_detail');
	    $table->string('type');
            $table->integer('id_commande')->unsigned();            
            $table->foreign('id_commande')->references('id_commande')->on('commande');                    
            });
            Schema::create('detail_livreur', function($table){
            $table->increments('id');
	    $table->integer('id_detail');
            $table->integer('id_livreur');
            $table->string('valeur');
            $table->integer('id_commande')->unsigned();            
            $table->foreign('id_commande')->references('id_commande')->on('commande');                    
            });
            //           
	    Schema::create('evenement', function($table){
            $table->increments('id_evenement');
	    $table->string('nom');
            $table->timestamp('debut_evenement');
	    $table->timestamp('fin_evenement');           			
            });          
            Schema::create('produit_evenement', function($table){
            $table->increments('id');
            $table->integer('id_produit');
	    $table->integer('id_evenement');
            $table->double('quantite');
            $table->String('prix_unitaire');	                			
            });
            //                    
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acteur');
                Schema::drop('produit');
                Schema::drop('caracteristique');
                Schema::drop('produit_caracteristique');
                Schema::drop('categorie');
                Schema::drop('client');               
                Schema::drop('newsletter');
                Schema::drop('client_newsletter');
                Schema::drop('commande');//////////////////////////////////////
                Schema::drop('ligne_commande');
                Schema::drop('livreur');
                Schema::drop('commande_livreur');
                Schema::drop('detail');
                Schema::drop('detail_livreur');
                Schema::drop('evenement');
                Schema::drop('produit_evenement');
                
	}


}
