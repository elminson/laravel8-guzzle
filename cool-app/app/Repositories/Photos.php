<?php

namespace App\Repositories;

class Photos extends HttpRequestClass
{

	public function __construct()
	{

		parent::__construct();
	}

	/**
	 * Get All Photos
	 *
	 * @return mixed
	 */
	public function all()
	{

		return $this->get('photos');
	}

	/**
	 * Find a Photos
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public function find($id)
	{

		return $this->get("photos/{$id}");
	}
}
