<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyBlog.class.php
Description: an electronic component
*/
include_once("core/IEComponent.class.php");

class MyBattery implements IEComponent
{
	/// batteries discharge as a current, the 'battery' power
	/// type will return 'current'.
	private $discharge_types = [
		"current" => "battery"
	];

	private $abbr = [
		"Ah" => "battery",
	];

	private $amperage = 0;

	public function __construct()
	{
		///
	}

	public function setAmps($amps)
	{
		$this->amperage = $amps;
	}

	public function setType($type)
	{
		$this->power_source_type = $type;

		$this->discharge_type = array_search($type, $this->discharge_types);
		$this->abbr = array_search($type, $this->abbr);
	}

	public function setName($name)
	{
		$this->name = $name;
	}
}
?>