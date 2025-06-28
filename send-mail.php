<?php

$subject = 'Website Contact Form';
$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];  
$Message = $_POST['message'];  
$from = "info@nitinbang.com";

if(!empty($email)){
//$from = "Infinity Clik <".$email.">";
$from = "info@nitinbang.com";
$to = "info@nitinbang.com";
$subject = $subject;
$body = "Inquiry For you\n\r<br>";
$body .= "First Name : ".$fname."\n\r<br>";
$body .= "Last Name : ".$lname."\n\r<br>";
$body .= "Email : ".$email."\n\r<br>";
$body .= "subject : ".$subject."\n\r<br>";
$body .= "Message : ".$message."\n\r<br>";
$body .= "Please check and revert Back\n\r<br>";

// $host = "";
// $username = "";
// $password = "";

// $headers = array ('From' => $from,
  // 'To' => $to,
  // 'Subject' => $subject);
  
// $smtp = Mail::factory('smtp',
  // array ('host' => $host,
    // 'auth' => true,
    // 'username' => $username,
    // 'password' => $password));

// $mail = $smtp->send($to, $headers, $body);

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$from.'' . "\r\n";

$mail = mail($to,$subject,$body, $headers);
if($mail){
  echo("<p>Message successfully sent!</p>");
  header('Location: index.html');
}
// if (PEAR::isError($mail)) {
  // echo("<p>" . $mail->getMessage() . "</p>");
 // } else {
  // echo("<p>Message successfully sent!</p>");
  // header('Location: contact.html');

 // }
 }
?>