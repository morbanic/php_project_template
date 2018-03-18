<?php

namespace Helper;


class CurrencyCourse {

	private $currency;
	private $toCurrency;
	private $course;

	public function __construct(string $currency, string $toCurrency, float $course){
		$this->currency = $currency;
		$this->toCurrency = $toCurrency;
		$this->course = $course;
	}

	public function setCurrency($currency)
	{
	    $this->currency = $currency;
	}

	public function setToCurrency($toCurrency)
	{
	    $this->toCurrency = $toCurrency;
	}

	public function setCourse($course)
	{
	    $this->course = $course;
	}

	public function getCurreny() : string
	{
	    return $this->currency;
	}

	public function getToCourse() : string
	{
	    return $this->toCourse;
	}

	public function getCourse() : float
	{
	    return $this->course;
	}
}