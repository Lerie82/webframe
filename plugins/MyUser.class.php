<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyUser.class.php
Description: User wrapper
*/
include_once("core/IPerson.class.php");

class MyUser implements IPerson
{
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setSession($sessId)
	{
		$this->session_id = session_id();
	}

	public function setAuthLevel($lvl)
	{
		$this->level = $lvl;
	}

	public function getAuthLevel()
	{
		return $this->level;
	}


	public function isAlive()
	{
		//
	}

	public function getBirthday()
	{
		//
	}

	public function getEmail()
	{
		//
	}

	public function setEmail($email)
	{
		//
	}

	public function setSocial($ssn)
	{
		//
	}

	public function setBirthday($date)
	{
		//
	}

	public function setDeathDate($date)
	{
		//
	}
}
?> 