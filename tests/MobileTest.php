<?php

namespace Tests;

use App\Mobile;
use Mockery as m;
use App\Carriers\Movistar;
use App\Carriers\Claro;
use PHPUnit\Framework\TestCase;

class MobileTest extends TestCase
{

	/** @test */
	public function it_returns_null_when_name_empty()
	{
		$provider = new Movistar('Movistar');
		$mobileMovistar = new Mobile($provider);

		$this->assertNotEmpty($mobileMovistar->makeCallByName('Javier'));
		$this->assertNull($mobileMovistar->makeCallByName(''));
		$this->assertIsString($mobileMovistar->sendMSM('964375869'));

		$provider = new Claro('Claro');
		$mobileClaro = new Mobile($provider);

		$this->assertNotEmpty($mobileClaro->makeCallByName('Barbara'));
		$this->assertNull($mobileClaro->makeCallByName(''));
		$this->assertIsString($mobileClaro->sendMSM('964375869'));


	}

}
