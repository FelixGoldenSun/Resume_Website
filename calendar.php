<?php

$page_title = "Projects - Calendar";

require "templates/header.php";

require "templates/functions.php";

$month = $_GET['month'];
$year = $_GET['year'];

?>


<!-- Main -->
<main>
  <div class="row align-center">
    <div class="small-12 large-10 column" id="content_wrapper">
      <div class="row">
        <div class="small-12 column">

        <?php echo miniCalendar($month, $year) ?>

        </div>
      </div>
      <div class="row">
        <div class="small-12 column">
          <h3 id="page_title">Calendar</h3>
          <p>This was a project to create a working calendar in PHP. You can click the links to go back and forward in time.</p>
          <p>The trickiest part was when it switches year. Well, not that tricky, but it did take me longer than I thought it would.
            The code was originally made in Ruby, for a Rails project. I just changed the syntax and it worked just fine. </p>
          <p>You can see the source code on <a href="https://github.com/FelixGoldenSun/resume_website/blob/master/templates/functions.php">GitHub</a>.
            It’s the function called miniCalendar.</p>
        </div>
      </div>
    </div>
</main>


<?php

require "templates/footer.php";

?>

