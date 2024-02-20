<?php

use Models\Sample;

$sample = (new Sample())->findOne();

view('samples/show', [
    'sample' => $sample
]);
