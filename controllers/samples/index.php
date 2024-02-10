<?php

$config = require 'config.php';
$db = new Database($config['database'], $config['user']);


$query = "SELECT * FROM samples";
$samples = $db->query($query)->fetchAll();

$bgClasscounter = 0;

$heading = 'All samples';
require base_path('views/samples/index.view.php');


