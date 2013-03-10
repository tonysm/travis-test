<?php

use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_Testcase
{
	public function setUp()
	{
		$this->calc = new Calculator();
	}

	public function tearDown()
	{
		$this->calc = null;
	}

	public function testInstanceOfCalculator()
	{
		$this->assertInstanceOf('App\Calculator', $this->calc);
	}

	/**
	 * @dataProvider correctlyNumbersToSumDP
	 * @test
	 */
	public function testShouldSumCorrectly( $firstNumber, $secondNumber, $sum )
	{
		$this->assertEquals( $sum, $this->calc->sum( $firstNumber, $secondNumber ) );
	}

	public function correctlyNumbersToSumDP()
	{
		return [
			[ 3, 40, 43 ],
			[ 5.1, 5.2, 10.3 ],
			[ 10.1, 5.3, 15.4 ],
			[ 1115, 11, 1126 ]
		];
	}
	/**
	 * @expectedException InvalidArgumentException
	 * @test
	 */
	public function testShouldTrownInvalidArgumentExceptionWhenNotNumbers()
	{
		$this->calc->sum('A', 4);
	}

	/**
	 * @dataProvider correctlyNumbersToSubtractDP
	 * @test
	 */
	public function testShouldSubtractCorrectly($firstNumber, $secondNumber, $subtractionResult)
	{
		$this->assertEquals( $subtractionResult, $this->calc->sub( $firstNumber, $secondNumber ) );
	}

	public function correctlyNumbersToSubtractDP()
	{
		return [
			[ 42, 2, 40 ],
			[ 15.5, 0.5, 15 ],
			[ 1112, 12, 1100 ]
		];
	}
}