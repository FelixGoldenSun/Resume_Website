<?php
ob_start();
session_start();

$page_title = "Mail Success";


if($_SESSION["email"] != "true"){
  header("location: /index.php");

}else{
  session_destroy();

}

require "templates/header.php";


?>

<!-- Main -->
<main>
  <div class="row align-center">
    <div class="small-12 large-10" id="content_wrapper">
      <div class="row">
        <div class="small-12 column">
          <h2>Success!</h2>
          <p>Your message has been sent. I check my email daily, so you should hear from me shortly. Thank you for messaging me.</p>
        </div>
      </div>
    </div>
  </div>

</main>


<?php

require "templates/footer.php";

ob_end_flush();

?>
