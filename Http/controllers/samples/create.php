<?php

view('samples/create', [
    'heading' => 'Create a sample submission',
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);