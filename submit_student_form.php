<?php
if(isset($_POST['email'])) {
    $email_to = "jolkweb@gmail.com";
    $email_subject = "What A Yolk Info Request";
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <div class="feedback" style="font-size:45px;">Thank you for contacting us. We will be in touch with you very soon.<br><a href="http://jolkweb.com"><button style="font-size:40px; background-color:grey; color:white;">Home Page</button></a></div>
  <?php
}
?>
