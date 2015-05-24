<?php namespace App;

use App\ModelSwitcher\Model as Eloquent;

class Location extends Eloquent {

    private $map;
    private $room;

    function __construct(Map $map, Room $room) {
        $this->map = $map;
        $this->room = $room;
    }




}