<?php namespace Repositories;

interface RoomRepositoryInterface {

    public function all();

    public function find($id);

    public function create($x, $y, $description, $mapId);

    public function where($column, $value, $operator);

    public function first();

    public function fill($vars);
}