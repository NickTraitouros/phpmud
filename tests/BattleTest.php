<?php

class BattleTest extends TestCase {

    public function tearDown()
    {
        \Mockery::close();
    }

    function testDefenderTakesDamageInBattle(){
        $mockAttacker = \Mockery::mock('\App\Hero');
        $mockDefender = \Mockery::mock('\App\Hero');

        $mockAttacker->shouldReceive('getStrength')->once()->andReturn('100');
        $mockDefender->shouldReceive('takeDamage')->once()->with('100');

        $battle = new \App\Battle($mockAttacker, $mockDefender);
        $battle->attack();
    }

}