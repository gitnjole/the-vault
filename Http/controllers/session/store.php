<?php

use Core\Session;
use Core\Authenticator;
use Http\Forms\LoginForm;

$credentials = [
    'username'=> $_POST['username'],
    'password'=> $_POST['password']
];

$form = new LoginForm();
if ($form->validate($credentials)) {

    if ((new Authenticator)->attempt($credentials)) {
        redirect('/');
    } 
       
    $form->addError(
        'username',
        'No matching username or password found.'
    );
}

Session::flash('errors', $form->getErrors());
Session::flash('old', [
    'username' => $_POST['username'],
]);

return redirect('/login');