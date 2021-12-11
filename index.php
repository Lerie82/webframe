<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: index.php
Description: index controller
*/
error_reporting(E_ALL & ~E_NOTICE); //display only errors, no notices!
session_start();

/// autoload the core directory
spl_autoload_register(function ($class)
{
    include_once('plugins/'.$class.'.class.php');
});

/// a new user
$user = new MyUser();
$user->setName("Lerie");
$user->setSession(session_regenerate_id());
$user->setAuthLevel(0);

/// query the database
$db = new MyDB();
$results1 = $db->queryForCols("web","id,ip");

$prod = new MyProduct();
$prod->new("My first product","12.99","This is a small short description to fill out some db space.");
$prod->save();

die(var_dump($prod));
?>