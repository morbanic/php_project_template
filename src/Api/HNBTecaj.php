<?php

namespace Api;

use \Httpful\Request as Request;
use \Helper\CurrencyCourse as CurrencyCourse;

class HNBTecaj extends Request {
	const HNB_API_URL = "http://api.hnb.hr/tecajn";
	private $course = 0;
	private $second_currency = 0;
	private $bank = null;

	public function __construct(){
		$course_response = parent::get(self::HNB_API_URL)->send();
		if($course_response->code == 200){
			foreach ($course_response->body as $currency) {
				$temp_course = floatval(str_replace(",",".", $currency->srednji_tecaj));
				$this->bank[$currency->valuta] = new CurrencyCourse($currency->valuta, "HRK", $temp_course );
			}
		} 
	}

	public function getCurrencyCourse(string $second_currency) : CurrencyCourse
	{
		if(!isset($this->bank[$second_currency])) return (new CurrencyCourse("","",0));
		return $this->bank[$second_currency];
	}

}
