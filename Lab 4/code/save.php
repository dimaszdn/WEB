<?php

require_once 'vendor/autoload.php';

function redirectToHome() : void
{
    header('Location: /Task3.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
    redirectToHome();

$dataRow = [ [$_POST['category'], $_POST['title'], $_POST['description']] ];

try
{
    $googleAccountKeyFilePath = 'credentials.json';
    putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

    $client = new Google_Client();
    $client->useApplicationDefaultCredentials();
    $client->addScope('https://www.googleapis.com/auth/spreadsheets');

    $service = new Google_Service_Sheets($client);
    $spreadSheetId = "1kPRUyUbiDMN7uemg9NupzE4NMwAXGjgUbce6rlzgsQ0";
    $spreadSheetName = "table";

    $body = new Google_Service_Sheets_ValueRange();
    $body->setValues($dataRow);
    $options = array('valueInputOption' => 'RAW');

    $service->spreadsheets_values->append($spreadSheetId, $spreadSheetName, $body, $options);

    redirectToHome();
}
catch (\Throwable $th)
{
    echo $th->getMessage();
}