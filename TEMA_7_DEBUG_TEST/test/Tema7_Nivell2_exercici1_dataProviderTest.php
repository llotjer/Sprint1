<?php

use PHPUnit\Framework\TestCase;
class Tema7_Nivell2_exercici1_dataProviderTest extends TestCase{

#[\PHPUnit\Framework\Attributes\DataProvider('provideEvenPositiveCases')]
public function testIsEvenAndPositive($number): void {
    $numberChecker = new NumberCheckerDP($number);
    $this->assertTrue($numberChecker->isEven());
    $this->assertTrue($numberChecker->isPositive());
}

#[\PHPUnit\Framework\Attributes\DataProvider('provideOddNegativeCases')]
public function testIsOddAndNegative($number): void {
    $numberChecker = new NumberCheckerDP($number);
    $this->assertFalse($numberChecker->isEven());
    $this->assertFalse($numberChecker->isPositive());
}

	public static function provideEvenPositiveCases(): array{
		return [
			[2],
			[4],
			[6]
		];
	}

	public static function provideOddNegativeCases(): array{
		return [
			[-1],
			[-3],
			[-5]
		];
	}


}
