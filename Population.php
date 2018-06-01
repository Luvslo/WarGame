<?php

abstract class Population {

    protected $members = [];

    public function getMembers() {
        return $this->members;
    }

    public function setMembers($members = []) {
        $this->members = $members;
    }

    public function getMember($index) {
        return $this->members[$index];
    }

    public function isDead() {
        foreach ($this->members as $index => $member) {
            if ($member->getHealth() == 0) {
                unset($this->members[$index]);
            }
        }
    }
}