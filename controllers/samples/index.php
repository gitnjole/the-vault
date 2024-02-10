<?php

use Core\Database;

$heading = 'Welcome to The Vault.';

$config = require base_path('config.php');
$db = new Database($config['database']);

$samples = $db->query(
    "SELECT * FROM vault"
)->findAll();

require base_path('views/samples/samples.view.php');