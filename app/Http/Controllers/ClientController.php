<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClientController extends Controller {

    public function __construct() {

    }

    public function show($heroId) {
        $hero = \App\Hero::find($heroId);
        $controlView = \View::make('client/controls', array('heroId' => $heroId));

        return \View::make('client/show', array('perspective' => $hero->getPerspective(),
                                                'controls'    => $controlView));

    }

    public function move($heroId, $direction) {
        $hero = \App\Hero::find($heroId);
        $room = $hero->room;
        $map = $room->map;

        $adjacentRoom = $map->getAdjacentRoom($room, $direction);
        if ($adjacentRoom){
            if ($map->canMoveToNextRoom($room,$adjacentRoom)) {
                $hero->room_id = $adjacentRoom->id;
                $hero->save();
            }
        }
        return redirect('client/' . $hero->id);
    }
}