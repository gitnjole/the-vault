<?php

use Models\Sample;

$samples = (new Sample())->findAll();

view('samples/samples', [
    'heading' => 'All samples',
    'samples' => $samples
]);
