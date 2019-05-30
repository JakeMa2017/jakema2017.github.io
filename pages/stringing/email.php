<?php include 'email.html' ?>


<?php
// Multiple recipients
$to = ''; // note the comma

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["emailAddress"];
$racketModel = $_POST["racketModel"];
$racketColor = $_POST["racketColor"];
$stringType = $_POST["string-type"];
$stringTension = $_POST["string-tension"];

$subject = 'Stringing Service Received';
$from = 'jakema@jakema2017.com';
 
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: '.$firstName.' '.$lastName.'<'.$email.'>';
$headers[] = 'From: Jake Ma <jakema@jakema2017.com>';
// $headers[] = 'Cc: jakema2017@gmail.com';
$headers[] = 'Bcc: jakema@jakema2017.com';
 
// Compose a simple HTML email message
$message = '<html><body>';

$message .= '<p>I have received your stringing request. Here\'s the information: </p>';
$message .= '<table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">';
$message .= '<tr>';
$message .= '<th style="border:1px solid #dddddd;text-align:left;padding:8px;">First Name</th>';
$message .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px;">'.$firstName.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<th style="border:1px solid #dddddd;text-align:left;padding:8px;">Last Name</th>';
$message .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px;">'.$lastName.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<th style="border:1px solid #dddddd;text-align:left;padding:8px;">Email Address</th>';
$message .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px;">'.$email.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<th style="border:1px solid #dddddd;text-align:left;padding:8px;">Racket Model</th>';
$message .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px;">'.$racketModel.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<th style="border:1px solid #dddddd;text-align:left;padding:8px;">Racket Color</th>';
$message .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px;">'.$racketColor.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<th style="border:1px solid #dddddd;text-align:left;padding:8px;">String Type</th>';
$message .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px;">'.$stringType.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<th style="border:1px solid #dddddd;text-align:left;padding:8px;">String Tension</th>';
$message .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px;">'.$stringTension.'</td>';
$message .= '</tr>';
$message .= '</table>';

$message .= '<p style="Arial, Helvetica, sans-serif;">You will get another email when your racket is ready for pick-up</p>';
$message .= '<p style="Arial, Helvetica, sans-serif;">In the meantime, Feel free to contact me at jakema@jakema2017.com</p>';
$message .= '</body></html><br><br><br>';

$message .= '-----';
$message .= '<p style="padding: 0px;margin: 0px;"><strong>Jake Ma</strong></p>';
$message .= '<p style="margin: 0px;padding: 0px;">jakema@jakema2017.com</p>';
 
// Sending email
if(mail($to, $subject, $message, implode("\r\n", $headers))){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>