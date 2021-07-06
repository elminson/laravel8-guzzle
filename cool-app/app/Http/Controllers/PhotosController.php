<?php

namespace App\Http\Controllers;


use App\Repositories\Cats;

class PhotosController extends Controller
{

	/**
	 * @var Cats
	 */
	private $photos;

	public function __construct(Cats $photos)
	{

		$this->photos = $photos;
	}

	/**
	 * Show all photos
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function index()
	{

		$photos = $this->photos->all();

		return view('photos.index', compact('photos'));
	}

	/**
	 * Show single photos
	 *
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function show($id)
	{

		$photo = $this->photos->find($id);

		return view('photos.show', compact('photo'));
	}

}
