<?php

use Core\Database;
use Core\Response;

$config = require base_path('config.php');
$db = new Database($config['database']);


$sample = $db->query(
    "SELECT * FROM vault WHERE id = :id",
    [
        'id' => $_GET['id']
    ]
)->findOrFail();


$user_id = 1;
authorize($sample['user_id'] === $user_id);

$heading = $sample['song_name'];
require base_path('views/samples/show.view.php');