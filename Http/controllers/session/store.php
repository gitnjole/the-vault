<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($credentials = [
    'username'=> $_POST['username'],
    'password'=> $_POST['password']
]);

$signIn = (new Authenticator)->attempt($credentials);

if (! $signIn) {
    $form->addError('username', 'No matching username or password found.')
        ->throwException();
}
    
redirect('/');