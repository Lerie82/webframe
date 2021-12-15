# webframe
A Web library for template development.

## Usage
You must include the library. You can view code samples in the index.php file.

## Current Library
There is current interface support for a variety of different objects that include, but are not limited to the following:

- Movies
- A Web Scraper
- People
- Products

### Movies
You can supply an IMDB ID (from the imdb.com URL, near the end) and the scraper will attempt to pull info from the IMDB page.

### Web Scraper
The scraper uses CURL to fetch the HTML source of a supplied URL. Currently only HTTP requests are available.

### People
The ability to extend the interface for quick access to fill out information for people such as their social security number, birthday, death day, and other information. 

### Products
You can manage products from various websites. There is also an option to import information from Craiglist URL's and other public marketplace websites.