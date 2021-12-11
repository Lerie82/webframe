<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IDb.class.php
Description: Interface for the PDO wrapper
*/
interface IDb
{

     public function __construct();
     public function connect();
     public function queryForCols($table, $columns);
     public function queryAll($query);
}
?>