<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Repositories\RoomRepositoryInterface as Room;

use Illuminate\Http\Request;

class MapController extends Controller {

    public function __construct(Room $room) {
        $this->room = $room;
    }

    public function showMap($id) {
        $rows = array();
        for($x=0;$x<10;$x++) {
            $columns = array();
            for($y=0;$y<10;$y++){
                $room = ($this->room->where('map_id','=', $id)
                                    ->where('x','=',$x)
                                    ->where('y','=',$y)
                                    ->get());
                array_push($columns, !$room->isEmpty() ? 1 : 0);
            }
            array_push($rows, $columns);
        }

        return \View::make('map/show', array('rows' =>$rows, 'mapId'=>$id));
    }
}
