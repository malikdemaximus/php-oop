<?php

class File {
	public $file;
	public $fp;

	public function __construct($file) {
		$this->file = $file;
		$this->fp = fopen($this->file, 'a');
	}

	public function __destruct() 
	{
		fclose($this->fp);
	}

	public function write($text)
	{
		fwrite($this->fp, $text);
	}
}

?>