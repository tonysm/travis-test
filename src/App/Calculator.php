<?php namespace App;

use InvalidArgumentException;

class Calculator
{
	public function sum($firstNumber, $secondNumber)
	{
		if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {
			throw new InvalidArgumentException("Only numbers");
		}
		return $firstNumber + $secondNumber;
	}

	public function sub($firstNumber, $secondNumber)
	{
		return $firstNumber - $secondNumber;
	}
}