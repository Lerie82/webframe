<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyRestApi.class.php
Description: Interface for REST API
*/

include_once("core/IRestApi.class.php");
include_once("plugins/MyScraper.class.php");

class MyRestApi implements IRestApi
{
	public function __construct()
	{
		$this->endpoints = [];
	}

	public function addEndpoint($ep)
	{
		array_push($this->endpoints, $ep);
	}
	
	public function removeEndpoint($ep)
	{
		//array_search($ep, $this->endpoints);
	}
	
	public function fetch($ep_id)
	{
		//$spider = new MyScraper();
		//return $this->
	}
}

?>