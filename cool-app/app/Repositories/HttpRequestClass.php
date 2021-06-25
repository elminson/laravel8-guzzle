<?php

namespace App\Repositories;

class HttpRequestClass
{

	/**
	 * @var GuzzleHttpRequest
	 * @var HttpClientRequest
	 *
	 */
	private $client;

	public function __construct()
	{

		$httpClient = config('app.http_client');
		if ($httpClient == 'GuzzleHttp') {
			$this->client = new GuzzleHttpRequest();
		} else {
			$this->client = new HttpClientRequest();
		}

	}

	public function get($url)
	{

		$response = $this->client->get($url);

		return $response;

	}

}