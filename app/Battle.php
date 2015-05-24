<?php namespace App;

use App\ModelSwitcher\Model as Eloquent;

class Battle extends Eloquent {

    function __construct(\App\Fightable $attacker, \App\Fightable $defender) {
        $this->defender = $defender;
        $this->attacker = $attacker;
    }

    public function attack() {
        $this->defender->takeDamage($this->attacker->getStrength());
    }

}
