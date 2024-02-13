<?php
/**
 * 
 */
class PhoneProduct extends Product
{

	public $cpu;
	public $memory;
	public $screen;

	public function __construct($name, $price, $weight, $available, $cpu, $memory, $screen)
	{
		parent::__construct($name, $price, $weight, $available);

		$this->cpu = $cpu;
		$this->memory = $memory;
		$this->screen = $screen;
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		$info .= "
			Процессор: $this->cpu <br>	
			Память: $this->memory <br>	
			Экран: $this->screen <br>	
		";
		return $info;
	}
}

?>