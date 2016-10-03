<?php

/********
* Model *
*********/
class Model
{
	protected $attributes = [];
	protected static $table;

	public function __set($key, $value)
	{
		$this->attributes[$key] = $value;
	}

	public function __get($key) 
	{
		if(isset($this->attributes[$key])) {
			return $this->attributes[$key];
		}
		return null;	
	}

	public static function getTableName()
	{
		return static::$table;
	}
}
