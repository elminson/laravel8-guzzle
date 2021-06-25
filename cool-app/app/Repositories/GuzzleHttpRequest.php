<?php


namespace App\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest
{

	protected $client;

	public function __construct()
	{

		$this->client = new Client([
									   'base_uri' => config('app.base_uri')
								   ]);
	}

	public function get($url)
	{

		$response = $this->client->request('GET', $url);

		return json_decode($response->getBody()->getContents());

	}

}