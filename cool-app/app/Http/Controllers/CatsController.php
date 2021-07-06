<?php

namespace App\Http\Controllers;


use App\Repositories\Cats;

class CatsController extends Controller
{

	/**
	 * @var Cats
	 */
	private $cats;

	public function __construct(Cats $cats)
	{

		$this->cats = $cats;
	}

	/**
	 * Show all posts
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function index()
	{

		$cats = $this->cats->all();

		return view('cats.index', compact('cats'));
	}

}
