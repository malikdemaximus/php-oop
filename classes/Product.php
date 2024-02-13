<?php

/**
 * 
 */
class Product
{
	public $name;
	public $price;
	public $weight;
	public $available;
	
	public function __construct($name, $price, $weight, $available)
	{
		$this->name = $name;
		$this->price = $price;
		$this->weight = $weight;
		$this->available = $available;

	}

	public function getInfo()
	{
		return "
			<h3>Информация о товаре</h3>
			Наименование: $this->name <br>	
			Цена: $this->price <br>	
			Вес: $this->weight <br>	
			Есть в наличии: $this->available <br>
		";
	}
}

?>