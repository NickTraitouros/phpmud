<?php namespace App;

use App\ModelSwitcher\Model as Eloquent;

class Room extends Eloquent{

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

    public function getCharacters() {
        return \App\Hero::where('room_id','=',$this->id)->get();
    }

    public function getPerspective(){

        $perspective = \App::make('App\Perspective');
        $perspective->setDescription($this->description);
        $perspective->setCharacters($this->getCharacters());

        return $perspective;

           //get description
           //get exits
           //get npcs
           //get items

    }

}
