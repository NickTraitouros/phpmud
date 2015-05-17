<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

    private $description;
    private $x;
    private $y;

    function __construct($x, $y, $description = NULL) {
        $this->description = $description;
        $this->x = $x;
        $this->y = $y;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

}
