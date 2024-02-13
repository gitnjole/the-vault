<?php

view('session/login', [
    'heading' => 'Login',
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);