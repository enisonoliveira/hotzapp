<?php

namespace HotzApp\Facades;

use Illuminate\Support\Facades\Facade;

class HotzApp extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'HotzApp';
	}
}