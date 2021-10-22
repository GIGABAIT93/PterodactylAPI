<?php

namespace GIGABAIT\PterodactylAPI;
use GIGABAIT\PterodactylAPI\Aplications\Servers;
use GIGABAIT\PterodactylAPI\Aplications\Locations;
use GIGABAIT\PterodactylAPI\Aplications\Allocations;
use GIGABAIT\PterodactylAPI\Aplications\Users;
use GIGABAIT\PterodactylAPI\Aplications\Databases;

class PteroAPI
{
	public $api;
	public $url;

	public $servers;
	public $locations;
	public $allocations;
	public $users;
	public $databases;

	public function __construct($api_key, $base_url)
	{

		$this->api = $api_key;
		$this->url = $base_url;

		$this->servers = new Servers($this->api, $this->url);
		$this->locations = new Locations($this->api, $this->url);
		$this->allocations = new Allocations($this->api, $this->url);
		$this->users = new Users($this->api, $this->url);
		$this->databases = new Databases($this->api, $this->url);
	}
}
