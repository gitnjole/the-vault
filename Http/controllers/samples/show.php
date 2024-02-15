<?php

use Core\Database;
use Core\Application;

$db = Application::resolve(Database::class);

$sample = $db->query(
    "SELECT * FROM samples WHERE sample_id = :sample_id",
    [
        'sample_id' => $_GET['id']
    ]
)->findOrFail();

view('samples/show', [
    'heading' => $sample['song_name'],
    'sample' => $sample
]);