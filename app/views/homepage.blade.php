<?php
//var_dump($events);
?>
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
    @endforeach
    
</div>

@extends('footer')