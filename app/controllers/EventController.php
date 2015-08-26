<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventController
 *
 * @author pss
 */
class EventController extends \BaseController {

    public function showEvent() {
        return View::make('event_show');
    }
    public function createEvent() {
        return View::make('event_create');
    }
    public function listEvent() {
        
        return View::make('event_list');
    }

}
