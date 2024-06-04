<?php

require_once 'Func.php';

function redirectToHome() : void
{
    header('Location: /Task3.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
    redirectToHome();

$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$mysqli = extracted();
$mysqli->query("INSERT INTO web.ad (category, title, description, email) VALUES ('$category', '$title', '$description', 'email')");

redirectToHome();