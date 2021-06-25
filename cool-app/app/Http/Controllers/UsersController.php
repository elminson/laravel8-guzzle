<?php

namespace App\Http\Controllers;

use App\Repositories\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{

	/**
	 * @var Users
	 */
	private $users;

	public function __construct(Users $users)
	{

		$this->users = $users;
	}

	/**
	 * Show all users
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function index()
	{

		$users = $this->users->all();

		return view('users.index', compact('users'));
	}

	/**
	 * Show single user
	 *
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function show($id)
	{

		$user = $this->users->find($id);

		return view('users.show', compact('user'));
	}

}
