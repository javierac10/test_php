<?php

namespace App;


class Contact
{
	public $name;
	public $number;

	function __construct($name, $number)
	{
		$this->name = $name;
		$this->number = $number;
	}

	public function setNumber($name) {
		$this->name = $name;
	}

	public function geNumber() {
		return $this->name;
	}
}