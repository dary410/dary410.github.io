<?php
if(isset($_POST['emailer'])) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {
                $name           =   strip_tags($_POST['name']);
                $email_address  =   $_POST['email'];
                $phone          =   $_POST['phone'];
                $message        =   strip_tags($_POST['message']);

                // Create the email and send the message
             // $to_alt         =   $email_address;
                $to             =   "dary410@gmail.com";
                $email_subject  =   "Web Contact Form:  $name";
                $email_body     =   "You have received a new submission from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
                $headers        =   "From: noreply@daryproduct.com\n";
                $headers        .=  "Reply-To: $email_address";

                // Send copy to sender
                // mail($to_alt ,$email_subject,$email_body,$headers);
                // Send original to intended
                if(!mail($to,$email_subject,$email_body,$headers)) { ?>
                <div class="alert alert-danger">
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>
                    <strong>Message failed to send.</strong></div>
                </div>
                 <?php }
                else { ?>
                <div class="alert alert-success">
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>
                    <strong>Your message has been sent. </strong></div>
                </div>
                 <?php }
            }
        else { ?>
        <div class="alert alert-danger">
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>
            <strong>Email Invalid!</strong></div>
        </div>
         <?php }
    } ?>
