@extends('header')

<div class="container">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">                               
            <fieldset>
                <h1>Modifier les informations</h1>
            {{ Form::open(array('url' => 'save_profil')) }} 
                <div class="form-group">
                    {{Form::label('Nom')}}
                    {{Form::text('nom')}}                 
                </div>
                <div class="form-group">
                    {{Form::label('Prenom')}}
                    {{Form::text('prenom')}}                   
                </div>
                <div class="form-group">
                    {{Form::label('E-mail')}}
                    {{Form::text('email')}}                   
                </div>
                <div class="form-group">
                    {{Form::label('Mot de passe')}}
                    {{Form::text('password')}}                    
                </div>
                <div class="form-group">
                    {{Form::label('Adresse')}}
                    {{Form::text('adresse')}}                   
                </div>
                <div class="form-group">
                    {{Form::label('Complement Adresse')}}
                    {{Form::text('complement_adresse')}}                  
                </div>
                <div class="form-group">
                    {{Form::label('Code Postal')}}
                    {{Form::text('code_postal')}}                    
                </div>
                <div class="form-group">
                    {{Form::label('Ville')}}
                    {{Form::text('ville')}}                  
                </div> 
                {{Form::submit("Enregistrer", array("class"=>"btn btn-primary"))}}
                {{ Form::close() }}
        </div>
    </div>
</div>
@extends('footer')
