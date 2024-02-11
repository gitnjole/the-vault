<?php

use Core\Database;
use Core\Application;

$heading = 'Welcome to The Vault.';

$db = Application::resolve(Database::class);

$samples = $db->query(
    "SELECT * FROM vault"
)->all();

require view('samples/samples.view.php', [
    'heading' => 'All samples',
    'samples' => $samples
]);