<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IProduct.class.php
Description: Interface for the PDO wrapper
*/

interface IProduct
{
	public function __construct();
	public function new($name,$price,$descr);
	public function save();
}
?>