<?php

namespace User;

use Business\Business as Business;

class User {
	private $name = "Test";
	private $business = "";

	public function __debugInfo () {
       return call_user_func('get_object_vars', $this);
    }

	public function __construct(string $name = "")
	{
		return $this->name = $name; 
	}

	public function setName($newval) : bool
	{
		return $this->prop1 = $newval;
	}

	public function getName() : string
	{
		return $this->name;
	}

	public function setBusiness(Business $business)
	{
		$this->business = $business;
	}

	public function getBusiness() : Business
	{
		return $this->business;
	}
}
