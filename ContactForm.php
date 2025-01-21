<title>Sinsational Adult Modelling Agency | We Are All Sinners | Contact Form Query</title>
<link rel="shortcut icon" href="myIcon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style.css">

<div id="content">

<div id="content-top">

<img src="KWSHeader.png" title="Sinsational: We Are All Sinners ...">

</div>

<?php

 $mail_to = 'enquiries@sinsational.online'; // specify your email here

    // Assigning data from the $_POST array to variables
    $name = $_POST['name'];
    $mail_from = $_POST['email'];
    $message = $_POST['comments'];

    // Construct email subject
    $subject = 'Sinsational.Online - Message From Visitor ' . $name;

    // Construct email body
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mail_from . "\r\n";
    $body_message .= 'Message: ' . $message;

    // Construct email headers
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for contacting Sinsational Online. One of our team members will be in touch.');
       // window.location = 'contact-form.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message was not sent. Please, notify the site administrator webmaster@sinsational.online');
        //window.location = 'contact-form.html';
    </script>
    <?php
    }

?>

<?php echo "Return <a href='javascript:history.back();'>Back</a> To The Main Site."; ?>

<br/><br/><div id="content-bottom">
     <p class="FH"><img src="SinsationalHeaderCLUpdated.png" title="Sinsational: We Are All Sinners ..."></p>
  </div>

</div>