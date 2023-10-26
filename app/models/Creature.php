<?php

class Creature {

    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;

    public function __construct() {
        
    }
    public function getIdCreature() {
        return $this->idCreature;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function getLifeLevel() {
        return $this->lifeLevel;
    }

    public function getWeapon() {
        return $this->weapon;
    }
    public function setIdCreature($idCreature): void {
        $this->idCreature = $idCreature;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setAvatar($avatar): void {
        $this->avatar = $avatar;
    }

    public function setAttackPower($attackPower): void {
        $this->attackPower = $attackPower;
    }

    public function setLifeLevel($lifeLevel): void {
        $this->lifeLevel = $lifeLevel;
    }

    public function setWeapon($weapon): void {
        $this->weapon = $weapon;
    }



//Función para pintar cada ofertas
    function privateCreature2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<img src="'.$this->avatar.'" class="card-img-top" alt="Imagen de la criatura '. $this->name.'">';
        $result .= '<h5 class="card-title">'. $this->name.'</h5>';
        $result .= '<p class="card-text">'. $this->description.'</p>';
        $result .= '<a href="#" class="btn btn-primary">Mostrar mas</a>';
        $result .= '<a href="#" class="btn btn-primary">Modificar</a>';
        $result .= '<a href="#" class="btn btn-danger">Eliminar</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';


        return $result;
    }
//Función para pintar cada ofertas
    function publicCreature2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<img src="'.$this->avatar.'" class="card-img-top" alt="Imagen de la criatura '. $this->name.'">';
        $result .= '<h5 class="card-title">'. $this->name.'</h5>';
        $result .= '<p class="card-text">'. $this->description.'</p>';
        $result .= '<a href="#" class="btn btn-primary">Mostrar mas</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';


        return $result;
    }
    
}
?>