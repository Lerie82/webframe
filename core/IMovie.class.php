<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IMovie.class.php
Description: index controller
*/

interface IMovie
{
	public function __construct();
	public function setIMDBID($id);
	public function fillFromIMDB();
	public function getInfo();
}
?>