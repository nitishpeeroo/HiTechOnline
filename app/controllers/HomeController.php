<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
        public function showIndex()
	{
		return View::make('index');
	}
         public function eventAll()
         {
            $events = Evenement::all(); 
            $produits_tab = '';
            
            foreach ($events as $event) {
                $produits_evenement = DB::table('produit_evenement')
                ->where('id_evenement','=', $event->id_evenement)
                        ->get();
                $produits_tab[] = $produits_evenement;
            }
            
            
            return View::make('homepage')
                    ->with('events', $events)
                    ->with('produits_evenements', $produits_tab);
           
           } 
}
