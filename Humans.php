<?php

class Humans extends Population {

    public function __construct($size) {
        for ($i = 0; $i < $size; $i++) {
            $this->members[$i] = new Human();
        }
        $this->members[rand(0, $size-1)] = new Child();
    }

    public function alive() {
        echo 'Humans alive: ' . count($this->members) . '<br>';

        if (count($this->members) <= 0) {
            echo '<strong>Zombies win the war.</strong><br>';
        }

        return count($this->members);
    }
}