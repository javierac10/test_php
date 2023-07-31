<?php

namespace App;

use App\Interfaces\CarrierInterface;
use App\Services\Api;
use App\Services\ContactService;
use Error;

class Mobile
{
	private $url = 'https://api.twilio.com/2010-04-01/Accounts/ACb60e553da74af02237bbe903fe67f1ae/Messages.json';

	protected $provider;
	
	function __construct(CarrierInterface $provider)
	{
		$this->provider = $provider;
	}


	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findByName($name);

		$this->provider->dialContact($contact);

		return $this->provider->makeCall();
	}

	public function sendMSM($number): string {

		if(ContactService::validateNumber($number)) {

			$data = 'To=+51'.$number.'&From=+17623005829&Body=Hola usuario desde '.$this->provider->name;
			$api = new Api();
			$api->sendMessage('POST', $this->url, $data);
			return 'Hello World';
		}

		throw new Error('Invalid number');

	}


}
