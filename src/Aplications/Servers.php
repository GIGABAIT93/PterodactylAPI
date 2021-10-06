<?php

namespace GIGABAIT\PterodactylAPI\Aplications;

use GuzzleHttp\Client;

class Servers
{
	public function __construct($key, $url)
	{
		$this->key = $key;
		$this->url = $url;
		$this->client = new Client([
			'base_uri'    => $this->url,
			'http_errors' => false,
			'headers'     => [
				'Accept'       => 'application/json',
				'Content-Type' => 'application/json',
				'Authorization' => "Bearer {$this->key}",
			],
		]);
	}

	public function getAll()
	{
		$resp = $this->client->get('api/application/servers');
		return json_decode($resp->getBody()->getContents(), true);
	}

	public function get(int $id)
	{
		$resp = $this->client->get('api/application/servers/' . $id);
		return json_decode($resp->getBody()->getContents(), true);
	}

	public function getExternal($id)
	{
		$resp = $this->client->get('api/application/servers/external/' . $id);
		return json_decode($resp->getBody()->getContents(), true);
	}

	public function create(array $params)
	{
		$resp = $this->client->post(
			'api/application/servers', 
			array('form_params' => $params)
		);
		return json_decode($resp->getBody()->getContents(), true);
	}
}
