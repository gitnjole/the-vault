<?php

use Core\Database;
use Core\Application;
use Http\Forms\SampleForm;

$db = Application::resolve(Database::class);

$form = new SampleForm();
$statement = $form->createStatement($_POST);
$params = $form->createParams($_POST, 'samples');


$params['user_submissions'] = [
    ':user_id' => $_SESSION['user']['user_id'],
];

$query = [
    'samples' => "
        INSERT INTO samples ({$statement['fields']})
        VALUES ({$statement['values']});
    ",
    'user_relations' => "
        INSERT INTO user_submissions (user_id, sample_id)
        VALUES (:user_id, :sample_id);
    "
];

$result = $db->insert($query, $params);

redirect('/samples');