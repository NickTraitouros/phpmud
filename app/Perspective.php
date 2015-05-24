<?php namespace App;

use App\ModelSwitcher\Model as Eloquent;

class Perspective extends Eloquent {

    private $description;
    private $characters;

    function __construct() {
    }

    public function setCharacters($characters) {
        $this->characters = $characters;
    }

    public function getCharacters() {
        return $this->characters;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

}
