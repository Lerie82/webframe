<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IPlugin.class.php
Description: Plugin interface
*/

interface IPlugin
{
	public function setInfo($name, $ver, $author);
	public function getInfo();
}
?>