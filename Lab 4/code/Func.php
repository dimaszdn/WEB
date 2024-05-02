<?php

require_once 'vendor/autoload.php';
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

function getSpreadSheetId() : string
{
    return '1kPRUyUbiDMN7uemg9NupzE4NMwAXGjgUbce6rlzgsQ0';
}

function createClient() : Google_Client
{
    $client = new Google_Client();
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAuthConfig('credentials.json');
    return $client;
}

function addInGoogleTable(Google_Service_Sheets& $service, string $spreadSheetName, array $dataRow) : void
{
    $body = new Google_Service_Sheets_ValueRange();
    $body->setValues($dataRow);
    $options = array('valueInputOption' => 'RAW');
    $service->spreadsheets_values->append(getSpreadSheetId(), $spreadSheetName, $body, $options);
}

function getDataFromTable(Google_Service_Sheets & $service, string $range) : array
{
   $response = $service->spreadsheets_values->get(getSpreadSheetId(), $range);
   return $response->getValues();
}