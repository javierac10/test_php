<?php

namespace App\Carriers;

use App\Call;
use App\Contact;
use App\Interfaces\CarrierInterface;

class Claro implements CarrierInterface {

    public $name;

    function __construct($name)
	{
        $this->name = $name;
	}


    public function dialContact(Contact $contact) {
        return 'Dial from claro';
    }

	public function makeCall(): Call {
        $call = new Call();
        return $call;
    }

}