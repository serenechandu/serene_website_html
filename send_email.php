<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $website = $_POST['website'];  
  $message = $_POST['message'];  
  $subject = 'Contact details from website';
  $to = 'contact@serenetax.com';

  $headers = "From: " .$to. "\r\n";
  $headers .= "Reply-To: ".$to. "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $messages = '<html><body>';
  $messages .= "<p>Name : ".$name."</p>";
  $messages .= "<p>Email ID : ".$email."</p>";
  $messages .= "<p>Phone No : ".$phone."</p>";
  $messages .= "<p>website : ".$website."</p>";
  $messages .= "<p>Message : ".$message."</p>";
  $messages .= '</body></html>';


// If there are no errors, send the email
  if (mail ($to, $subject, $messages,$headers)) {
    echo '<script>alert("Thank you for contacting us. We will be in touch with you very soon")</script>';
    echo '<script>window.location.href = "contact.html"</script>';
  } else {
    echo '<script>alert("Message sending failed. Please try again later")</script>';
    echo '<script>window.location.href = "contact.html"</script>';
  }
?>