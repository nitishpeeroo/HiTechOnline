<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author pss
 */
class UserController {
    
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $adresse;
    private $complement_adresse;
    private $code_postal;
    private $ville;
    private $isNewsLetter;
    
    public function __construct() {
        
    }
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getComplement_adresse() {
        return $this->complement_adresse;
    }

    public function getCode_postal() {
        return $this->code_postal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getIsNewsLetter() {
        return $this->isNewsLetter;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setComplement_adresse($complement_adresse) {
        $this->complement_adresse = $complement_adresse;
    }

    public function setCode_postal($code_postal) {
        $this->code_postal = $code_postal;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setIsNewsLetter($isNewsLetter) {
        $this->isNewsLetter = $isNewsLetter;
    }


}
