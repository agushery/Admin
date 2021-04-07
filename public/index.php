<?php
    //membuat lajur akses url
    $path = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
    $path = str_replace("index.php", "",$path);
    //lajur root (localhost)
    define('ROOT', $path);
    //lajur assets (public/assets)
    define('ASSETS', $path . "assets/");

    include "../app/init.php";

    //inisialisasi class App (core/app.php)
    $app = new App();
?>
