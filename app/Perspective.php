<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Perspective extends Model {

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
