<?php

namespace Business;

class Business {
	private $name = "Test";

	public function __construct(string $name)
	{
		return $this->name = $name; 
	}

	public function setName(string $name)
	{
		return $this->name = $name;
	}

	public function getName() : string
	{
		return $this->name;
	}
}
