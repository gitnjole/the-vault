<?php

use Core\Database;
use Core\Validator;
use Core\Application;

$db = Application::resolve(Database::class);

$username = $_POST['username'];

$errors = [];
if (Validator::isEmpty($_POST['username'])) {
    $errors['username'] = 'Entry can not be empty.';
}

if (Validator::isLength($_POST['username'], 1, 25)) {
    $errors['username'] = 'Length of username can not be more than 25.';
}

if (Validator::isEmpty($_POST['password'])) {
    $errors['password'] = 'Entry can not be empty.';
}

if (Validator::isLength($_POST['password'])) {
    $errors['password'] = 'Length of password can not be more than 255 characters';
}

if (! empty($errors)) {
    return view('session/login', [
        'errors'=> $errors,
        'heading' => 'Login'
    ]);
}

$user = $db->query(
    'SELECT * FROM users WHERE username = :username', 
    [
        'username'=> $username,
    ]
)->one();

if (! $user) {
    return view(('session/login'), [
        'heading'=> 'Login',
        'errors'=> [
            'username' => 'No matching account found.'
        ]]);
}

if (password_verify($_POST['password'], $user['password'])) {
    login([
        'username' => $username,
        'user_id' => $user['user_id']
    ]);

    header('location: /');
    die();
}

return view(('session/login'), [
    'heading'=> 'Login',
    'errors'=> [
        'password' => 'Wrong password.'
    ]]);