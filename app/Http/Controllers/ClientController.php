<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClientController extends Controller {

    public function __construct() {

    }

    public function show($heroId) {

        $hero = \App::make('App\hero');
        $player = $hero->find($heroId);

        $controlView = \View::make('client/controls', array('heroId' => $heroId));

        return \View::make('client/show', array('perspective' => \View::make('hero/perspective',$player->getPerspective()),
                                                'controls'    => $controlView));

    }

    public function move($heroId, $direction) {

        $hero = \App::make('App\hero');
        $player = $hero->find($heroId);
        $room = $player->room;
        $map = $room->map;

        $adjacentRoom = $map->getAdjacentRoom($room, $direction);

        if ($adjacentRoom){
            if ($map->canMoveToNextRoom($room,$adjacentRoom)) {
                $player->room_id = $adjacentRoom->id;
                $player->save();
            }
        }
        return redirect('client/' . $player->id);
    }
}