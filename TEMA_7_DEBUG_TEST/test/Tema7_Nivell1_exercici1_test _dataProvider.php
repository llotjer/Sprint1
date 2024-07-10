<?php

use PHPUnit\Framework\TestCase;
class NumberCheckerTest extends TestCase{

	/**
     * @dataProvider provideEvenCases
	 * @dataProvider providePositiveCases
     */

	private $numberChecker;

	public function setUp():void{

		$this->numberChecker = new NumberChecker($this->provideEvenCases());
		$this->numberChecker = new NumberChecker($this->providePositiveCases());

	}

	public function testIsEven(): bool {
		$evenCases = $this->provideEvenCases();
		
		$this->assertEquals($evenCases % 2 === 0, $this->numberChecker->isEven());
		
		return true;
	}
	public function testIsPositive(): bool {

		$this->assertEquals($this->providePositiveCases() > 0, $this->numberChecker->isPositive());

		return true;
	}

	public function provideEvenCases(): int{
		return 
			[1]
			[2];
	
	}

	public function providePositiveCases(): int{
		return 
			[-1]
			[1];
		
	}

}
