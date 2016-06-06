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
                <img src= "img/2016_02_1711_10_414949.JPG">
              </div>
            </div>
            <div class="media-object-section main-section">
              <h3 id="index-title">Software Developer</h3>
              <p>Hello! My name is Ben, and I am a software developer.
                Not exclusively, I have also developed websites and I know how to throw together a SQL query. </p>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="small-12 medium-12 column">
          <p>Now that you’re here, feel free to check out some of my projects.
            They are a mix of websites, command line programs and a few mobile apps.
            I am particularly fond of the diabetes calculator app, it’s made for Android and IOS. Also check out my word search program.
            It takes an array of words and makes a word search pdf, complete with an answer sheet. </p>
          <p>I am currently just finishing up two years of college, and I am available for hire. So if you need a developer, don’t hesitate to contact me!</p>
        </div>
      </div>
    </div>
  </div>

</main>


<?php

require "templates/footer.php";

?>
