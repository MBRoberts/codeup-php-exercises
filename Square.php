<?php

require_once 'Rectangle.php';

/***************************************
* Determines the perimeter of a square *
****************************************/
class Square extends Rectangle
{
	public function __construct($height)
	{
		parent::__construct($height, $height);
	}

	public function perimeter()
	{
		return ($this->getHeight() * 4);
	}

	public function area()
	{
		return $this->getHeight() * $this->getWidth();
	}
}