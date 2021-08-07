<?php
    require __DIR__ . '/vendor/autoload.php';

    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('dynamic-shift-320809-ad5897c2bd2d.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '1EWLqNcGWk3kpGGgTpKgOrZoaVBweMWpDVICU4nulFhQ';
    $range = '2020!A9:C9';

    $values = [
        [
            "Awan7", "Enter", "Tasikmalaya"
        ],
        // Additional rows ...
    ];
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => "RAW"
    ];
    $result = $service->spreadsheets_values->update($spreadsheetId, $range,
    $body, $params);
    
