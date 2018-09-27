<?php
/**
 * Created by PhpStorm.
 * User: rohanmaheshwari
 * Date: 9/26/18
 * Time: 7:00 PM
 */

namespace App;

use Exception;
use Google_Client;
use Google_Service_Sheets;

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . storage_path('google-credentials.json')); // service account json file

class GoogleConnect
{

    public $client;

    public function __construct()
    {
        $client = new Google_Client();
//        $client->setApplicationName(config('google.APPLICATION_NAME'));
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
        $client->setAuthConfig(storage_path('google-credentials.json'));
        $client->useApplicationDefaultCredentials();

        if ($client->isAccessTokenExpired()) {
            $client->refreshTokenWithAssertion();
        }

        $service_token = $client->getAccessToken();

        $service = new \Google_Service_Sheets($client);

        $sheets = new \Revolution\Google\Sheets\Sheets();
        $sheets->setService($service);
        $spreadsheetId = '1tGGWfIyDugcKV8xU-g47bVYA6TyBc22mgHahZWWh9cg';

        $rows = $sheets->spreadsheet($spreadsheetId)->sheet('Sheet1')->all();

        dd($rows);

    }

}