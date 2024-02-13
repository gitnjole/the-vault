<?php

use Core\Database;
use Core\Application;

$db = Application::resolve(Database::class);

$sample = $db->query(
    "SELECT * FROM vault WHERE id = :id",
    [
        'id' => $_GET['id']
    ]
)->findOrFail();


$user_id = 1;
authorize($sample['user_id'] === $user_id);

view('samples/show', [
    'heading' => $sample['song_name'],
    'sample' => $sample
]);