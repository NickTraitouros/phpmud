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
                if (($room->getX() == $currentRoom->getX() )
                && ($room->getY() == $currentRoom->getY() - 1)) {
                    return $room;
                }
            }

            if ($direction == 'W') {
                if (($room->getX() == $currentRoom->getX() - 1 )
                && ($room->getY() == $currentRoom->getY())){
                    return $room;
                }
            }

            if ($direction == 'S') {
                if (($room->getX() == $currentRoom->getX() )
                && ($room->getY() == $currentRoom->getY()) + 1){
                    return $room;
                }
            }

            if ($direction == 'E') {
                if (($room->getX() == $currentRoom->getX() + 1 )
                && ($room->getY() == $currentRoom->getY())){
                    return $room;
                }
            }
        }

        return $currentRoom;
    }
}
