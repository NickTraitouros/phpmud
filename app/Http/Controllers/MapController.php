<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MapController extends Controller {

    public function showMap($id) {

        $rows = array();
        for($x=0;$x<10;$x++) {
            $columns = array();
            for($y=0;$y<10;$y++){
                $exists = (\App\Room::where('map_id','=',$id)
                                    ->where('x','=',$x)
                                    ->where('y','=',$y)
                                    ->exists()) ? 1 : 0;
                array_push($columns, $exists);
            }
            array_push($rows, $columns);
        }

        return \View::make('map/show', array('rows' =>$rows));
    }
}
