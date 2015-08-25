@extends('header')

<div class="container">
    <div class="row">
        <div class="col-md-6 index-bg">
            <h1>Déjà membre ?</h1>
            {{ Form::open(array('url' => 'Login')) }}
                <div class="row">
                    <input class="col-md-4 form-control" name="email" id="email" type="email" placeholder="email" />
                    <input class="col-md-4 form-control" name="password" id="password" type="password" placeholder="mot de passe"/>
                    <input class="col-md-4 btn btn-default" type="submit" value="Accèder aux ventes"/>
                </div>
            {{ Form::close() }}
        </div>
        <div class="col-md-6">

            {{ Form::open(array('url' => 'Registration')) }}
                <h1>Inscrivez vous gratuitement</h1>
                <div class="row">
                    <div class="col-md-6"><input class="form-control" name="nom" id="nom" type="text" placeholder="Nom" /></div>
                    <div class="col-md-6"><input class="form-control" name="prenom" id="prenom" type="text" placeholder="Prénom" /></div>
                </div>
                <div class="row"><div class="col-md-12"><input class="form-control" name="email" id="email" type="text" placeholder="Email" /></div></div>
                <div class="row"><div class="col-md-12"><input class="form-control" name="password" id="password" type="text" placeholder="Mot de  passe" /></div></div>
                <div class="row"><div class="col-md-12"><input class="btn btn-default" type="submit" value="S'inscrire et accéder aux ventes" /></div></div>
                <h2>Adresse</h2>
                <div class="row">
                    <div class="col-md-6"><input class="form-control" name="adresse" id="adresse" type="text" placeholder="Adresse" /></div>
                    <div class="col-md-6"><input class="form-control" name="complment_adresse" id="complement_adresse" type="text" placeholder="Complement d'adresse" /></div>
                </div>
                <div class="row">
                    <div class="col-md-6"><input class="form-control" name="code_postal" id="code_postal" type="text" placeholder="Code postal" /></div>
                    <div class="col-md-6"><input class="form-control" name="ville" id="ville" type="text" placeholder="Ville" /></div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@extends('footer')
