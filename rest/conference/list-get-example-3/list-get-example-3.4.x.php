<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"; 
$token = "your_auth_token"; 
$client = new Services_Twilio($sid, $token);

// Loop over the list of conferences and echo a property for each one
foreach ($client->account->conferences->getIterator(0, 50, array(
        "Status" => "completed",
    "DateCreated" => "2009-07-06"
    )) as $conference
) {
    echo $conference->status;
}
