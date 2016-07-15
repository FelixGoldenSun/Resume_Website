<?php

$page_title = "Projects - CIS 230";

require "templates/header.php";


?>

<!-- Main -->
<main>
  <div class="row align-center">
    <div class="small-12 large-10 column" id="content_wrapper">
      <div class="row align-center">
        <div class="small-12 medium-6 column">
          <img src="img/cis230_site.png" alt="CIS 230 Site" class="center_image">
        </div>
      </div>
      <div class="row">
        <div class="small-12 column">
          <h3 id="page_title">CIS 230 PHP Site</h3>
          <p>This is a site that was made for my PHP class in college.</p>
          <p> It contains a calendar, a contact me page that sends email, and some working blog systems.
            The blog (Not the article or product one) also has comments and a rating system.
            The site is connected to a database that stores all of the comments, and has a full CRUD system implemented.
            The site uploaded to GitHub won’t work with the database, but you can see the live version
            <a href="http://www.cis230.benawalls.com/index.php">here</a>.
            If you login you can add, edit, and delete articles and the like. The username is jcd, and the password is bionicman.</p>
          <p>You can check out the source code on <a href="https://github.com/FelixGoldenSun/CIS_230_PHP/tree/master">GitHub</a>.
            The design was made by <a href="https://html5up.net/">HTML5 Up</a>, which  is free under the Creative Commons.</p>
        </div>
      </div>
    </div>
  </div>

</main>


<?php

require "templates/footer.php";

?>
