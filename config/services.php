<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_Key' => 'AIzaSyAk-Hi6GLOQicn80SeCNDUPUlF_4thGsf8',
        'auth_Domain' => 'downstream-94a07.firebaseapp.com',
        'database_url' => 'https://downstream-94a07-default-rtdb.firebaseio.com/',
        'project_id' => 'downstream-94a07',
        'storage_bucket' => 'downstream-94a07.appspot.com',
        'messaging_sender_id' => '833414700279',
        'app_id' => '1:833414700279:web:4144e92d62066851c087f2',
        'measurement_id' => 'G-9M4YK85JFR',
    ],

];
