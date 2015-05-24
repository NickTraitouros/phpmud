<?php namespace App;

use App\ModelSwitcher\Model as Eloquent;

class Perspective extends Eloquent {

    private $description;

    function __construct() {
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

}
