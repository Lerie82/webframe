## MySQL PDO Example
```
/// query the database
$db = new MyDB();
$results1 = $db->queryForCols("web","id,ip");
```

```
D:\wamp64\www\webframe\index.php:45:
array (size=10)
  0 => 
    array (size=2)
      'id' => int 1
      'ip' => string '34.206.63.71' (length=12)
  1 => 
    array (size=2)
      'id' => int 2
      'ip' => string '85.187.218.101' (length=14)
  2 => 
    array (size=2)
      'id' => int 3
      'ip' => string '156.250.19.188' (length=14)
  3 => 
    array (size=2)
      'id' => int 4
      'ip' => string '145.236.23.202' (length=14)
  4 => 
    array (size=2)
      'id' => int 5
      'ip' => string 'http://154.37.2' (length=15)
  5 => 
    array (size=2)
      'id' => int 6
      'ip' => string '155.240.3.55' (length=12)
  6 => 
    array (size=2)
      'id' => int 7
      'ip' => string '155.240.3.55' (length=12)
  7 => 
    array (size=2)
      'id' => int 8
      'ip' => string '23.249.176.106' (length=14)
  8 => 
    array (size=2)
      'id' => int 9
      'ip' => string '223.7.199.175' (length=13)
  9 => 
    array (size=2)
      'id' => int 10
      'ip' => string '128.39.198.10' (length=13)
```

## Movie Information