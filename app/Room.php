<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model{

    protected $fillable = ['description', 'x', 'y', 'map_id'];

    public function map() {
         return $this->belongsTo('\App\Map');
    }

    function __construct($x = NULL, $y = NULL, $description = NULL, $mapId = NULL) {

        $this->description = $description;
        $this->x = $x;
        $this->y = $y;
        $this->map_id = $mapId;
    }

    public function getPerspective(){

        $perspective = \App::make('App\Perspective');
        $perspective->setDescription($this->description);

        return $perspective;

           //get description
           //get exits
           //get npcs
           //get items

    }

}
