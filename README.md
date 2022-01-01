# webframe
A Web library for template development.

![Example Bootstrap Templates](https://i.ibb.co/nsKM1Xp/screencapture-getbootstrap-docs-4-0-examples-cover-2021-12-19-03-15-36.gif)

## Usage
You must include the library. You can view code samples in the **EXAMPLES** file.

## Configuration
You can configure the core script using the following pre-defined JSON properties in the file named **config**.

- db_host
- db_user
- db_pass
- db_name
- timezone
- cache_dir
- plugin_dir

## Current Library
There is current interface support for a variety of different objects that include, but are not limited to the following:

- Movies
- A Web Scraper
- People
- Products
- Templates

### Movies
You can supply an IMDB ID (from the imdb.com URL, near the end) and the scraper will attempt to pull info from the IMDB page.

### Web Scraper
The scraper uses CURL to fetch the HTML source of a supplied URL. Currently only HTTP requests are available. The scraper will cache each request. The cache directory can be configured in the **config** file.

### People
The ability to extend the interface for quick access to fill out information for people such as their social security number, birthday, death day, and other information. 

### Products
You can manage products from various websites. There is also an option to import information from Craiglist URL's and other public marketplace websites.

### Templates
The Bootstrap framework is the only framework currently in use in the project. You must create a configuration file (JSON formatted). The config file has 3 sections: **css**, **js**, and **strings**.

```
{
	"css": {
		"file": [
			"templates/frameworks/bootstrap/css/bootstrap.min.css",
			"templates/frameworks/bootstrap/css/cover.css"
		]
	},
	"js": {
		"file": [
			"templates/frameworks/bootstrap/js/bootstrap.min.js",
			"https://code.jquery.com/jquery-3.2.1.slim.min.js"
		]
	},
	"strings": {
		"title": "Cover",
		"btn1_text": "Learn more"
	}
}
```
You will pass this file location to the template class that implements the ITemplate interface.

The css and js sections are pretty straight-forward. The strings section can store any string you want. Inside the template class you can reference the strings in the config file by their key name. Below we are accessing the **title** key name in the strings section of the config file:

```
$this->addBlock("<title>".$this->t_config->title."</title>");
```
