<? php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'mohitjoshi9971@gmail.com'; 
// website email @infowepack.in

$email_subject = " New Form submission";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n". 
              "Subject: $subject.\n".
              "User Message: $message.\n";
              
  $to =  'mohitjoshi9971@gmail.com';
//   email where email recived
  
  $headers ="Form: $email_form \r\n";

  $headers .=" Reply-To: $visitor_email \r\n";

  mail(  $to, $email_subject, $email_body, $headers);

  header("Location: index.html");

?>