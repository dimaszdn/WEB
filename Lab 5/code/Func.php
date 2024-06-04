<?php

function getCategories(string $path) : array
{
    $dir = opendir($path);
    $categories = array();
    while ($file = readdir($dir))
    {
        if (is_dir($path . $file) && $file != '.' && $file != '..')
            $categories[] = $file;
    }
    closedir($dir);
    return $categories;
}

function extracted()
{
    $hostname = 'db';
    $username = 'root';
    $password = '123456';
    $database = 'web';
    $port = 3306;

    $test = new mysqli($hostname, $username, $password, $database, $port);

    if (mysqli_connect_errno()) {
        echo "<p>" . "Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error() . "</p>";
    }
    return $test;
}