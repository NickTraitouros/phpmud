<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RoomController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return \App\Room::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($x, $y, $mapId)
	{	$room = new \App\Room($x,$y,NULL,$mapId);
		return \View::make('room/create', array('room'=>$room));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		 $room = new \App\Room;
		 $room->fill($request->input())->save();
		 $room->save($request->all());

		return redirect('build/' . $request->get('map_id'));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$room = \App\Room::find($id);
		return \View::make('room/show', $room->toArray());
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$room = \App\Room::find($id);
		return \View::make('room/edit', array('room'=>$room));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$room = \App\Room::find($id);
		$room->fill($request->input())->save();
		return redirect('build/' . $request->get('map_id'));	}

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

    public function getMappedRoom($x,$y,$mapId) {
        $room = \App\Room::where('map_id','=',$mapId)
                                    ->where('x','=',$x)
                                    ->where('y','=',$y)
                                    ->first();

        if ($room == NULL) {
            return redirect("rooms/create/$x/$y/$mapId");
        }

        return redirect('rooms/' . $room->id . '/edit');

    }


}
