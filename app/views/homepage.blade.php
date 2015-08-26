@extends('logged_header')

<div class="col-md-12">
    <h1>Vos évènements inscrits disponibles</h1>
</div>

<div class="col-md-12">
    <h1>Nos 3 prochains évènements</h1>  
   
    @foreach($events as $event)
    <tr class="odd gradeX">
        <td>{{{ $event->nom }}}</td>       
    </tr>
    <div class="evenement row">
        <h3>{{{ $event->nom}}}</h3>
        Début : {{{ $event->debut_evenement}}} <br />
        Fin : {{{ $event->fin_evenement}}} <br />
    </div>
    @endforeach
    
</div>

@extends('footer')