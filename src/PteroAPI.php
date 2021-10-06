<?php

namespace GIGABAIT\PterodactylAPI;
use GIGABAIT\PterodactylAPI\Aplications\Servers;

class PteroAPI
{
	public $api;
	public $url;

	public $servers;

	public function __construct($api_key, $base_url)
	{

		$this->api = $api_key;
		$this->url = $base_url;

		$this->servers = new Servers($this->api, $this->url);
	}
}
