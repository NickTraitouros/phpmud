<?php

class MapTest extends TestCase {

    public function tearDown()
    {
        \Mockery::close();
    }

    public function testMapGetsAdjacentRoom() {
        $mapArray = [new \App\Room(1,1), new \App\Room(0,0), new \App\Room(1,0), new \App\Room(0,1)];
        $map = new \App\Map($mapArray);
        $nextRoom = $map->getNextRoom('W', new \App\Room(1,1));
        $this->assertTrue((
            ($nextRoom->getX() == 0)
            && ($nextRoom->getY() == 1))
                       , "Expected Room 0,1 but got Room " . $nextRoom->getX() . "," .
                                                             $nextRoom->getY());
    }
}