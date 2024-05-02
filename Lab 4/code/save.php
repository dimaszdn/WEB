<?php

require_once 'Func.php';

function redirectToHome() : void
{
    header('Location: /Task3.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
    redirectToHome();

$dataRow = [ [$_POST['category'], $_POST['title'], $_POST['description']] ];

$client = createClient();
$service = new Google_Service_Sheets($client);
addInGoogleTable($service, 'table', $dataRow);

redirectToHome();