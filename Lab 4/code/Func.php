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

function getTitles(string $path) : array
{
    $titlesName = array();
    $files = scandir($path);
    foreach ($files as $file)
    {
        if ($file == '.' || $file == '..')
            continue;
        else
            $titlesName[] = substr($file, 0, strlen($file) - strlen('.txt'));
    }
    return $titlesName;
}