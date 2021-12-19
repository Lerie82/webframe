<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyDirWatcher.class.php
Description: A directory watcher
*/
include_once("core/IDirectory.class.php");

class MyDirWatcher implements IDirectory
{
	public function __construct()
	{
		$this->dirs = [];
	}

	public function addDir($dir)
	{
		array_push($this->dirs, $dir);
	}

	public function removeDir($dir)
	{
		//
	}
}