<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class HttpClientRequest
{

	protected $baseUri;

	public function __construct()
	{

		$this->baseUri = config('app.base_uri');

	}

	/**
	 * Send Get Request using Http Client
	 *
	 * @param $url
	 *
	 * @return mixed
	 */
	public function get($url)
	{

		$response = Http::withHeaders(
			[
				'x-api-key' => config('app.cat_api')
			])->get($this->baseUri . '/' . $url);

		return json_decode($response->getBody()->getContents());

	}

}