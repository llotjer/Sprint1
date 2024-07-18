<?php //declare(strict_types=1); This makes test results must be as iqual as === does.

use PHPUnit\Framework\TestCase;
class Tema7_Nivell1_exercici1Test extends TestCase{

	private $numberChecker1;
	private $numberChecker2;
	private $evenPositiveNumber = 2;
	private $oddNegativeNumber = -1;

	public function setUp():void{ //this method is used to create a new instance of the class in each test. PHPUnit will call it automatically.

		$this->numberChecker1 = new NumberChecker($this->evenPositiveNumber);
		$this->numberChecker2 = new NumberChecker($this->oddNegativeNumber);

	}

	public function testIsEven(): void {
		
		$this->assertTrue($this->numberChecker1->isEven());
    	$this->assertFalse($this->numberChecker2->isEven());

	}
	public function testIsPositive(): void {

		$this->assertTrue($this->numberChecker1->isPositive());
    	$this->assertFalse($this->numberChecker2->isPositive());;
	}
}


