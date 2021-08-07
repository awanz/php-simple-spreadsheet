<?php
    require __DIR__ . '/vendor/autoload.php';

    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('dynamic-shift-320809-ad5897c2bd2d.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    $service = new Google_Service_Sheets($client);
    $spreadsheet = new Google_Service_Sheets_Spreadsheet([
        'properties' => [
            'title' => "Awan"
        ]
    ]);
    $spreadsheet = $service->spreadsheets->create($spreadsheet, [
        'fields' => 'spreadsheetId'
    ]);
    print_r("tes");
    print_r("Spreadsheet ID: %s\n", $spreadsheet->spreadsheetId);
