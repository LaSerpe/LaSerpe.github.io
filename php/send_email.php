<?php
if(isset($_POST['submit'])) {
    $email_to = "giulio.gori@inria.fr";
    $email_subject = "Mail from website";
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $qualification = $_POST['qualification']; 
    $mail_body = $_POST['comment']; 
    // $telephone = $_POST['telephone']; // not required
    // $location = $_POST['location']; // required
    // $address = $_POST['address']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Email: ".clean_string($qualification)."\n";
    $email_message .= "Email: ".clean_string($mail_body)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
// ?/>
//  
//
//  <div class="feedback">Thank you for contacting us. We will be in touch with you very soon.</div>
//  <?php
}
?>