<?php

use Laracasts\Integrated\Extensions\Selenium as IntegrationTest;

class ExampleTest extends IntegrationTest
{

	protected $baseUrl = '';

	public function __construct()
	{
		date_default_timezone_set('Asia/Singapore');
	}

	/** @test */
	public function it_search_for_phpunit_via_google()
	{
		$this->visit('http://www.google.com')
				 ->type('phpunit','q')
				 ->click('btnG')
				 ->wait(3000)
				 ->see('The PHP Testing Framework')
				 ->snap();
	}
}