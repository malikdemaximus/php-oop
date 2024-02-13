<?php

class Car
{
	public $mark;
	public $model;
	public $year;
	public $max_speed;
	public $wheels;

	public static $count = 0;

	public function __construct($mark, $model, $year, $max_speed, $wheels = 4) {
		$this->mark = $mark;
		$this->model = $model;
		$this->year = $year;
		$this->max_speed = $max_speed;
		$this->wheels = $wheels;
		self::$count++;
	}

	public static function getCount()
	{
		return "Количество всех автомобилей: " . self::$count;
	}

	function getInfo() {
		echo "
			<h1>Информация об Авто</h1>
			Марка: $this->mark <br>	
			Модель: $this->model <br>	
			Год выпуска: $this->year <br>	
			Максимальная скорость: $this->max_speed <br>	
			Количество колес: $this->wheels <br>	
		";
	}
}

?>