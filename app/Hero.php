<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model implements Fightable {

    protected $fillable = ['hitPoints',
                            'strength',
                        'maxHitPoints',
                            'location',
                                'name',
                             'room_id'];

    public function room() {
         return $this->belongsTo('\App\Room');
    }

    function assignAttributes($hitPoints, $strength, Location $location) {

        $this->hitPoints = $hitPoints;
        $this->maxHitPoints = $hitPoints;
        $this->strength = $strength;
        $this->location = $location;  //app make location instead

    }

    public function move($direction) {
        $newLocation = $this->location->map->getNextRoom($direction);
        $this->location = $newLocation ? $newLocation : $this->location;
    }

    public function getHitPoints() {
        return $this->hitPoints;
    }

    public function getStrength() {
        return $this->strength;
    }

    public function takeDamage($hitPoints) {
        $this->hitPoints -= $hitPoints;
    }

    public function isAlive() {
        return ($this->hitPoints > 0) ? true : false;
    }

    public function heal($hitPoints) {
        $this->hitPoints = (($this->hitPoints + $hitPoints) > $this->maxHitPoints)
                           ? $this->maxHitPoints
                           : $this->hitPoints + $hitPoints;
    }
}
