<?php

/*************************************
* Determines the area of a rectangle *
**************************************/
class Rectangle
{
	private $height;
	private $width;

	public function __construct($height,$width)
	{
		$this->setHeight($height);
		$this->scandir(directory)etWidth($width);
	}

	private function setHeight($height)
	{
		$this->height = $height;
	}

	private function setWidth($width)
	{
		$this->width = $width;
	}

	protected function getHeight()
	{
		return $this->height;
	}

	protected function getWidth()
	{
		return $this->width;
	}

	public function area()
	{
		return $this->height * $this->width;
	}

	public function perimeter()
	{
		return ($this->height * 2) + ($this->width * 2);
	}
}