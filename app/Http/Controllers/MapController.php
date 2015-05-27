<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Repositories\RoomRepositoryInterface as Room;

use Illuminate\Http\Request;

class MapController extends Controller {

    public function __construct(Room $room) {
        $this->room = $room;
    }

    public function getMap($id, $x, $y) {
        $rows = array();

        for($j=0;$j<$y;$j++){
           $columns = array();
           for($i=0;$i<$x;$i++) {
                $room = ($this->room->where('map_id','=', $id)
                                    ->where('x','=',$i)
                                    ->where('y','=',$j)
                                    ->get());
                array_push($columns, !$room->isEmpty() ? 1 : 0);
            }
            array_push($rows, $columns);
        }

        return \View::make('map/show', array('rows' =>$rows, 'mapId'=>$id));
    }
}
