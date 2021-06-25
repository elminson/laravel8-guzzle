<?php

namespace App\Repositories;

class Posts extends HttpRequestClass
{

	public function __construct()
	{

		parent::__construct();
	}

	public function all()
	{

		return $this->get('posts');
	}

	public function find($id)
	{

		return $this->get("posts/{$id}");
	}
}
