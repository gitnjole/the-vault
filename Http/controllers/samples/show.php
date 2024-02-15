<?php

use Core\Database;
use Core\Application;

$db = Application::resolve(Database::class);

$sample = $db->query(
    "SELECT 
    s.*,
    sl.sample_link,
    sl.song_link
    FROM 
    samples s
    LEFT JOIN 
    sample_links sl ON s.sample_id = sl.sample_id
    WHERE s.sample_id = :sample_id",
    [
        'sample_id' => $_GET['id']
    ]
)->findOrFail();

view('samples/show', [
    'sample' => $sample
]);
