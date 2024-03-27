<?php
session_start();
if (!empty($_SESSION['surname']) && !empty($_SESSION['name']) && !empty($_SESSION['age']))
{
    echo "<p>Фамилия: {$_SESSION['surname']}</p>";
    echo "<p>Имя: {$_SESSION['name']}</p>";
    echo "<p>Возраст: {$_SESSION['age']}</p>";
}