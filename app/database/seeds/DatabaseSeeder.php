<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

	DB::table('evenement')->insert(array(
            array('id_evenement'=>1, 'nom'=>"Tache 1", 'debut_evenement' =>'2015-08-27 00:00:00','fin_evenement'=>'2015-08-27 00:00:00'),
            array('id_evenement'=>2, 'nom'=>"Tache 2", 'debut_evenement' =>'2015-08-27 00:00:00','fin_evenement'=>'2015-08-27 00:00:00'),
            array('id_evenement'=>3, 'nom'=>"Tache 3", 'debut_evenement' =>'2015-08-27 00:00:00','fin_evenement'=>'2015-08-27 00:00:00'),
            array('id_evenement'=>4, 'nom'=>"Tache 4", 'debut_evenement' =>'2015-08-27 00:00:00','fin_evenement'=>'2015-08-27 00:00:00')
        ));
	}

}
