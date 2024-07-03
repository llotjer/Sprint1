<?php declare(strict_types=1); //This makes test results must be iqual as === does.

use PHPUnit\Framework\TestCase;
class NumberChecker extends TestCase{

	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
