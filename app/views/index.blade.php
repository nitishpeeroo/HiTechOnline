@extends('header')
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HI TECH ONLINE</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6 index-bg">
            <h1>Déjà membre ?</h1>
            <form>
                <div class="row">
                    <input class="col-md-4 form-control" type="email" placeholder="email" />
                    <input class="col-md-4 form-control" type="password" placeholder="mot de passe"/>
                    <input class="col-md-4 btn btn-default" type="submit" value="Accèder aux ventes"/>
                </div>
            </form>
        </div>
        <div class="col-md-6">

            <form>
                <h1>Inscrivez vous gratuitement</h1>
                <div class="row">
                    <div class="col-md-6"><input class="form-control" type="text" placeholder="Nom" /></div>
                    <div class="col-md-6"><input class="form-control" type="text" placeholder="Prénom" /></div>
                </div>
                <div class="row"><div class="col-md-12"><input class="form-control" type="text" placeholder="Email" /></div></div>
                <div class="row"><div class="col-md-12"><input class="form-control" type="text" placeholder="Mot de  passe" /></div></div>
                <div class="row"><div class="col-md-12"><input class="btn btn-default" type="submit" value="S'inscrire et accéder aux ventes" /></div></div>
            </form>
        </div>
    </div>
</div>
@extends('footer')
