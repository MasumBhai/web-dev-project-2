<?php
require __DIR__.'/includes/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/clientwebsiteanimefreak-firebase-adminsdk-jkzp3-5342003835.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://clientwebsiteanimefreak.firebaseio.com')
    ->create();
$database = $firebase->getDatabase();
?>