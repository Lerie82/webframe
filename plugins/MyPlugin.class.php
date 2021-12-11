<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyPlugin.class.php
Description: Plugin wrapper
*/
include_once("core/Plugin.class.php");

class MyIPlugin implements IPlugin
{
	public function __construct()
	{
		$this->setInfo(
			"Lerie's Plugin",
			"1.0",
			"Lerie Taylor"
		);
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
}

?> 