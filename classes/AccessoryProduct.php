<?php

/**
 * 
 */
class AccessoryProduct extends Product
{

	public $purpose;
	public $compatibility;

	public function __construct($name, $price, $weight, $available, $purpose, $compatibility)
	{
		parent::__construct($name, $price, $weight, $available);

		$this->purpose = $purpose;
		$this->compatibility = $compatibility; 	
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		$info .= "
			Предназначение (для чего?): $this->purpose <br>	
			Совместимость: $this->compatibility <br>	
		";
		return $info;
	}
}

?>