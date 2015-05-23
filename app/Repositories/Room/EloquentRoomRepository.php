<?php namespace Repositories;

use Repositories\RoomRepositoryInterface;
use \App\Room as Room;

class EloquentRoomRepository implements RoomRepositoryInterface {

    protected $wheres = array();
    protected $with = array();

    public function all() {
        return Room::all();
    }

    public function where($field, $operand, $value){
        return Room::where($field, $operand, $value);
    }

    public function find($id) {
        return Room::find($id);
    }

    public function create($x,$y,$description,$mapId) {
        return new Room($x,$y,$description,$mapId);
    }

    public function exists() {
        return Room::exists();
    }

}
