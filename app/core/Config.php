<?php
    //membuat lajur akses url
    $path = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
    $path = str_replace("index.php", "",$path);
    //lajur root (localhost)
    define('ROOT', $path);
    define('WEBSITE_TITLE', 'Electronic Citizen Records');

    //Database
    define('DB_NAME', 'db_citizen');
    define('DB_USER', 'agushery');
    define('DB_PASS', 'ganesha123');
    define('DB_HOST', 'localhost');

    define('DEBUG', true);

    if (DEBUG) {
        ini_set('display_errors', 1);
    }else {
        ini_set('display_errors', 2);
    }