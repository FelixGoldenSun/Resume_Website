<?php

$email = $_POST["email"];
$subject = $_POST["subject"];
$questions = $_POST["questions"];

if (isset($_POST["submit_button"]) && !empty($name) && !empty($email) && !empty($subject) && !empty($questions)){


  $to = "benawalls@gmail.com";
  $subject = "$subject\r\n";
  $message .= "<p>$questions</p>";

  $headers = "From: contact@benawalls.com\r\n";
  $headers .= "Content-type: text/html\r\n";

  mail($to, $subject, $message, $headers);

  $_SESSION['email'] = "true";

  ob_clean();
  header("location: /email_thank.php");

}


// language="HTML"
$form = <<<END_OF_FORM
           <form method="post" action="/contact.php" data-abide>
             <div data-abide-error class="alert callout" style="display: none;">
                <p><i class="fi-alert"></i> There are some errors in your form.</p>
             </div>

             <div class="row">
               <div class="small-12 large-6 column">
                 <input type="text" name="subject" value="$subject" placeholder="Subject" required />
                 <span class="form-error">A subject is required</span>
               </div>
               <div class="small-12  large-6 column">
                 <input type="email" name="email" value="$email" placeholder="Email" required />
                 <span class="form-error">A valid email address is required </span>
               </div>
             </div>
             <div class="row">
               <div class="small-12 column">
                 <textarea name="questions" placeholder="Message" rows="20" required>$questions</textarea>
                 <span class="form-error">Text required</span>
               </div>
             </div>
             <div class="row">
               <div class="small-12 column">
                   <input type="submit" name='submit_button' class="medium success button" value="Send Message" />
               </div>
             </div>
           </form>
END_OF_FORM;

echo $form;

?>