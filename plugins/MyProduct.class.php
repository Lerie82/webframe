<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyProduct.class.php
Description: Interface for the Products
*/

include_once("core/IProduct.class.php");
include_once("plugins/MyDb.class.php");
include_once("plugins/MyScraper.class.php");

class MyProduct implements IProduct
{
	public function __construct()
	{
		$this->urls = array();
	}

	public function new($name=null, $price=null, $descr=null, $url=null)
	{
		$this->name = $name;
		$this->price = $price;
		$this->descr = $descr;
		array_push($this->urls, $url);
	}

	public function save()
	{
		//$db = new MyDb();
	}

	public function addUrl($url)
	{
		array_push($this->urls, $url);
	}

	public function getFromCraigslist($url)
	{
		$scraper = new MyScraper();
	}
}
?>