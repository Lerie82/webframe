<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IPerson.class.php
Description: Person interface
*/
interface IPerson
{
	public function getName();
	public function isAlive();
	public function getBirthday();
	public function getEmail();

	public function setName($name);
	public function setEmail($email);
	public function setSession($sessId);
	public function setAuthLevel($lvl);
	public function setSocial($ssn);
	public function setBirthDay($date);
	public function setDeathDate($date);
}
?>