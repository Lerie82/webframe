<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: index.php
Description: index controller
*/

include_once("core/IMovie.class.php");
include_once("plugins/MyScraper.class.php");

class MyMovie implements IMovie
{
	public function __construct()
	{
		$this->scraper = new MyScraper();
	}

	public function setIMDBID($id)
	{
		$this->imdb_id = $id;
	}

	public function getInfo()
	{
		return json_encode(array($this->imdb_id,$this->year,$this->image,$this->keywords, $this->title, $this->description));
	}

	public function fillFromIMDB()
	{
		if($this->imdb_id == null) return;

		$url = "https://www.imdb.com/title/".$this->imdb_id."/";
		$this->scraper->setUrl($url);
		$this->scraper->scrape();
		$cache = file_get_contents($this->scraper->config->cache_dir."\\".md5($this->scraper->url));

		preg_match_all("/\"datePublished\"\:\"(\d{4}[-]\d{2}[-]\d{2})\"/", $cache, $years);
		$this->year = $years[1][0];

		preg_match_all("/\"keywords\"\:\"([a-zA-Z0-9,\s]+)\"/", $cache, $keywords);
		$this->keywords = $keywords[1][0];

		preg_match_all("/\"image\"\:\"([a-zA-Z0-9@_\/]+)\"/m", $cache, $images);
		preg_match_all("/\"name\"\:\"([a-zA-Z0-9\s]+)\"/", $cache, $titles);
		preg_match_all("/\"description\"\:\"([a-zA-Z0-9\s,\.]+)\"/", $cache, $descrs);

		$this->image = $images[1][1];
		$this->title = $titles[1][0];
		$this->description = $descrs[1][0];

		//"datePublished":"1980-05-09"
	}
}
?>