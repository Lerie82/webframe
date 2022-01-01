<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyBlog.class.php
Description: an electronic component
*/
class MyEComponent
{
	public function __construct()
	{
		///
	}

	public function setType($type)
	{
		/// batteries discharge as a current, the 'battery' power
		/// type will return 'current'.
		$discharge_types = [
			"current" => "battery"
		];

		$this->discharge_type = array_search($type, $discharge_types);

		$this->power_source_type = $type;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
}
?>