<?php

$page_title = "Projects - Cook Nook";

require "templates/header.php";


?>

<!-- Main -->
<main>
  <div class="row align-center">
    <div class="small-12 large-10 column" id="content_wrapper">
      <div class="row align-center">
        <div class="small-12 medium-6 column">
          <img src="img/screenshot-cooknook.png" alt="Retrofit Mobile" class="center_image">
        </div>
      </div>
      <div class="row">
        <div class="small-12 column">
          <h3 id="page_title">Cook Nook</h3>
          <p>This project was to make a site for a company that sells cooking equipment, in ASP.net.</p>
          <p>Specifically, with web forms. At this point web forms seems to be getting replaced with MVC, but it still
            allows for the creation of a quick and easy website. It’s even responsive out of the gate! This site is
            mostly just for trying out some of the features of web forms, and practice connecting to a SQL database.
            Also of note is that this site is deployed on Microsoft Azure, with actually is pretty easy to use. </p>
          <p>You can see a live example of the site <a href="http://cooknook-walls.azurewebsites.net/">here</a> or check it out on
            <a href="https://github.com/FelixGoldenSun/Cook_Nook_Site/tree/master">GitHub</a>. If you check out the live site,
            you need to create a login to see some of the pages. Sometimes logging in causes an error, just refresh the
            page if that happens. </p>
        </div>
      </div>
    </div>
  </div>

</main>


<?php

require "templates/footer.php";

?>
