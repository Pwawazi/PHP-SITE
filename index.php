<?php

declare (strict_types=1);
$env = parse_ini_file('.env');

/**
 * 
 * List the required files
 * 
 */
require 'functions.php';

require 'Database.php';

$config = require 'config.php';

// require 'router.php';

$database = $config['database'];

$db = new Database($database, $database['dbuser'], $database['dbpassword']);

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$posts = $db->query($query, ['id' => $id])->fetchAll();

// dd($posts);

foreach ($posts as $post) {
    echo "<li>".$post['title']."</li>";
}
