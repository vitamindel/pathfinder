<?php 
// the message
//$msg = "First line of text\nSecond line of text";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['msg'];
//echo $message;
//echo $name;
//echo $subject;
//echo $email;
// use wordwrap() if lines are longer than 70 characters
$message = wordwrap($message,70) . " - **Email From** - " . $email . " (" . $name . ")";
// send email
mail("support@wwmc.info",$subject,$message);
mail($email, "WWMC Email Confirmation", "This is a confirmation that your email has been sent to support@wwmc.info. Please be patient as a response to your message can be expected within 1-3 business days. Replies to this email will not be viewed.");

header("Location: https://wwmc.info/sent");
?>
