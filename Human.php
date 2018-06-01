<?php

class Human extends Individual {

    public function __construct() {
        parent::__construct($health = 10, $attack = 10);
        $this->health = $health;
        $this->attack = $attack;
    }

    public function shots(Zombie $zombie, $buff) {
        $health = $zombie->getHealth();

        if ($buff == 0) {
            echo 'Human shots Zombie.<br>';
        } else {
            echo '<strong>Human shots Zombie.</strong><br>';
        }

        echo 'Zombie health before shot: ' . $health . '<br>';

        $health -= ($this->attack + $buff);

        if ($health < 0) {
            $health = 0;
        }

        echo 'Zombie health after shot: ' . $health . '<br>';

        $zombie->setHealth($health);
    }
}