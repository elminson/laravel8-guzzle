<?php

namespace App\Http\Controllers;


use App\Repositories\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{

	/**
	 * @var Posts
	 */
	private $posts;

	public function __construct(Posts $posts)
	{

		$this->posts = $posts;
	}

	/**
	 * Show all posts
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function index()
	{

		$posts = $this->posts->all();

		return view('posts.index', compact('posts'));
	}

	/**
	 * Show single post
	 *
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function show($id)
	{

		$post = $this->posts->find($id);

		return view('posts.show', compact('post'));
	}

}
