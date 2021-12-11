<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IPerson.class.php
Description: Person interface
*/
interface IPerson
{
	public function setName($name);
	public function getName();
	public function setSession($sessId);
	public function setAuthLevel($lvl);
}
?>