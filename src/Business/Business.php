<?php

namespace Business;

class Business {
	private $name = "Test";

	public function __construct($name)
	{
		$this->name = $name; 
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}
