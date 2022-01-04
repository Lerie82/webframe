<?php
/*
Author: Lerie Taylor
Date: 2021,2022
Filename: core/IDb.class.php
Description: Interface for the PDO wrapper
*/
interface IDb
{

     public function __construct();
     public function connect();
     public function queryForCols($table, $columns);
     public function queryAll($query);
     
     /*$fields = [
         'name' => $name,
         'surname' => $surname,
         'sex' => $sex,
     ];*/
     public function preparedInsert($tbl, $fields);
}
?>