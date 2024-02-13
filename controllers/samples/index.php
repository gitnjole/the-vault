<?php

use Core\Database;
use Core\Application;

$db = Application::resolve(Database::class);

$samples = $db->query(
    "SELECT * FROM vault"
)->all();


view('samples/samples', [
    'heading' => 'All samples',
    'samples' => $samples
]);
