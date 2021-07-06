<?php

namespace App\Repositories;

class Cats extends HttpRequestClass
{

	public function __construct()
	{

		parent::__construct();
	}

	/**
	 * Get All Cats
	 *
	 * @return mixed
	 */
	public function all()
	{

		return $this->get('?limit=5&page=10&order=Desc');
	}

}
