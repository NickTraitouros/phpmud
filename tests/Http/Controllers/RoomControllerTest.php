<?php

class RoomControllerTest extends TestCase {

    public function tearDown()
    {
        \Mockery::close();
    }

    function setUp() {

    }

    function testgetMappedRoomGoesToCreateRouteWhenNoRoomExists() {


        $mockRoomRepository = \Mockery::mock('Repositories\EloquentRoomInterface');
        $mockRoomRepository->shouldReceive('first')->once()->andReturn(null);

        $app = $this->createApplication();
        $app->instance(
            'Repositories\RoomRepositoryInterface',
            $mockRoomRepository
        );

        $this->call('GET', "/rooms/show/1/1/1");

        $this->assertRedirectedTo("rooms/create/$x/$y/$mapId");

    }
}
