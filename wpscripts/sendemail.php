<?php

        include('Mail.php');
        include('Mail/mime.php');

        // Constructing the email
        $sender = "moses <mnijmeh11@georgefox.edu>";                              // Your name and email address
        $recipient = "moses <mosesnijmeh@yahoo.com>";                           // The Recipients name and email address
        $subject = "Test Email";                                            // Subject for the email
        $text = 'We missed you.';                                  // Text version of the email
        $html = '<html><body><p>check the ladder game because you have a request awaiting for you! </p></body></html>';  // HTML version of the email
        $crlf = "\n";
        $headers = array(
                        'From'          => $sender,
                        'Return-Path'   => $sender,
                        'Subject'       => $subject
                        );

        // Creating the Mime message
        $mime = new Mail_mime($crlf);

        // Setting the body of the email
        $mime->setTXTBody($text);
        $mime->setHTMLBody($html);

        $body = $mime->get();
        $headers = $mime->headers($headers);

        // Sending the email
        $mail =& Mail::factory('mail');
        $mail->send($recipient, $headers, $body);
?>