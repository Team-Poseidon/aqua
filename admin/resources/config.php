<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'teddy_error';
$db['db_pass'] = '';
$db['db_name'] = 'big_data';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection) {
    // echo "DB Connected";
}
