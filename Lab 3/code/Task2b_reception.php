<?php
session_start();
if (isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['age']))
{
    echo "<p>Фамилия: {$_SESSION['surname']}</p>";
    echo "<p>Имя: {$_SESSION['name']}</p>";
    echo "<p>Возраст: {$_SESSION['age']}</p>";
}