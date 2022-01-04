## Autoload the Core
```
spl_autoload_register(function ($class)
{
    $config = json_decode(file_get_contents("config"));
    include_once($config->plugin_dir."/".$class.".class.php");
});
```
## MySQL PDO
```
$db = new MyDB();
$results1 = $db->queryForCols("web","id,ip");
```

#### Prepared Inserts
```
$data = [
    'username' => "test",
    'email' => 'email@email.com'
];

$db = new Db();
$db->preparedInsert("users", $data);
```

## Movies
You can create new movies and try to get their info from IMDB.
```
$movie = new MyMovie();
$movie->setIMDBID("tt0052520");
$movie->fillFromIMDB();
```
## Blog Posts
```
$blog = new MyBlog();
$blog->createPost();
$blog->updatePost("my blog title", "hello world!", "Lerie Taylor");
```
## Products
```
$prod = new MyProduct();
$prod->new("My first product","12.99","This is a small short description to fill out some db space.");
$prod->addUrl("https://example.com");
```
## Users
```
$user = new MyUser();
$user->setName("Lerie");
$user->setSession(session_regenerate_id());
```

## Templates
```
$t = new MyTemplate("templates\\cover.config");
echo $t->getHtml();
```