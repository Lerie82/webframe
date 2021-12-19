<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: index.php
Description: index examples
*/
error_reporting(E_ALL & ~E_NOTICE); //display only errors, no notices!
session_start();

/// autoload the core directory
spl_autoload_register(function ($class)
{
    $config = json_decode(file_get_contents("config"));
    include_once($config->plugin_dir."/".$class.".class.php");
});

/// a new user
$user = new MyUser();
$user->setName("Lerie");
$user->setSession(session_regenerate_id());
$user->setAuthLevel(0);

/// query the database
$db = new MyDB();
$results1 = $db->queryForCols("web","id,ip");

/// a new product
$prod = new MyProduct();
$prod->new("My first product","12.99","This is a small short description to fill out some db space.");
$prod->addUrl("https://example.com");

/// new blog post
$blog = new MyBlog();
$blog->createPost();
$blog->updatePost("my blog title", "hello world!", "Lerie Taylor");

/// new movie
$movie = new MyMovie();
$movie->setIMDBID("tt0052520");
$movie->fillFromIMDB();

/// directory watcher
$watcher = new MyDirWatcher();
$watcher->addDir("cache/");

/// templates
$t = new MyTemplate("templates\\default.config");

echo $t->getHtml();
?>