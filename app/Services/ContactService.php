<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	public static function findByName($name): Contact
	{
		if (strlen($name) === 0) {
			return null;
		}
		return new Contact('Javier', 'Araujo');
	}

	public static function validateNumber(string $number): bool
	{
		if(preg_match('/^[0-9]{9}+$/', $number)) {
			return true;
		}
		
		return false;
	}
}