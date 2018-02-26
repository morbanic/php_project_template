<?php

namespace Api;

use \Httpful\Request as Request;

class HNBTecaj extends Request {
	private $url = HNB_API_URL."/tecajn";
	private $course = 0;
	private $second_currency = 0;
	private $json_response = [];

	public function __construct(){
		$course_response = parent::get($this->url)->send();
		if($course_response->code == 200){
			$this->json_response = $course_response->body;
		} 
	}

	public function getCourse($second_currency){
		foreach($this->json_response as $curr){
			if($curr->valuta == $second_currency) $this->course = $curr->srednji_tecaj;
		}
		$this->second_currency = $second_currency;
		return $this->course;
	}

	public function getSecondCurrency(){
		return $this->second_currency;
	}

}
