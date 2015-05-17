<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinates extends Model {

    private $x;
    private $y;

    function __construct($x, $y) {

        $this->x = $x;
        $this->y = $y;

    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

}
