<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyPlugin.class.php
Description: Plugin wrapper
*/
include_once("core/IPlugin.class.php");
include_once("plugins/MyRestApi.class.php");

class MyPlugin implements IPlugin
{
	public function __construct()
	{
		$this->setInfo(
			"REST API Plugin Example",
			"1.0",
			"Lerie Taylor"
		);

		$this->loadApi();
	}

	public function loadApi()
	{
		$this->api = new MyRestApi();
		$this->api->addEndpoint("https://api.ipify.org/");
	}

	public function setInfo($name, $ver, $author)
	{
		$this->name = $name;
		$this->ver = $ver;
		$this->author = $author;
	}

	public function getInfo()
	{
		$info = [
			"name"=>$this->name,
			"version"=>$this->ver,
			"author"=>$this->author
		];

		return json_encode($info);
	}

	public function getIpAddress()
	{
		return $this->fetch(0);
	}
}

?> 