<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IRestApi.class.php
Description: Interface for the Products
*/

interface IRestApi
{
	public function __construct();
	public function addEndpoint($ep);
	public function removeEndpoint($tag);
	public function fetch($ep_id);
}
?>