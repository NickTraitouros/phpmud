<?php namespace App;

use App\ModelSwitcher\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;

class Coordinates extends Eloquent {

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
