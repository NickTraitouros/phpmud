<?php

class HeroTest extends TestCase {

	private $maxHitPoints;

    public function tearDown()
    {
        \Mockery::close();
    }

	function setUp() {
        $mockLocation = \Mockery::mock('\App\Location');
		$this->maxHitPoints = 1000;
		$this->testHero = new \App\Hero;
        $this->testHero->assignAttributes($this->maxHitPoints,15, $mockLocation);
	}

	function testHeroDiesIfDamageTakenExceedsHitPoints() {
		$this->assertTrue($this->testHero->isAlive(), "Expected Hero to be alive at beginning of test");
		$this->testHero->takeDamage(1001);
		$this->assertFalse($this->testHero->isAlive(), "Expected Hero to die from taking too much damage");

	}

	function testHeroDoesntHealOverMaxHitPoints() {
		$this->assertTrue($this->testHero->getHitPoints() == $this->maxHitPoints, "Hero should have max health at beginning of test");
		$this->testHero->heal(1);
		$this->assertTrue($this->testHero->getHitPoints() == $this->maxHitPoints, "Hero should have no more than max health after heal");
	}

}
