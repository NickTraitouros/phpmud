<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

    protected $fillable = ['description', 'x', 'y', 'map_id'];

    function __construct($x = NULL, $y = NULL, $description = NULL, $mapId = NULL) {
        $this->description = $description;
        $this->x = $x;
        $this->y = $y;
        $this->map_id = $mapId;
    }
}
