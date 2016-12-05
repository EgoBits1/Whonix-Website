<?php

$recipient = "INSERTADDRESS";

$subject = "Subscribe";

$location = "/thanks";

$sender = $recipient;


if (isset($_POST['sub'])) {
        $body .= "Add Email: ".$_REQUEST['Email']." \n";
}

elseif (isset($_POST['unsub'])) {
        $body .= "Remove Email: ".$_REQUEST['Email']." \n";
}

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

header( "Location: $location" );
?>
