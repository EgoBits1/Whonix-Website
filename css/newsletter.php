<?php

$recipient = "INSERTADDRESS";

$subject = "Subscribe";

$location = "/thanks";

$sender = $recipient;

$body .= "Email: ".$_REQUEST['Email']." \n";

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

header( "Location: $location" );
?>
