<?php
/*
Author: Lerie Taylor
Date: 01-01-2022
Filename: core/IEComponent.class.php
Description: Interface for electronic componenets
*/
interface IEComponent
{
	public function __construct();
	public function setType($type);
	public function setName($name);
	public function setAmps($amps);
}
?>