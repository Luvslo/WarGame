<?php

class Child extends Individual {

    public function __construct() {
        parent::__construct($health = 5, $attack = 5);
        $this->health = $health;
        $this->health = $attack;
    }
}