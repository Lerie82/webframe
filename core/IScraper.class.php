<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IScraper.class.php
Description: web scraper
*/

interface IScraper
{
	public function __construct();
	public function setUrl($url);
	public function scrape();
}
?>