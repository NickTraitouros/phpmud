<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model {

    private $rooms;

    function __construct() {

    }

    public function canMoveToNextRoom(Room $currentRoom, Room $nextRoom) {

        if (!$nextRoom->exists()) {
            return false;
        }

        if (($currentRoom->x == $nextRoom->x + 1) && ($currentRoom->y == $currentRoom->y)){
            return true;
        }
        if (($currentRoom->x == $nextRoom->x - 1) && ($currentRoom->y == $currentRoom->y)){
            return true;
        }
        if (($currentRoom->y == $nextRoom->y + 1) && ($currentRoom->x == $currentRoom->x)){
            return true;
        }
        if (($currentRoom->y == $nextRoom->y - 1) && ($currentRoom->x == $currentRoom->x)){
            return true;
        }

        return false;
    }

    public function getAdjacentRoom(Room $room, $direction) {

        $mapId = $room->map_id;
        $x = $room->x;
        $y = $room->y;

        if ($direction == 'N') {
            $y = $room->y-1;
        }
        if ($direction == 'S') {
            $y = $room->y+1;
        }
        if ($direction == 'W') {
            $x = $room->x-1;
        }
        if ($direction == 'E') {
            $x = $room->x+1;
        }

        return \App\Room::where('map_id','=',$mapId)
                                            ->where('x','=',$x)
                                            ->where('y','=',$y)
                                            ->first();

    }

}
