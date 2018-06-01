<?php

class Battlefield {

    private $humans;
    private $zombies;
    private $enraged;

    public function __construct(Humans $humans, Zombies $zombies) {
        $this->humans = $humans;
        $this->zombies = $zombies;
        $this->enraged = false;

        echo 'This war is a battle for survival between Humans and Zombies.<br>';
        $this->startBattle();
    }

    public function startBattle() {
        while ($this->humans->alive() > 0 && $this->zombies->alive() > 0) {
            $human = $this->getRandomHuman();
            $zombie = $this->getRandomZombie();
            if($terrain = 'Forest')

            if ($human instanceof Human && !$this->enraged) {
                $buff = 0;
                mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax() < 0.2 ? $human->shots($zombie, $buff) : $zombie->bites($human);
            } else if ($human instanceof Human && $this->enraged){
                $buff = 10;
                mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax() < 0.4 ? $human->shots($zombie, $buff) : $zombie->bites($human);
            }
            if ($human instanceof Child) {
                $zombie->eats($human);
                $this->enraged = true;
                echo '<strong>The humans are now Enraged</strong><br>';
            }
            if ($zombie->getHealth() <= 0) {
                $this->zombies->isDead();
            }
            if ($human->getHealth() <= 0) {
                $this->humans->isDead();
            }
        }
    }

    public function getRandomHuman() {
        array_values($this->humans->getMembers());

        $index = array_rand($this->humans->getMembers(), 1);

        return $this->humans->getMember($index);
    }

    public function getRandomZombie() {
        array_values($this->zombies->getMembers());

        $index = array_rand($this->zombies->getMembers(), 1);

        return $this->zombies->getMember($index);
    }
}
