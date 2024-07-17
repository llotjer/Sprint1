<?php

use PHPUnit\Framework\TestCase;
class NumberChecker2Test extends TestCase{

	/**
     * @dataProvider provideEvenCases
	 * @dataProvider providePositiveCases
     */

	private $numberChecker1;
	private $numberChecker2;

	public function setUp():void{

		$this->numberChecker1 = new NumberChecker($this->provideEvenCases());
		$this->numberChecker2 = new NumberChecker($this->providePositiveCases());

	}

	public function testIsEven(): void {
				
		$this->assertTrue($this->numberChecker1->isEven());
		$this->assertTrue($this->numberChecker2->isEven());
		
	}
	public function testIsPositive(): void {

		$this->assertTrue($this->numberChecker1->isPositive());
		$this->assertTrue($this->numberChecker2->isPositive());

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
