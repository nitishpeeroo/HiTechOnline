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
            $id_client = Session::get('client_id');  
            //
            $event_current = array();
            $isevt = false;
            if($id_client !== null){
                $event_clients = ClientEvenement::where('id_client', '=', $id_client)->get();          
                $date = date('m/d/Y h:i:s a', time()); 
                foreach ($event_clients as $event_client) {
                    $evt = DB::table('evenement')
                    ->where('id','=', $event_client->id_evenement) 
                            ->where('debut_evenement','>',$date)
                            ->get();               
                    $event_current[] = $evt;
                } 
                if(count($event_current[0]) != 0){$isevt = true;}
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
                    ->with('event_current', $event_current)
                    ->with('isevt', $isevt);
           
           } 
                             
}
