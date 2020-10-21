<?php
$to = 'krystianw.e.t@gmail.com';

$subject = 'This is our test mail';

$message = 'hi';

$headers = "From: The Sender Name <sender@johnmorrisonline.com>\r\n";
$headers .= "Reply-To: replyto@johnmorrisonline.com";

mail($to, $subject, $message, $headers);
?>
