<?php namespace App;

use App\ModelSwitcher\Model as Eloquent;

class Map extends Eloquent {

    private $rooms;

    function __construct() {

    }

    public function canMoveToNextRoom(Room $currentRoom, Room $nextRoom) {

        if (!$nextRoom->exists()) {
            return false;
        }

        if ((($currentRoom->x == $nextRoom->x + 1) || ($currentRoom->x == $nextRoom->x - 1)) && $currentRoom->y == $nextRoom->y) {
            return true;
        }

        if ((($currentRoom->y == $nextRoom->y + 1) || ($currentRoom->y == $nextRoom->y - 1)) && $currentRoom->x == $nextRoom->x) {
            return true;
        }

        return false;
    }

    public function getAdjacentRoom(Room $room, $direction) {

        $mapId = $room->map_id;
        $x = $room->x;
        $y = $room->y;

        if ($direction == 'N') {
            $y--;
        }
        else if ($direction == 'S') {
            $y++;
        }
        else if ($direction == 'W') {
            $x--;
        }
        else if ($direction == 'E') {
            $x++;
        }

        return $room->where('map_id','=',$mapId)
                                            ->where('x','=',$x)
                                            ->where('y','=',$y)
                                            ->first();

    }

}
