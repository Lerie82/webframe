<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyScraper.class.php
Description: web scraper
*/
include_once("core/IScraper.class.php");

class MyScraper implements IScraper
{
	public $url = null;

	public function __construct()
	{
		if(!function_exists("curl_init") &&
			!function_exists("curl_setopt") &&
			!function_exists("curl_exec") &&
			!function_exists("curl_close")) return false;

		$this->config = json_decode(file_get_contents("config"));
	}

	public function setUrl($url)
	{
		$this->url = $url;
	}
	
	public function scrape()
	{
		if($this->url == null)
		{
			$this->data = "No URL is set";
			return;
		}

		$this->cache_file = $this->config->cache_dir."\\".md5($this->url);

		if($this->isCached())
		{
			return;
		} else {
			$c = curl_init();
			$fh = fopen($this->cache_file, "w");
			curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($c, CURLOPT_URL, $this->url);
	        curl_setopt($c, CURLOPT_FILE, $fh);
	        curl_setopt($c, CURLOPT_HEADER, 0);
	        curl_exec($c);
			curl_close($c);
			fclose($fh);
		}
	}
	
	public function isCached()
	{
		if(file_exists($this->cache_file))
		{
			return true;
		}

		return false;
	}


/*9287777313
sgt tippet*/
}
?>

