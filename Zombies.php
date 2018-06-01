<?php

class Zombies extends Population{

    public function __construct($size) {
        for ($i = 0; $i < $size; $i++) {
            $this->members[$i] = new Zombie();
        }
    }

    public function alive() {
        echo 'Zombies alive: ' . count($this->members) . '<br>';

        if (count($this->members) <= 0) {
            echo '<strong>Humans win the war.</strong><br>';
        }

        return count($this->members);
    }
}