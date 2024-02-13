<?php

use Core\Validator;
use Core\Application;
use Core\Database;

$db = Application::resolve(Database::class);

$sample = $db->query(
    "SELECT * FROM vault WHERE id = :id",
    [
        'id' => $_POST['id']
    ]
)->findOrFail();

$user_id = 1;
authorize($sample['user_id'] === $user_id);

$errors = [];

if (Validator::isEmpty($_POST['sample'])) {
    $errors[] = 'Entry can not be empty.';
}

if (Validator::isLength($_POST['sample'])) {
    $errors[] = 'Length of sample can not be more than 250.';
}

if (count($errors)) {
    view('samples/edit', [
        'heading' => 'editing ' .$sample['song_name'],
        'errors' => $errors,
        'sample' => $sample
    ]);
    die();
}

$db->query('UPDATE vault SET sample = :sample WHERE id = :id', [
    'id' => $_POST['id'],
    'sample' => $_POST['sample']
]);

redirect('/samples');