<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Repositories\RoomRepositoryInterface as Room;

use Illuminate\Http\Request;

class RoomController extends Controller {

    public function __construct(Room $room) {
        $this->room = $room;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->room->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($x, $y, $mapId, $rows, $columns)
	{
		$room = $this->room->create($x,$y,NULL,$mapId);
		return \View::make('room/create', array('room'=>$room, 'rows' => $rows, 'columns' => $columns));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 $room = $this->room->make();
		 $room->x = (integer) $request->input('x');
		 $room->y = (integer) $request->input('y');
		 $room->map_id = $request->input('map_id');
		 $room->description = $request->input('description');
		 $room->save();
		return redirect('build/' . $request->get('map_id') . '/'
							     . $request->get('rows') .'/'
							     . $request->get('columns'));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$room = $this->room->find($id);
		return \View::make('room/show', $room->toArray());
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, $rows, $columns)
	{
		$room = $this->room->find($id);
		return \View::make('room/edit', array('room'=>$room, 'rows'=>$rows, 'columns'=>$columns));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$room = $this->room->find($id);
		$room->fill($request->input())->save();

		return redirect('build/' . $request->get('map_id') . '/'
							     . $request->get('rows') .'/'
							     . $request->get('columns'));	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function getMappedRoom($x,$y,$mapId,$rows,$columns) {

        $room = $this->room->where('map_id','=',$mapId)
                                    ->where('x','=',(integer)$x)
                                    ->where('y','=',(integer)$y)
                                    ->get();
//$queries = \DB::getQueryLog();
//	dd($queries);

        if ($room->isEmpty()) {
            return redirect("builder/rooms/create/$x/$y/$mapId/$rows/$columns");
        }

        return redirect('rooms/' . $room->first()->_id . '/edit/' . $rows . '/' . $columns);
    }

}
