<?php //declare(strict_types=1); This makes test results must be as iqual as === does.

use PHPUnit\Framework\TestCase;
class NumberCheckerTest extends TestCase{

	private $numberChecker;
	private $number = [-1,2];
	private $numberRand = array_rand($this->number,1); //I assume it's not the very best way to test anything, 
													   //i would use a specific number per parameter for sure,
								 					   //but this way i can expose both at the same time.
													   //Not practical, but theoretical.

	public function setUp():void{ //this method is used to create a new instance of the class in each test. PHPUnit will call it automatically.

		$this->numberChecker = new NumberChecker($this->numberRand);

	}

	public function testDoesIsEvenPropertly(): bool {
		
		$this->assertTrue($this->numberRand%2 === 0, $this->numberChecker->isEven());
		
		return true;
	}
	public function testDoesIsPositivePropertly(): bool {

		$this->assertTrue($this->numberRand > 0, $this->numberChecker->isPositive());

		return true;
	}

}
