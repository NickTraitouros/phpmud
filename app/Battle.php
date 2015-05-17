<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Battle extends Model {

    function __construct(\App\Fightable $attacker, \App\Fightable $defender) {
        $this->defender = $defender;
        $this->attacker = $attacker;
    }

    public function attack() {
        $this->defender->takeDamage($this->attacker->getStrength());
    }

}
