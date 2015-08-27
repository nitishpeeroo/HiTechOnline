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
            
            //
            $event_clients = ClientEvenement::where('id_client', '=', 2)->get();
            $event_current = array();
            $date = date('m/d/Y h:i:s a', time()); 
            foreach ($event_clients as $event_client) {
                $evt = DB::table('evenement')
                ->where('id','=', $event_client->id_evenement) 
                        ->where('debut_evenement','>',$date)
                        ->get();               
                $event_current[] = $evt;
            }                              
            foreach ($events as $event) {
                $produits_evenement = DB::table('produit_evenement')
                ->where('id_evenement','=', $event->id_evenement)                       
                        ->get();
                $produits_tab[] = $produits_evenement;
            }               
            return View::make('homepage')
                    ->with('events', $events)
                    ->with('produits_evenements', $produits_tab)
                    ->with('event_current', $event_current);
           
           } 
           
           
           /**
            $event_clients = ClientEvenement::where('id_client', '=', 2)->get();
            $event_client_array = array();
            $event_client_ids = array();
            foreach ($event_clients as $event_client) {                
                array_push($event_client_array, $event_client);               
            }       
            foreach ($event_client_array as $evtClient) {                
                $event_client_ids[]  = $evtClient;              
            } 
            // seletion des évenement courrent
            $event_current = array();
           // for($event_client_ids as $evt_event) {
             $date = date('m/d/Y h:i:s a', time());          
           for($i = 0 ; $i < count($event_client_ids) ; $i++ ) {
                       $evt = Evenement::where('id', '=', $event_client_ids[$i]['id_evenement'])
                        ->where('debut_evenement','>',$date)
                        ->get();               
                array_push($event_current, $evt);
            }  
            //
            */
}
