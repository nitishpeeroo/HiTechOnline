@extends('logged_header')

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">                               
            <fieldset>
                <h1>Modifier les informations</h1>
                {{ Form::open(array('url' => 'save_profil')) }} 
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('Nom')}}</div>
                    <div class="pull-right">{{Form::text('nom')}} </div>                
                </div>
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('Prenom')}}</div> 
                    <div class="pull-right">{{Form::text('prenom')}}  </div>                  
                </div>
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('E-mail')}}</div> 
                    <div class="pull-right">{{Form::text('email')}}  </div>                  
                </div>
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('Mot de passe')}}</div> 
                    <div class="pull-right">{{Form::text('password')}}   </div>                  
                </div>
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('Adresse')}}</div> 
                    <div class="pull-right">{{Form::text('adresse')}}   </div>                 
                </div>
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('Complement Adresse')}}</div> 
                    <div class="pull-right">{{Form::text('complement_adresse')}}  </div>                 
                </div>
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('Code Postal')}}</div> 
                    <div class="pull-right">{{Form::text('code_postal')}}   </div>                  
                </div>
                <div class="form-group row">
                    <div class="pull-left">{{Form::label('Ville')}}</div> 
                    <div class="pull-right">{{Form::text('ville')}}  </div>                 
                </div> 
                <div class="pull-right">{{Form::submit("Enregistrer", array("class"=>"btn btn-primary"))}}</div>  
                {{ Form::close() }}
        </div>
    </div>
</div>
@extends('footer')
