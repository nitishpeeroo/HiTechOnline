<?php

class ProfilController extends \BaseController {
    
    function doSave() {
        return var_dump(Auth::user());
//        $user = User::find(1);
//        $user->email = 'john@foo.com';
//        $user->save();
    }
}
