<?php
	/**
	 * 
	 */
	class Calculator
	{
		const PI = 3.14;

		public static function calcSqrt($x)
		{
			return "Квадратный корень равен: " . sqrt($x);
		}

		public static function calcSin($x) 
		{
			return "Синус равен: " . sin($x);
		}

		public static function calcRoundArea($radius) 
		{
			return "Площадь круга равна: " . $radius**2 * self::PI;
		}
	}
?>