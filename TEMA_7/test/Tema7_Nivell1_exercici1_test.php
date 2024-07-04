<?php //declare(strict_types=1); //This makes test results must be as iqual as === does.

use PHPUnit\Framework\TestCase;
class NumberCheckerTest extends TestCase{

	public function __construct(private int $number){}

	public function testDoesIsEvenCorrectly(): bool {
		
		$numberChecker = new NumberChecker($this->number);

		$this->assertTrue($this->number%2 === 0, $numberChecker->isEven());
		
		return true;
	}
	public function testDoesIsPositiveCorrectly(): bool {

		$numberChecker = new NumberChecker($this->number);
		
		$this->assertTrue($this->number > 0, $numberChecker->isPositive());

		return true;
	}

}
