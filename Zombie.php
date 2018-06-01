<?php

class Zombie extends Individual {

    public function __construct() {
        parent::__construct($health = 20, $attack = 5);
        $this->health = $health;
        $this->attack = $attack;
    }

    public function bites(Human $human) {
        $health = $human->getHealth();

        echo 'Zombie bites Human.<br>';
        echo 'Human health before bite: ' . $health . '<br>';

        $health -= $this->attack;

        if ($health < 0) {
            $health = 0;
        }

        echo 'Human health after bite: ' . $health . '<br>';

        $human->setHealth($health);
    }

    public function eats(Child $child) {
        $health = $child->getHealth();

        $health -= $this->attack;

        if ($health < 0) {
            $health = 0;
        }

        echo 'Zombie eats a little child. :O<br>';

        $child->setHealth($health);
    }
}