<?php

ob_start();

session_start();

$page_title = "Contact Me";

require "templates/header.php";

?>


<!-- Main -->
<main>
  <div class="row">
    <div class="small-12 small-centered medium-12 medium-centered align-bottom" id="content_wrapper">

      <div class="row">
        <div class="small-12 column">
          <h2>Contact Me</h2>
          <p>If you want to contact me, go ahead and use the form below. It will be sent directly to my email.
            Alternatively, you can call or text me. Either way I will get back to you as soon as possible.</p>
          <p><b>Email:</b> benawalls@gmail.com</p>
          <p><b>Phone:</b> (509) 710-4671</p>
        </div>

      </div>

      <!-- One -->
      <section>

        <!-- Content -->
        <?php

        require "templates/form.php";

        ?>

      </section>
    </div>
  </div>
</main>

 <?php

 require "templates/footer.php";

 ob_end_flush();

 ?>
