<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model {

    private $rooms;

    function __construct($rooms) {
        $this->rooms = $rooms;
    }

    public function getNextRoom($direction, $currentRoom) {

        foreach($this->rooms as $room) {

            if ($direction == 'N') {
                if (($room->x == $currentRoom->x )
                && ($room->y == $currentRoom->y - 1)) {
                    return $room;
                }
            }

            if ($direction == 'W') {
                if (($room->x == $currentRoom->x - 1 )
                && ($room->y == $currentRoom->y)){
                    return $room;
                }
            }

            if ($direction == 'S') {
                if (($room->x == $currentRoom->x )
                && ($room->y == $currentRoom->y) + 1){
                    return $room;
                }
            }

            if ($direction == 'E') {
                if (($room->x == $currentRoom->x + 1 )
                && ($room->y == $currentRoom->y)){
                    return $room;
                }
            }
        }

        return $currentRoom;
    }
}
