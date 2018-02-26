<?php

namespace User;

use Business\Business as Business;

class User {
	private $name = "Test";
	private $business = "";

	public function __construct($name = "")
	{
		$this->name = $name; 
	}

	public function setName($newval)
	{
		$this->prop1 = $newval;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setBusiness($business)
	{
		$this->business = $business;
	}

	public function getBusiness()
	{
		return $this->business;
	}

	public function setNewBusiness($name)
	{
		$this->business = new Business($name);
	}
}
