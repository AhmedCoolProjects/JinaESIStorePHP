<?php

$my_json_file = '../backend/products.json';
$my_json_data = file_get_contents($my_json_file);
$data = json_decode($my_json_data, true);
