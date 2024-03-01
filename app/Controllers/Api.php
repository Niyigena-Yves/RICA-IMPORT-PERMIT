<?php

namespace App\Controllers;

class Api extends BaseController
{
	private $data = array();

	public function __construct()
	{
		helper('qonics');
		$lang = isset($_GET['lang']) ? $_GET['lang'] : "en";
		service('request')->setLocale($lang);
	}

	public function index()
	{
		echo "Welcome on RICA - Import permit API";
	}

}
