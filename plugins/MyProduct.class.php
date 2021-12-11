<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyProduct.class.php
Description: Interface for the PDO wrapper
*/

include_once("core/IProduct.class.php");
include_once("plugins/MyDb.class.php");

class MyProduct implements IProduct
{
	public function __construct()
	{
		//
	}

	public function new($name,$price,$descr)
	{
		$this->name = $name;
		$this->price = $price;
		$this->descr = $descr;
	}

	public function save()
	{
		$db = new MyDb();
	}
}
?>