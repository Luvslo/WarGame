<?php

abstract class Individual {
    protected $health;
    protected $attack;

    public function __construct($health = 5, $attack = 5) {
        $this->health = $health;
        $this->attack = $attack;
    }

    public function getHealth() {
        return $this->health;
    }

    public function setHealth($health) {
        $this->health = $health;
    }
}