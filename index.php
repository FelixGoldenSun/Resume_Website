<?php

$page_title = "About Me";

require "templates/header.php";

?>

<!-- Main -->
<main>
  <div class="row align-center">
    <div class="small-12 medium-10 column" id="content_wrapper">
      <div class="row">
          <div class="media-object stack-for-small">
            <div class="media-object-section" id="index-image">
              <div class="thumbnail">
                <img src= "img/ben_suit.jpg" alt="My picture">
              </div>
            </div>
            <div class="media-object-section main-section">
              <h3 id="index-title">Software Developer</h3>
              <p>Hello! My name is Ben, and I am a software developer.
                Not exclusively, I have also developed websites and I know how to throw together a SQL query.
                I currently live in Spokane, WA.I have just recently finished two years of collage at Spokane Community College, and I am available for hire.
                So if you need a developer, don’t hesitate to contact me!</p>
            </div>
          </div>
      </div>
    </div>
  </div>

</main>


<?php

require "templates/footer.php";

?>
