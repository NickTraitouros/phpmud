<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

    private $map;
    private $room;

    function __construct(Map $map, Room $room) {
        $this->map = $map;
        $this->room = $room;
    }




}